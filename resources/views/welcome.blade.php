@extends('layouts/app')

@section('title')
    Home
@endsection
@section('content')
    <div class="home">
        <h1>Welkom bij stagiair</h1>
        <h2>Jouw stage begint hier!</h2>

        @if (Auth::guard('company')->check())
            <div class="btn btn--stage"><a href="/stageAanmaken">Maak een stage aan!</a></div>
       
        @else 
            <div class="btn btn--stage"><a href="/stages">Zoek jouw stage!</a></div>
        @endif

        <p>Stagiair is een platform dat stages op maat aanbied
            voor iedereen in België. We streven ernaar om een perfecte
            match te vinden tussen student en bedrijf. 
            Je avontuur start hier, waar wacht je nog op?
        </p>
       
    </div>
    
    
@endsection