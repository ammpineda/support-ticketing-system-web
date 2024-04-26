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

            $student = new Student([
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'course' => $validatedData['program'],
                'year' => $validatedData['year'],
                'student_number' => mt_rand(10000000, 99999999),
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);
    
            $student->save();
    
            return redirect()->route('register-page')->with('success', 'Registration successful! You can now log in.');
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            
            return redirect()->route('register-page')->withErrors($e->validator->errors());
        }
    }
    
}
