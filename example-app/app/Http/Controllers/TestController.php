<?php

namespace App\Http\Controllers;
use App\Models\test;
use Exception;
use Illuminate\Http\Request;
use App\Repositary\testinterface;

use Illuminate\Validation\ValidationException;

class TestController extends Controller
{
  protected $repositaryinterface;
  public function __construct(testinterface $repositaryinterface)
  {
    $this->repositaryinterface=$repositaryinterface;
  }
  public function store(Request $request){
    $data=$request->validate(
        [
            'number1' => 'required|integer',
            'number2' => 'required|integer',
            'text' => 'required'
        ]
        );

        $createddata=$this->repositaryinterface->store($data);
      
      return response()->json(['data'=>$createddata]);
  }


  public function index(){
    $alltestdata=Test::all();
    return response()->json(['data'=>$alltestdata]);

  }

  public function update(test $id,Request $request){
    $data=$request->validate(
      [
          'number1' => 'integer',
          'number2' => 'integer',
          'text' => 'string',
      ]
      );
      $updatedData=$id->update($data);
      return response()->json(['data'=>$updatedData]);

  }

  public function destroy(test $id,Request $request){
    
    $status=$id->delete();
      return response()->json(['data'=>$status]);

  }

  public function getdatawithcondition(){
    //get id all records 
    $data=Test::where('number1', 5)->get();
    return response()->json(['data'=>$data]);
  }






  public function updatedatawithcondition(){
    try{
   

      $data=Test::where("text","haygfdef")->get();
      if(count($data)>0){
       return response()->json(['data'=>$data]);
      }else{
        throw ValidationException::withMessages([
             'error'=>'No data found with entered value',
        ]);
      }
      }catch(Exception $e){
        return response()->json(['error'=>$e->getMessage(),422]);
      }

     
    
     
    

  }
 





}
