<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Ticket;

class SubmitTicketPageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string',
            'description' => 'required|string',
        ]);

        $ticket = Ticket::create([
            'subject' => $request->subject,
            'description' => $request->description,
            'status' => 'Unopened',
            'student_id' => Session::get('user_id'), 
            'staff_id' => 1,
        ]);

        Message::create([
            'message_content' => $request->description,
            'sent_by' => 'Student',
            'ticket_id' => $ticket->id,
        ]);

        return redirect()->route('my-tickets')->with('success', 'Ticket submitted successfully!');
    }
}
