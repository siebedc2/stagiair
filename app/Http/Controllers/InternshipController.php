<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternshipController extends Controller
{
    // functie die de index pagina van stages, waar je alle stages kan terugvinden, gaat laden met de juiste data uit de databank
    public function index()
    {
        //if (\Auth::check()) {
        // juiste data van internship uit db halen en in variable $data steken
        $data['internships'] = \DB::table('internships')->get();

        // returnen van de view index waar je de html en css gaat tonen + je geeft de $data mee als argument zodat je die data ook in de frontent kan gebruiken
        return view('internship/index', $data);
        //} else {
        //return redirect('student/login');
        //}
    }

    // public function show(\App\Internship $internship){
    //     return view('internships/show', $internship);
    // }
    public function details($id)
    {
        $data['internship'] = \App\Internship::where('id', $id)->first();

        return view('internship/details', $data);
    }

    public function create()
    {
        return view('internship/create');
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
        $internship->companyId = '1';  //\Auth::company()->name;
        $internship->active = true;
        $internship->save();

        // flash message laten zien met een alert, deze blijft er maar even staan door -> flash()
        $request->session()->flash('message', 'Internship posted');

        // als alles gelukt is gaan we redirecten naar de view /stages
        return redirect('/stages');
    }
}
