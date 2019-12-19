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
}
