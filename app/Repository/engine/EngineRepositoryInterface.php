<?php

namespace App\Repository\engine;

interface EngineRepositoryInterface
{
    public function index();
    public function create();

    public function edit($id);

    public function store($request);

    public function update($request);

    public function destory($id);

}
