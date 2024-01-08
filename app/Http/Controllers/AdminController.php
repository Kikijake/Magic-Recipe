<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // ADMIN HOMEPAGE
    public function home () {
        return view('admin.home');
    }
}
