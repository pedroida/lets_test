<?php 

namespace App\Http\Controllers;


class LoginController extends Controller{

	public function login(){
		if(view()->exists('login')){
			return view('login');
		}else{
			return view('error');
		}
	}

	public function validateLogin(){
		return redirect()->action('ProductController@showIndex');
	}
}

 ?>