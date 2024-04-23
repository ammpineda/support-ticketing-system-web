<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/student-login', function () {
    return view('login');
})->name('login');

Route::get('/student-register', function () {
    return view('register');
})->name('register');

Route::post('/register', 'App\Http\Controllers\RegisterPageController@register')->name('register');
