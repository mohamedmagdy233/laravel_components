<?php

namespace App\Repository\tires;

use App\Http\Resources\TireResource;
use App\Models\Tire;
use Illuminate\Support\Facades\File;

class TireRepository implements TireRepositoryInterface
{
    public function index()
    {

        $data = TireResource::collection(Tire::all());
        $word = "tires"; // Initialize the $word variable

        return view('dash.back.cars.index', compact('data','word'));


    }

    public function create()
    {
        $route = route('tires.store');
        return view('dash.back.cars.create', compact('route'));

    }

    public function store($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('tires', $imageName);
        }
        $data = new Tire();
        $data->name = $request->name;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->user_id = auth()->user()->id;
        $data->image = $imageName ?? null;
        $data->save();
//      toastr::success('Data has been saved successfully!');
        session()->flash('success', 'Data has been saved successfully!');


        return redirect()->route('tires.index');

    }


    public function edit($id)
    {
        $data = Tire::find($id)->first();
//      $find=Tire::find($id)->get();
//      $data= TireResource::collection( $find);
        $route = route('tires.update', $data->id);


        return view('dash.back.cars.edit', compact('data', 'route'));

    }


    public function update($request)
    {
           $data = Tire::findOrFail($request->id);
        $oldImage = $data->image ?? null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($oldImage !== null) {

                File::delete(public_path('tires/' . $oldImage));

            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('tires', $imageName);
        }

            $data->name = $request->name;
            $data->price = $request->price;
            $data->quantity = $request->quantity;
            $data->image = $imageName ?? null;
            $data->save();
//      toastr::success('Data has been saved successfully!');
            session()->flash('success', 'Data has been updated successfully!');


            return redirect()->route('tires.index');


    }


        public function destory($id)
        {
            $data = Tire::findOrFail($id);
            $oldImage = $data->image ?? null;
            if ($oldImage !== null) {

                File::delete(public_path('tires/' . $oldImage));

            }
            $data->delete();

            session()->flash('danger', 'Data has been delete successfully!');

            return redirect()->route('tires.index');


        }

}
