<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
    	return view('auth.register');
    }

    public function store(){
    	//valida cadastro

    	$this->validate(request(),[

    		'usuario' => 'required',
    		'email' => 'required|email',
    		'password' => 'required'

    	]);
    }
}
