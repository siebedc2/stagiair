<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ApiController extends Controller
{
    public function index() {
        $data = \App\Internship::all();
        return response()->json($data);
    }

    public function sectorIndex() {
        $data = \DB::table('internships')->get(['sector'])->unique();
        return response()->json($data);
    }

    public function filter($sector) {
        $data = \App\Internship::where('sector', $sector)->get();

        // dd($data);
        // exit();
        
        return response()->json($data);
    }
}
