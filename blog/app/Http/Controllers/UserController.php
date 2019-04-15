<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name){
        return "Hello ".$name;
    }

    public function welcome(){
        return view('welcome');
    }
}
