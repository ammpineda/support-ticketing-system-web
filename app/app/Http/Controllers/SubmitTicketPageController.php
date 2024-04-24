<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Ticket;

class SubmitTicketPageController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'subject' => 'required|string',
            'description' => 'required|string',
        ]);

        // Store the ticket in the database
        Ticket::create([
            'subject' => $request->subject,
            'description' => $request->description,
            'status' => 'Unopened',
            'student_id' => Session::get('user_id'), // Get student ID from session
            'staff_id' => 1,
        ]);

        // Optionally, you can redirect back with a success message
        return redirect()->route('my-tickets')->with('success', 'Ticket submitted successfully!');
    }
}
