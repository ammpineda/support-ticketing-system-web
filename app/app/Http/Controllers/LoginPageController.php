<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Student;

class LoginPageController extends Controller
{
    public function login(Request $request)
    {
        // Validate the login form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to find the user by email
        $user = Student::where('email', $request->email)->first();

        if (!$user) {
            // User not found, redirect back with error message
            return redirect()->back()->with('error', 'Invalid email or password');
        }

        // Verify the password
        if (password_verify($request->password, $user->password)) {

            Session::put('user_id', $user->id);
            Session::put('is_student', true);
            Session::put('is_admin', false);
            Session::put('first_name', $user->first_name);
            Session::put('last_name', $user->last_name);

            return redirect()->route('home'); // Redirect to dashboard or any other route
        } else {
            // Password is incorrect, redirect back with error message
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function admin_login(Request $request)
    {
        // Validate the login form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to find the user by email
        $user = Staff::where('email', $request->email)->first();

        if (!$user) {
            // User not found, redirect back with error message
            return redirect()->back()->with('error', 'Invalid email or password');
        }

        // Verify the password
        if (password_verify($request->password, $user->password)) {

            Session::put('is_student', false);
            Session::put('user_id', $user->id);
            Session::put('is_admin', true);
            // Session::put('first_name', $user->first_name);
            // Session::put('last_name', $user->last_name);

            return redirect()->route('home'); // Redirect to dashboard or any other route
        } else {
            // Password is incorrect, redirect back with error message
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
}
