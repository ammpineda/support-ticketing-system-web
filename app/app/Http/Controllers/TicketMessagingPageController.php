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
            $ticket = Ticket::findOrFail($ticket_id);
            
            $staff = Staff::findOrFail($ticket->staff_id);
    
            $student = Student::findOrFail($ticket->student_id);
    
            $messages = Message::where('ticket_id', $ticket_id)->get(); 
            
            return view('ticket-messaging', compact('ticket', 'staff', 'student', 'messages'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ticket not found.');
        }
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message_content' => 'required|string',
            'ticket_id' => 'required|exists:tickets,id',
        ]);

        $sentBy = session('is_student') ? 'Student' : 'Admin';

        $message = Message::create([
            'message_content' => $request->input('message_content'),
            'sent_by' => $sentBy,
            'ticket_id' => $request->input('ticket_id'),
        ]);

        return redirect()->back()->with('success', 'Message sent successfully.');
    }

    public function updateTicketStatus(Request $request)
{
    // Validate the request data
    $request->validate([
        'ticket_id' => 'required|exists:tickets,id',
    ]);

    // Find the ticket
    $ticket = Ticket::findOrFail($request->ticket_id);

    // Update the ticket status
    $ticket->update(['status' => 'Resolved']);

    // Optionally, you can return a response or redirect back
    return redirect()->route('admin-tickets')->with('success', 'Ticket resolved successfully!');
}

    

}
