<?php

namespace App\Repository\Accessory;

use App\Http\Resources\TireResource;
use App\Models\Accessory;
use App\Repository\Accessory\AccessoryRepositoryInterface;
use Illuminate\Support\Facades\File;

class AccessoryRepository implements AccessoryRepositoryInterface
{
    public function index()
    {
        $data = TireResource::collection(Accessory::all());
        $word = "accessories"; // Initialize the $word variable
        return view('dash.back.cars.index', compact('data', 'word'));
    }

    public function create()

    {
        $route=route('accessories.store');
        return view('dash.back.cars.create',compact('route'));

    }

    public function store($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('accessories', $imageName);
        }
        $data=new Accessory();
        $data->name=$request->name;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->user_id=auth()->user()->id;
        $data->image=$imageName ?? null;
        $data->save();
//      toastr::success('Data has been saved successfully!');
        session()->flash('success', 'Data has been saved successfully!');


        return redirect()->route('accessories.index');

    }


    public function edit($id)
    {
        $data=Accessory::find($id)->first();
        $route = route('accessories.update', $data->id);

//      $find=Tire::find($id)->get();
//      $data= TireResource::collection( $find);


        return view('dash.back.cars.edit',compact('data','route'));

    }


    public function update($request)
    {

        $data=Accessory::findOrFail($request->id);
        $oldImage=$data->image ?? null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($oldImage !==null){

                File::delete(public_path('accessories/' . $oldImage));

            }

            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('accessories', $imageName);
        }
        $data->name=$request->name;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->image=$imageName ?? null;
        $data->save();
//      toastr::success('Data has been saved successfully!');
        session()->flash('success', 'Data has been updated successfully!');


        return redirect()->route('accessories.index');

    }


    public function destory($id)
    {
        $data=Accessory::findOrFail($id);
        $oldImage=$data->image ?? null;
        if ($oldImage !==null){

            File::delete(public_path('accessories/' . $oldImage));

        }
        $data->delete();

        session()->flash('danger', 'Data has been delete successfully!');

        return redirect()->route('accessories.index');




    }
}
