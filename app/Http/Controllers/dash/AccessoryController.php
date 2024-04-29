<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use App\Repository\Accessory\AccessoryRepositoryInterface;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    protected $accessory;

    public function __construct(AccessoryRepositoryInterface $accessory){

        $this->accessory = $accessory;
    }

    public function index()
    {

        return $this->accessory->index();


    }

    public function create()
    {
        return $this->accessory->create();
    }

    public function edit($id)
    {
        return $this->accessory->edit($id);
    }

    public function store(Request $request)
    {
        return $this->accessory->store($request);
    }


    public function update(Request $request)
    {

        return $this->accessory->update($request);
    }

    public function destroy($id)
    {

        return $this->accessory->destory($id);
    }
}
