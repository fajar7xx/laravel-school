<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function postlogin(Request $request){
        // dd($request);
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('dashboard');
        }

        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }
}
