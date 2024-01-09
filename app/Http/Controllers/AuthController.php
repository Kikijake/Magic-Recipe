<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage(){
        return view('auth.login');
    }

    public function registerPage(){
        return view('auth.register');
    }

    public function roleCheck(){
        if(Auth::user()->role == 'admin'){
            return redirect()->route('admin#main');
        }else{
            return redirect()->route('user#main');

        }
    }
}
