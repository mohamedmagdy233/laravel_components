<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use App\Repository\engine\EngineRepositoryInterface;
use Illuminate\Http\Request;

class EngineController extends Controller
{
    protected $engine;

    public function __construct(EngineRepositoryInterface $engine){

        $this->engine = $engine;
    }


    public function index()
    {

        return $this->engine->index();


    }

    public function create()
    {
        return $this->engine->create();
    }

    public function edit($id)
    {
        return $this->engine->edit($id);
    }

    public function store(Request $request)
    {
        return $this->engine->store($request);
    }


    public function update(Request $request)
    {

        return $this->engine->update($request);
    }

    public function destroy($id)
    {

        return $this->engine->destory($id);
    }
}
