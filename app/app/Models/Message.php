<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'message_content',
        'sent_by',
        'ticket_id'
    ];

    // Define the relationship with the Ticket model
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
