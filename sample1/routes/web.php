<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   // return view('welcome');
      return "welcome" ;
});

Route::get('/about', function () {
   return view('about');
      
});

/*
$r=new Route();
$r->get();
*/

Route::get('/customer/register',[CustomerController::class,'index']);
Route::get('/user/show/{id}',[UserController::class,'show']);

Route::resource('items', ItemController::class);
