<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;

class LoginPageController extends Controller
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
            'student_id' => Session::get('user_id'), // Get student ID from session
        ]);

        // Optionally, you can redirect back with a success message
        return redirect()->back()->with('success', 'Ticket submitted successfully!');
    }
}
