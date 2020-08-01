<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function loginform(){
    	return view('login');
    }

    public function login(){
    	request()->validate([
    		'email'=>['email','required'],
    		'password'=>['required']
    	]);
    	return 'Vous etes loggez';
    }
}
