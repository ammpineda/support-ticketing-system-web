<?php

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\MyTicketsPageController;
use App\Http\Controllers\TicketMessagingPageController;


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

Route::get('/support-ticket-form', function () {
    return view('support-ticket');
})->name('support-ticket');

Route::post('/submit-ticket', 'App\Http\Controllers\SubmitTicketPageController@store')->name('submit_ticket');


Route::get('/tickets', [MyTicketsPageController::class, 'showTickets'])->name('my-tickets');

Route::get('/tickets/{ticket_id}/messages', 'App\Http\Controllers\TicketMessagingPageController@showMessages')->name('ticket.messages');

Route::post('/send-message', [TicketMessagingPageController::class, 'sendMessage'])->name('send.message');



Route::post('/clear-sessions', function () {
    Session::flush();
    return response()->json(['message' => 'Sessions cleared successfully'], 200);
})->name('clear-sessions');
