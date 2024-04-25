<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Session;

class MyTicketsPageController extends Controller
{
    public function showTickets()
    {
        $userId = session('user_id');

        $tickets = Ticket::where('student_id', $userId)->get();

        return view('my-tickets', compact('tickets'));
    }
}
