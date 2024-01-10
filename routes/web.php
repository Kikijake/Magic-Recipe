<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

// BEFORE AUTH
Route::get('/',function () {return redirect()->route('auth');});
Route::get('auth',function () {
    if(User::get()->count() == 0){

        User::insert([
            [
                'name'=>'yehtetsan',
                'email'=>'yehtetsan@gmail.com',
                'role' =>'user',
                'password'=>Hash::make('useruser')
            ],
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'role' =>'admin',
                'password'=>Hash::make('adminadmin')
            ]]
        );
    };
    return view('auth');
})->name('auth');

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
            Route::get('main',[AdminController::class,'main'])->name('admin#main');

        });
    });

    // USER
    Route::middleware('userAuth')->group( function () {
        Route::group(['prefix' => 'user'],function () {
            // USER/HOME
            Route::get('main',[UserController::class,'main'])->name('user#main');

        });
    });

});
