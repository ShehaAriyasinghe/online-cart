<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

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
   // return "welcome";
   return view('welcome');

});


Route::get('/about', function () {
    
    return view('about');
 });


 
 Route::get('/students', function () {
    
   return view('studentslist');
});


Route::get('/catagory', function () {
    
   return view('catagory');
});


Route::get('/contact', function () {
    
   return view('contact');
});

Route::get('/customer/register',[CustomerController::class,'index']);


Route::get('/user/show/{id}',[UserController::class,'show']);

Route::resource('student', StudentController::class);
