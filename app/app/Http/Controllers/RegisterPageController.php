<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;

class RegisterPageController extends Controller
{
    public function register(Request $request){

        
    
        try {

            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'program' => 'required|string|max:255',
                'year' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:students',
                'password' => 'required|string|min:8',
            ]);

            // Create a new student record
            $student = new Student([
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'course' => $validatedData['program'],
                'year' => $validatedData['year'],
                'student_number' => mt_rand(10000000, 99999999), // Generates a random number between 10000000 and 99999999
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']), // Hash the password
            ]);
    
            // Save the student record
            $student->save();
    
            // Redirect the user after successful registration
            return redirect()->route('register-page')->with('success', 'Registration successful! You can now log in.');
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            // If validation error occurs during registration, return specific error messages
            return redirect()->route('register-page')->withErrors($e->validator->errors());
        }
    }
    
}
