<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminTicketsPageController extends Controller
{
    public function showTickets()
{
    $tickets = Ticket::all();

    return view('admin-tickets', compact('tickets'));
}

public function accept($id)
{
    $ticket = Ticket::findOrFail($id);
    $ticket->status = 'In Progress';
    $ticket->save();

    return redirect()->back()->with('success', 'Ticket status updated to In Progress');
}

}
