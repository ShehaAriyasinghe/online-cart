<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewsController;

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

Route::post('addreviews',[
    ReviewsController::class,
    'store',
]); 

Route::get('allreviews',[
    ReviewsController::class,
    'index',
]); 


