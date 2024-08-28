<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});



Route::prefix('home')->group(function(){

    Route::get('login', function () {
        return view('login');
    });
    Route::get('register', function () {
        return view('register');
    });
});



Route::get('/movie', function () {
    return view('movieNshows');
});
Route::get('/support', function () {
    return view('support');
});
