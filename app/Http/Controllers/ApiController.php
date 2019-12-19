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
        return response()->json($data);
    }
    public function store(Request $request) {
        $url = $request->input('url');
        
        $user_id = Auth::id();
        $student = \App\Student::find($user_id);
        $student->url = $url;
        $student->save();

    }
    public function indexUrl() {
        $user_id = Auth::id();


        $data = \App\Student::where('id', $user_id)->first();
        
        return response()->json($data);
    }
}
