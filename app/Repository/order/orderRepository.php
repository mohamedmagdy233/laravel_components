<?php

namespace App\Repository\order;

use App\Http\Resources\TireResource;
use App\Models\Accessory;
use App\Models\Battery;
use App\Models\Engine;
use App\Models\Filter;
use App\Models\Tire;

class orderRepository implements orderRepositoryInterface
{
    public function index()
    {
        $tires=TireResource::collection(Tire::all());
        $filters=TireResource::collection(Filter::all());
        $engines=TireResource::collection(Engine::all());
        $batteries=TireResource::collection(Battery::all());
        $accessories=TireResource::collection(Accessory::all());

        return view('website.index',compact('tires','filters','engines','batteries','accessories'));


    }

}
