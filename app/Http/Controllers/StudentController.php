<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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

        $this->handleLogin($request);

        return redirect('/');
    }

    // Student login
    public function login()
    {
        return view('/student/login');
    }

    public function handleLogin(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (\Auth::attempt($credentials)) {
            // redirect
            return redirect('/');
        } else {
            return view('student/login');
        }
    }

    // Student profile
    public function profile()
    {
        $user['userInfo'] = Auth::user();

        return view('/student/profile', $user);
    }

    // Edit student profile
    public function settings()
    {
        $user['userInfo'] = Auth::user();

        return view('/student/settings', $user);
    }

    // Save edited student profile
    public function change(Request $request)
    {
        $user_id = Auth::id();

        $student = \App\Student::find($user_id);

        // $student->education = $request->input('education', $student['education']);
        if ($request->filled('school')) {
            $student->school = $request->input('school');
        }

        if ($request->filled('education')) {
            $student->education = $request->input('education');
        }

        if ($request->filled('email')) {
            $student->email = $request->input('email');
        }

        if ($request->filled('password')) {
            $student->password = \Hash::make($request->input('password'));
        }

        $student->save();
        $request->session()->flash('message', 'Info changed!');

        return redirect('/mijnProfiel');
    }

    // Student internships, de stages waar de student op heeft gesolliciteerd
    public function applies()
    {
        $user['userInfo'] = Auth::user();

        return view('/student/myInternships', $user);
    }
}
