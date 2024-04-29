<?php

namespace App\Repository\Battery;

use App\Http\Resources\TireResource;
use App\Models\Battery;
use App\Repository\Battery\BatteryRepositoryInterface;
use Illuminate\Support\Facades\File;

class BatteryRepository implements BatteryRepositoryInterface
{   public function index()
{
    $data = TireResource::collection(Battery::all());
    $word = "batteries"; // Initialize the $word variable
    return view('dash.back.cars.index', compact('data', 'word'));
}

    public function create()

    {
        $route=route('batteries.store');
        return view('dash.back.cars.create',compact('route'));

    }

    public function store($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('batteries', $imageName);
        }
        $data=new Battery();
        $data->name=$request->name;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->user_id=auth()->user()->id;
        $data->image=$imageName ?? null;
        $data->save();
//      toastr::success('Data has been saved successfully!');
        session()->flash('success', 'Data has been saved successfully!');


        return redirect()->route('batteries.index');

    }


    public function edit($id)
    {
        $data=Battery::find($id)->first();
        $route = route('batteries.update', $data->id);

//      $find=Tire::find($id)->get();
//      $data= TireResource::collection( $find);


        return view('dash.back.cars.edit',compact('data','route'));

    }


    public function update($request)
    {

        $data=Battery::findOrFail($request->id);
        $oldImage=$data->image ?? null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($oldImage !==null){

                File::delete(public_path('batteries/' . $oldImage));

            }

            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('batteries', $imageName);
        }
        $data->name=$request->name;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->image=$imageName ?? null;
        $data->save();
//      toastr::success('Data has been saved successfully!');
        session()->flash('success', 'Data has been updated successfully!');


        return redirect()->route('batteries.index');

    }


    public function destory($id)
    {
        $data=Battery::findOrFail($id);
        $oldImage=$data->image ?? null;
        if ($oldImage !==null){

            File::delete(public_path('batteries/' . $oldImage));

        }
        $data->delete();

        session()->flash('danger', 'Data has been delete successfully!');

        return redirect()->route('batteries.index');




    }

}
