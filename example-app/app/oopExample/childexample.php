<?php

namespace App\oopExample;
use App\oopExample\exampleinterface;

class childexample extends inheritanceEx implements exampleinterface
{


protected $examplevariable=1;



    public function accessParent(){
        return $this->veriable3;
        //return $this->veriable1;
    }

public function main($data1,$data2){
    return $data1;
}
public function main1(){
    return $this->veriable1;
}


}
