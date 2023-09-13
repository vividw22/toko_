<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
   public function halamanlogin(){
        return view('login.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/admin');
        }
        return redirect('/login');
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    
}
