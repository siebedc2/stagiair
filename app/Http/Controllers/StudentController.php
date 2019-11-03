<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Student register
    public function register()
    {
        return view('/student/register');
    }

    public function handleRegister(Request $request)
    {
        $student = new \App\Student();
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->school = $request->input('school');
        $student->education = $request->input('education');
        $student->dateOfBirth = $request->input('dateOfBirth');
        $student->email = $request->input('email');
        $student->password = \Hash::make($request->input('password'));
        $student->save();

        dd($student);
    }

    // Student login
    public function login()
    {
        return view('/student/login');
    }

    public function handleLogin(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (\Auth::attempt($credentials)){
            // redirect
            return redirect('/');
        }
        
        else {
            return view('student/login');
        }
    }

    // Student profile
    public function profile()
    {
        return view('/student/profile');
    }

    // Edit student profile
    public function settings()
    {
        if (Auth::guard('student')->check() || Auth::guard('company')->check()) {
            return view('/student/settings');
        }

        else {
            return redirect('/student/login');
        }
    }

    // Save edited student profile
    public function change()
    {
        
    }

    // Student internships
    public function internships()
    {
        
    }
}
