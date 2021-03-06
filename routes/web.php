<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/' , 'home')->name('home');

Route::get('home/login' , function(){
    return redirect()->route('home');
});

Route::get('/logout' , function(){
    Auth::login();
    return redirect() ->route('home');
})->name('logout');