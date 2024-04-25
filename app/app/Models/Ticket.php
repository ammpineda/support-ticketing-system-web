<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['subject', 'description', 'status', 'staff_id', 'student_id'];

    public function staff()
    {
        return $this->belongsTo('App\Models\Staff');
    }

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }
}
