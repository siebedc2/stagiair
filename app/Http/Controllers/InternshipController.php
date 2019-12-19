<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class InternshipController extends Controller
{
    // functie die de index pagina van stages, waar je alle stages kan terugvinden, gaat laden met de juiste data uit de databank
    public function index()
    {
        //if (\Auth::check()) {
        // juiste data van internship uit db halen en in variable $data steken
        // $data['internships'] = \DB::table('internships')->get();

        // //sectoren voor filters bepalen
        // $data['sectors'] = \DB::table('internships')->get(['sector'])->unique();
    

        // returnen van de view index waar je de html en css gaat tonen + je geeft de $data mee als argument zodat je die data ook in de frontent kan gebruiken
        return view('internship/index');
        //} else {
        //return redirect('student/login');
        //}

    }

    // filterquery
    public function filter($filter)
    {
        $data['internships'] = \App\Internship::where('sector', $filter)->get();

        //sectoren voor filters bepalen
        $data['sectors'] = \DB::table('internships')->get(['sector'])->unique();

        // dd($data);
        // exit();

        return view('internship/index', $data);
    }

    // public function show(\App\Internship $internship){
    //     return view('internships/show', $internship);
    // }

    public function details($id)
    {
        $data['internship'] = \App\Internship::where('id', $id)->first();
        // $data['internship'] = \App\Internship::where('id', $internship)->with('reviews')->first();

        return view('internship/details', $data);
    }

    public function create()
    {
        // Enkel als je ingelogd bent als een company mag je een internship kunnen aanmaken
        // if (Auth::guard('company')->check() || Auth::guard('student')->check()) {
        return view('internship/create');

        // } else {
        // return redirect('/bedrijf/login');
        // }
    }

    public function store(Request $request)
    {
        // kijken of dat alles ingevuld wel correct is door te valideren
        $validation = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'requirements' => 'required',
            'offer' => 'required',
        ]);

        $request->flash();

        // data die ingegeven linken aan de db
        $internship = new \App\Internship();
        $internship->title = $request->input('title');
        $internship->description = $request->input('description');
        $internship->requirements = $request->input('requirements');
        $internship->offer = $request->input('offer');
        $internship->company_id = Auth::guard('company')->user()->id;
        $internship->sector = Auth::guard('company')->user()->sector;
        $internship->companyName = Auth::guard('company')->user()->name;
        $internship->active = true;
        $internship->save();

        // flash message laten zien met een alert, deze blijft er maar even staan door -> flash()
        $request->session()->flash('message', 'Internship posted');

        // als alles gelukt is gaan we redirecten naar de view /stages
        return redirect('/stages');
    }

    public function search(Request $request)
    {
        // Input van user van de zoekopdracht opvangen en in een variabele steken
        $input = $request->input('searchDescription');

        //sectoren voor filters bepalen
        $data['sectors'] = \DB::table('internships')->get(['sector'])->unique();

        // Met behulp van bovenstaande variabele de juiste internships uit de database halen waar de zoekopdracht van de gebruiker terug te vinden is in de beschrijving van de stage
        $data['internships'] = \DB::table('internships')->where('description', 'LIKE', '%'.$input.'%')->get();

        // De corresponderende stages tonen in een view
        return view('internship/index', $data);
    }
}
