<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $name = 'John';
        $users = array(
            "name" => "John Smith",
            "email" => "john@gmail.com",
            "phone" => "123456789"
        );
        //compact is for passing data to view from controller
        return view('user', compact('name','users'));
    }
}
