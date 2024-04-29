<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use App\Repository\Filter\FilterRepositoryInterface;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    protected $filter;

    public function __construct(FilterRepositoryInterface $filter){

        $this->filter = $filter;
    }

    public function index()
    {

        return $this->filter->index();


    }

    public function create()
    {
        return $this->filter->create();
    }

    public function edit($id)
    {
        return $this->filter->edit($id);
    }

    public function store(Request $request)
    {
        return $this->filter->store($request);
    }


    public function update(Request $request)
    {

        return $this->filter->update($request);
    }

    public function destroy($id)
    {

        return $this->filter->destory($id);
    }
}
