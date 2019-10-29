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

    public function handleRegister()
    {
        
    }

    // Student login
    public function login()
    {
        return view('/student/login');
    }

    public function handleLogin()
    {
        
    }

    // Student profile
    public function profile()
    {
        return view('/student/profile');
    }

    // Edit student profile
    public function settings()
    {
        return view('/student/settings');
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
