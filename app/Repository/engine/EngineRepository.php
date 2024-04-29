<?php

namespace App\Repository\engine;

use App\Http\Resources\TireResource;
use App\Models\Engine;
use Illuminate\Support\Facades\File;

class EngineRepository implements EngineRepositoryInterface
{
    public function index()
    {
        $data = TireResource::collection(Engine::all());
        $word = "engines"; // Initialize the $word variable
        return view('dash.back.cars.index', compact('data', 'word'));
    }

    public function create()

    {
        $route=route('engines.store');
        return view('dash.back.cars.create',compact('route'));

    }

    public function store($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('engines', $imageName);
        }
        $data=new Engine();
        $data->name=$request->name;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->user_id=auth()->user()->id;
        $data->image=$imageName ?? null;
        $data->save();
//      toastr::success('Data has been saved successfully!');
        session()->flash('success', 'Data has been saved successfully!');


        return redirect()->route('engines.index');

    }


    public function edit($id)
    {
        $data=Engine::find($id)->first();
        $route = route('engines.update', $data->id);

//      $find=Tire::find($id)->get();
//      $data= TireResource::collection( $find);


        return view('dash.back.cars.edit',compact('data','route'));

    }


    public function update($request)
    {

        $data=Engine::findOrFail($request->id);
        $oldImage=$data->image ?? null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($oldImage !==null){

                File::delete(public_path('engines/' . $oldImage));

            }

            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('engines', $imageName);
        }
        $data->name=$request->name;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->image=$imageName ?? null;
        $data->save();
//      toastr::success('Data has been saved successfully!');
        session()->flash('success', 'Data has been updated successfully!');


        return redirect()->route('engines.index');

    }


    public function destory($id)
    {
        $data=Engine::findOrFail($id);
        $oldImage=$data->image ?? null;
        if ($oldImage !==null){

            File::delete(public_path('engines/' . $oldImage));

        }
        $data->delete();

        session()->flash('danger', 'Data has been delete successfully!');

        return redirect()->route('engines.index');




    }
}
