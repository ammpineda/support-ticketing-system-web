<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class RegisterPageController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'program' => 'required',
            'year' => 'required',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|min:6',
        ]);

        // Create a new student record
        $student = new Student([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'course' => $request->program,
            'year' => $request->year,
            'student_number' => mt_rand(10000000, 99999999),
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
        ]);

        // Save the student record
        $student->save();

        // Redirect the user after registration
        return redirect()->route('home')->with('success', 'Registration successful!');


    }
}
