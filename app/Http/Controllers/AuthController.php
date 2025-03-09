<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(){
        $data = array(

        );
        return view('Auth/login', $data);
    }

    function register(){
        $data = array(

        );
        return view('Auth/register', $data);
    }
}
