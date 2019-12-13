<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function index()
    {
        $student = \Auth::user();
        $internships = $student->internships()->get();
        dd($internships);

        //if (\Auth::check()) {
        // juiste data van internship uit db halen en in variable $data steken
        $data['student_internship'] = \DB::table('student_internship')->where('student_id', \Auth::user()->id)->get();

        // returnen van de view index waar je de html en css gaat tonen + je geeft de $data mee als argument zodat je die data ook in de frontent kan gebruiken
        return view('applies/myInternships', $data);
        //} else {
        //return redirect('student/login');
        //}
    }

    public function store(Request $request, $internship)
    {
        // zorgen dat de message maar even blijft staan
        $request->flash();

        // data die ingegeven linken aan de db
        $student_internship = new \App\Apply();
        $student_internship->student_id = \Auth::user()->id;
        $student_internship->internship_id = $internship;
        $student_internship->save();

        // flash message laten zien met een alert, deze blijft er maar even staan door -> flash()
        $request->session()->flash('message', 'Sollicitatie opgeslagen');

        // zorgen dat de juiste view wordt getoont
        return view('applies/myInternships');
    }
}
