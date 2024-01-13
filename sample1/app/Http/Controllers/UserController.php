<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show(string $userid):View
    {
        return view('user.list',['user'=>$userid]);
    }
}