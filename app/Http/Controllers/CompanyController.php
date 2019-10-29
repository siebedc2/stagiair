<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // List with all internships
    public function index()
    {
            
    }

    // Show detail page of a company
    public function details() 
    {

    }

    // Company register
    public function register()
    {
        return view('/company/register');
    }

    public function handleRegister()
    {
        
    }

    // Company login
    public function login()
    {
        return view('/company/login');
    }

    public function handleLogin()
    {
        
    }

    // Company profile
    public function profile()
    {
        return view('company/profile');
    }

    // Edit company profile
    public function settings()
    {
        
    }

    // Save edited company profile
    public function change()
    {
        
    }

    // Company internships
    public function internships()
    {
        
    }

    // Create internship
    public function createInternship()
    {
        
    }

}
