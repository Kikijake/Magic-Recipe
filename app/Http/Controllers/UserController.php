<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // USER HOMEPAGE
    public function home () {
        return view('user.home');
    }
}
