<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use App\Models\Tire;
use App\Repository\tires\TireRepositoryInterface;
use Symfony\Component\HttpFoundation\Request;

class TireController extends Controller
{

    protected $tires;

    public function __construct(TireRepositoryInterface $tires){

       $this->tires = $tires;
    }


    public function index()
    {

        return $this->tires->index();


    }

    public function create()
    {
        return $this->tires->create();
    }

    public function edit($id)
    {
        return $this->tires->edit($id);
    }

    public function store(Request $request)
    {
        return $this->tires->store($request);
    }


    public function update(Request $request)
    {

        return $this->tires->update($request);
    }

    public function destroy($id)
    {

        return $this->tires->destory($id);
    }
}
