<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use App\Repository\Battery\BatteryRepositoryInterface;
use Illuminate\Http\Request;

class BatteryController extends Controller
{
    protected $battery;

    public function __construct(BatteryRepositoryInterface $battery){

        $this->battery = $battery;
    }

    public function index()
    {

        return $this->battery->index();


    }

    public function create()
    {
        return $this->battery->create();
    }

    public function edit($id)
    {
        return $this->battery->edit($id);
    }

    public function store(Request $request)
    {
        return $this->battery->store($request);
    }


    public function update(Request $request)
    {

        return $this->battery->update($request);
    }

    public function destroy($id)
    {

        return $this->battery->destory($id);
    }
}
