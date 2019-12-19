<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function index()
    {
        // eloquent query met relationships zodat student al de stages kan zien waar hij op gesolliciteerd heeft
        $student = \Auth::user();
        // data megeven in array
        $data['internships'] = $student->internships()->get();

        // returnen van de view index waar je de html en css gaat tonen + je geeft de $data mee als argument zodat je die data ook in de frontent kan gebruiken
        return view('applies/myInternships', $data);
    }

    public function store(Request $request) {
        if($request->has('form1')) {
            $this->storeIntern($request);
        }

        else if ($request->has('form1')) {
            $this->changeConfirmed($request);
        }
        
    }


    public function storeIntern(Request $request)
    {
        // zorgen dat de message maar even blijft staan
        $request->flash();

        // data die ingegeven linken aan de db
        $student_internship = new \App\Apply();
        $student_internship->student_id = \Auth::user()->id;
        $student_internship->internship_id = $request->input('internship_id');
        $student_internship->confirmed = 0;
        $student_internship->save();

        // flash message laten zien met een alert, deze blijft er maar even staan door -> flash()
        $request->session()->flash('message', 'Sollicitatie opgeslagen');

        // zorgen dat de juiste view wordt getoont
        return redirect('/mijnProfiel/mijnSollicitaties');
    }

    public function changeConfirmed(Request $request) {
        $id = $request->input('student_internship_id');

        $confirmation = \App\Apply::find($id);
        $confirmation->confirmed = $request->input('confirmed');
        $confirmation->save();

        return redirect('/stages/'.$id);
    }
}
