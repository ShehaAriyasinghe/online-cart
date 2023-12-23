<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    public function store(Request $request){
        $data=$request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'message'=>'required',
                'rating'=>'required',

            ]
            );
           $response= Reviews::create($data);

           return response()->json(['data'=>$response]);

           
    }


    public function index(){
        $reviews=Reviews::all();

        return response()->json(['data'=>$reviews]);
    
    }





}


