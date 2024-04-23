<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_number', 'email', 'password', 'first_name', 'last_name', 'profile_pic_address', 'course', 'year'
    ];
}
