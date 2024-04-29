<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Repository\order\orderRepositoryInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    protected $order;

    public function __construct(orderRepositoryInterface $order){

        $this->order = $order;
    }

    public function index()
    {
        return $this->order->index();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Order $order)
    {
        //
    }


    public function edit(Order $order)
    {
        //
    }


    public function update(Request $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
