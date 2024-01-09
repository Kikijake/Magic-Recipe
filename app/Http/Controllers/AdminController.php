<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // ADMIN HOMEPAGE
    public function main () {
        return view('admin.main');
    }
}
