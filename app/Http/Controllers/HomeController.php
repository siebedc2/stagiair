<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    // Home
    public function index()
    {
        return view('/welcome');        
    }

    
    public function logout() {
        if (Auth::guard('company')->check()) {
            Auth::guard('company')->logout();
        }
        
        elseif (Auth::check()) {
            Auth::logout();
        }

        return redirect('/');

    }

}
