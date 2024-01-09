<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // USER HOMEPAGE
    public function main () {
        return view('user.main');
    }
}
