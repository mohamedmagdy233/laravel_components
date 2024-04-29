<?php

namespace App\Repository\Accessory;

interface AccessoryRepositoryInterface
{
    public function index();
    public function create();

    public function edit($id);

    public function store($request);

    public function update($request);

    public function destory($id);
}
