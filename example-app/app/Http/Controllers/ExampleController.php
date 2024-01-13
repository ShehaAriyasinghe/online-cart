<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\oopExample\childexample;
use App\oopExample\exampleinterface;
use App\Helper\helper;


class ExampleController extends Controller
{
public $obj;
protected $obj1;
public function __construct(exampleinterface $obj1){

    $this->obj1=$obj1;
}





   /*  public $user= 'user';
    private $user1='user1';
    protected $user2='user2'; */
    public function firstfun(){
        $user= "user";
        return $user;
    }

    public function getSum(){
        $number1= 5;
        $number2= 4;
        $sum=$number1+$number2;
        return $sum;
    }


    public function getSumWithPayload(Request $request){
       // dd($request["number1"]);
        $data=$request->validate([
        'number1'=>'required|integer',
        'number2'=>'required|integer',
       ]);

       $number1=$data["number1"];
       $number2=$data["number2"];

       return $number1+$number2;
       
    }


    public function returnObject(){
        $objectfirst=[
            'key1'=>'saman',
            'key2'=>25
        ];
        //return $objectfirst;
        return response()->json(['data'=>$objectfirst]);
    }

    public function returnArray(){
        //normal array
       $arrayFirst=array('element1','element2','element3');
       $arraySecond=array(
        [
            'key1'=>'value1',
            'key2'=>'value2'
        ],
        [
            'key1'=>'value3',
            'key2'=>'value4'

        ]
       ); 
       $newArray=[
        'firstarray' =>$arrayFirst,
        'secondarray' =>$arraySecond


       ];




        //return response()->json(['data'=>$arraySecond]);
        return response()->json(['data'=>$newArray],200);
      
    }

    public function returnConditions(){
        $number1=10;
        $number2=15;

        if($number1 === $number2){
            return response()->json(['data'=>true]);
        }else if($number2 === 15){
            return response()->json(['data'=>true]);

        }else{
            return response()->json(['data'=>false]);
        }

    }


    public function returnLoop(){
        $arraytest=array();
        array_push($arraytest,'value1');
        array_push($arraytest,'value2');
        array_push($arraytest,['key1'=>'value3']);

        $newarray=array();

        foreach($arraytest as $value){
           array_push($newarray,$value);
        }
        return response()->json(['data'=>$newarray]);


        //return response()->json(['data'=>$arraytest]); 


     /*   for($i=0;$i<=10;$i++){

             array_push($arraytest,'value' . $i);
        }  */

       



       // return response()->json(['data'=>$arraytest]);
    }

public function inheritanceoop(){

return $this->obj1->main(1,3);

//$obj4=$this->obj1->accessParent();


// $obj4=$this->obj1->main(1,3);
// $obj5=$this->obj1->main1();
// $final=[
//     'obj1'=>$obj4,
//     'obj2'=>$obj5
// ];


//  return $final;


}


/* 
public function returnHelper(){
    $this->obj=new helper();
    return $this->obj->add(1,4);

}
 */

 public function returnHelper(){
    
    return helper::addition(2,4);

}





}
