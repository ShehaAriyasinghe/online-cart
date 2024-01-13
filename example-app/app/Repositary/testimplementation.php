<?php
namespace App\Repositary;
use App\Models\test;

use App\Repositary;

class testimplementation implements testinterface
{
    
    public function store($data){

        $createddata= test::create($data);
        return $createddata;

    }

public function index(){

}
public function update($id,$data){

}
public function destroy($id){

}
public function getdatawithcondition(){

}

public function updatedatawithcondition(){

}



    
}