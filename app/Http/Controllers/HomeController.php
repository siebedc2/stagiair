<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    // Home
    public function index()
    {
        if (Auth::guard('student')->check() || Auth::guard('company')->check()) {
            return view('/welcome');
        }

        elseif (!Auth::guard('company')->check()) {
            return redirect('/bedrijf/login');
        }

        elseif (Auth::guard('student')->check()) {
            return redirect('/student/login');
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/welcome');
    }
}
