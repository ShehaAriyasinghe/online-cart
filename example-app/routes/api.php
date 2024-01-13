<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\TestController;

use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

/* 
Route::get('AllUsers',[
    ExampleController::class,
    'index',
]); 
*/

Route::get('testroute',[
    ExampleController::class,
    'firstfun',
]); 

Route::get('testsum',[
    ExampleController::class,
    'getSum',
]); 

Route::post('testpayload',[
    ExampleController::class,
    'getSumWithPayload',
]);

Route::get('object',[
    ExampleController::class,
    'returnObject',
]);


Route::get('array',[
    ExampleController::class,
    'returnArray',
]);

Route::get('condition',[
    ExampleController::class,
    'returnConditions',
]);

Route::get('loop',[
    ExampleController::class,
    'returnLoop',
]);

Route::post('addtestdata',[
    TestController::class,
    'store',
]);

Route::get('alltestdata',[
    TestController::class,
    'index',
]);

Route::put('updatetest/{id}',[
    TestController::class,
    'update',
]);

Route::delete('deletetest/{id}',[
    TestController::class,
    'destroy',
]);

Route::get('getdata',[
    TestController::class,
    'getdatawithcondition',
]);

Route::post('updatedatawithcondition',[
    TestController::class,
    'updatedatawithcondition',
]);

Route::get('testfun',[
    ExampleController::class,
    'inheritanceoop',
]);

Route::get('testfun',[
    ExampleController::class,
    'inheritanceoop',
]);

Route::get('returnHelper',[
    ExampleController::class,
    'returnHelper',
]);

//Authentication

Route::post('register',[
    AuthController::class,
    'register',
]);

Route::post('login',[
    AuthController::class,
    'login',
]);





