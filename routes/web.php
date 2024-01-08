<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

// BEFORE AUTH
Route::get('/',function () {return redirect()->route('auth');});
Route::get('auth',function () {return view('auth');})->name('auth');

// REGISTER AND LOGIN
Route::get('registerPage',[AuthController::class,'registerPage'])->name('registerPage');
Route::get('loginPage',[AuthController::class,'loginPage'])->name('loginPage');

// AFTER AUTH
Route::middleware('auth')->group( function () {
    Route::get('/roleCheck',[AuthController::class,'roleCheck'])->name('roleCheck');

    // ADMIN
    Route::middleware('adminAuth')->group( function () {
        Route::group(['prefix' => 'admin'],function () {
            // ADMIN/HOME
            Route::get('home',[AdminController::class,'home'])->name('admin#home');

        });
    });

    // USER
    Route::middleware('userAuth')->group( function () {
        Route::group(['prefix' => 'user'],function () {
            // USER/HOME
            Route::get('home',[UserController::class,'home'])->name('user#home');

        });
    });

});
