<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{

	public function index(){

		if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('auths.login');
	}

	public function login(Request $request){
		if (Auth::attempt($request->only('email', 'password'))) {
    		return redirect('/index');
    	}
    	// Session::flash('error', 'Email atau Password Salah');
		return redirect('/login');
	}

	function logout(){
    	Auth::logout();
    	return redirect('/login');
    }
}
