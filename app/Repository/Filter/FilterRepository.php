<?php

namespace App\Repository\Filter;

use App\Http\Resources\TireResource;
use App\Models\Filter;
use App\Repository\Filter\FilterRepositoryInterface;
use Illuminate\Support\Facades\File;

class FilterRepository implements FilterRepositoryInterface
{    public function index()
{
    $data = TireResource::collection(Filter::all());
    $word = "filters"; // Initialize the $word variable
    return view('dash.back.cars.index', compact('data', 'word'));
}

    public function create()

    {
        $route=route('filters.store');
        return view('dash.back.cars.create',compact('route'));

    }

    public function store($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('filters', $imageName);
        }
        $data=new Filter();
        $data->name=$request->name;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->user_id=auth()->user()->id;
        $data->image=$imageName ?? null;
        $data->save();
//      toastr::success('Data has been saved successfully!');
        session()->flash('success', 'Data has been saved successfully!');


        return redirect()->route('filters.index');

    }


    public function edit($id)
    {
        $data=Filter::find($id)->first();
        $route = route('filters.update', $data->id);

//      $find=Tire::find($id)->get();
//      $data= TireResource::collection( $find);


        return view('dash.back.cars.edit',compact('data','route'));

    }


    public function update($request)
    {

        $data=Filter::findOrFail($request->id);
        $oldImage=$data->image ?? null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($oldImage !==null){

                File::delete(public_path('filters/' . $oldImage));

            }

            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('filters', $imageName);
        }
        $data->name=$request->name;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->image=$imageName ?? null;
        $data->save();
//      toastr::success('Data has been saved successfully!');
        session()->flash('success', 'Data has been updated successfully!');


        return redirect()->route('filters.index');

    }


    public function destory($id)
    {
        $data=Filter::findOrFail($id);
        $oldImage=$data->image ?? null;
        if ($oldImage !==null){

            File::delete(public_path('filters/' . $oldImage));

        }
        $data->delete();

        session()->flash('danger', 'Data has been delete successfully!');

        return redirect()->route('filters.index');




    }

}
