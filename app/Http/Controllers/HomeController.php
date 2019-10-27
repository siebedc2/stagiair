<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home
    public function index()
    {
        return view('/welcome');
    }

    public function logout(){
        
    }
}
