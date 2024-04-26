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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Student::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Invalid email or password');
        }

        if (password_verify($request->password, $user->password)) {

            Session::put('user_id', $user->id);
            Session::put('is_student', true);
            Session::put('is_admin', false);
            Session::put('first_name', $user->first_name);
            Session::put('last_name', $user->last_name);

            return redirect()->route('home'); 
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function admin_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = Staff::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Invalid email or password');
        }

        if (password_verify($request->password, $user->password)) {

            Session::put('is_student', false);
            Session::put('user_id', $user->id);
            Session::put('is_admin', true);
            // Session::put('first_name', $user->first_name);
            // Session::put('last_name', $user->last_name);

            return redirect()->route('home'); 
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
}
