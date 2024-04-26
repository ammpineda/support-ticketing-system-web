<?php

use App\Http\Controllers\AdminTicketsPageController;
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

Route::post('/student-login-execute', 'App\Http\Controllers\LoginPageController@login')->name('login');

Route::get('/admin-login', function () {
    return view('admin-login');
})->name('admin-login-page');

Route::post('/admin-login-execute', 'App\Http\Controllers\LoginPageController@admin_login')->name('admin-login');

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

Route::post('/update-ticket-status', [TicketMessagingPageController::class, 'updateTicketStatus'])->name('update.ticket.status');


Route::get('/admin-tickets', [AdminTicketsPageController::class, 'showTickets'])->name('admin-tickets');

Route::post('/ticket/{id}/accept', 'App\Http\Controllers\AdminTicketsPageController@accept')->name('ticket.accept');


Route::post('/clear-sessions', function () {
    Session::flush();
    return response()->json(['message' => 'Sessions cleared successfully'], 200);
})->name('clear-sessions');
