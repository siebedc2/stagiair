<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternshipController extends Controller
{
    // List with all internships
    public function index()
    {
            
    }

    // Show detail page of an internship
    /*
    public function details()
    {
        return view('internship/details');
    }
    */

    // Internship reviews
    public function details($internship)
    {
        $data['internship'] = \App\Internship::where('id', $internship)->with('reviews')->first();
        return view('internship/details', $data);
    }

}
