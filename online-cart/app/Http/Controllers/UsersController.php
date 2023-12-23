<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function store(Request $request){
        $data=$request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
                

            ]
            );
           $response= User::create($data);

           return response()->json(['data'=>$response]);

           
    }


    public function index(){
        $reviews=User::all();

        return response()->json(['data'=>$reviews]);
    
    }
}
