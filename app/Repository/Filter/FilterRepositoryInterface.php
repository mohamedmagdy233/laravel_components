<?php

namespace App\Repository\Filter;

interface FilterRepositoryInterface
{
    public function index();
    public function create();

    public function edit($id);

    public function store($request);

    public function update($request);

    public function destory($id);
}
