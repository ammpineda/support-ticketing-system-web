<?php

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/student-login', function () {
    return view('login');
})->name('login-page');

Route::post('/login', 'App\Http\Controllers\LoginPageController@login')->name('login');


Route::get('/student-register', function () {
    return view('register');
})->name('register-page');

Route::post('/register', 'App\Http\Controllers\RegisterPageController@register')->name('register');



Route::post('/clear-sessions', function () {
    Session::flush();
    return response()->json(['message' => 'Sessions cleared successfully'], 200);
})->name('clear-sessions');
