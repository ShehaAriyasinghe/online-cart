<?php

namespace App\Repositary;

interface testinterface
{
    public function store($data);

    public function index();

    public function update($id,$data);

    public function destroy($id);

    public function getdatawithcondition();

    public function updatedatawithcondition();






}