<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Message; // Import the Message model
use App\Models\Staff;
use App\Models\Student;

class TicketMessagingPageController extends Controller
{
    

    public function showMessages($ticket_id) {
        try {
            // Retrieve the ticket with the given ID
            $ticket = Ticket::findOrFail($ticket_id);
            
            // Fetch the staff associated with the ticket
            $staff = Staff::findOrFail($ticket->staff_id);
    
            // Fetch the student associated with the ticket
            $student = Student::findOrFail($ticket->student_id);
    
            // Fetch all messages associated with the ticket
            $messages = Message::where('ticket_id', $ticket_id)->get(); 
            
            // Pass the ticket, staff, student, and messages to the view
            return view('ticket-messaging', compact('ticket', 'staff', 'student', 'messages'));
        } catch (\Exception $e) {
            // Handle exception (e.g., ticket not found)
            return redirect()->back()->with('error', 'Ticket not found.');
        }
    }

    public function sendMessage(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'message_content' => 'required|string',
            'ticket_id' => 'required|exists:tickets,id',
        ]);

        // Determine the value of 'sent_by' based on the user session
        $sentBy = session('is_student') ? 'Student' : 'Admin';

        // Create the message record
        $message = Message::create([
            'message_content' => $request->input('message_content'),
            'sent_by' => $sentBy,
            'ticket_id' => $request->input('ticket_id'),
        ]);

        // Optionally, you can return a response or redirect the user after creating the message
        // For example, return a success message or redirect back to the ticket messaging page
        return redirect()->back()->with('success', 'Message sent successfully.');
    }

    

}
