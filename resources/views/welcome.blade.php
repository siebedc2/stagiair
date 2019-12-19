@extends('layouts/app')

@section('title')
    Stagiair
@endsection
@section('content')
    <div class="home">
        <h1>Welkom bij stagiair!</h1>

        @if (Auth::guard('company')->check())
            <h2>Wij zoeken de perfecte match met jou bedrijf</h2>
        @else 
            <h2>Jouw stage begint hier</h2>
        @endif
        

        @if (Auth::guard('company')->check())
            <div class="btn btn--stage"><a href="/stageAanmaken">Maak een stage aan!</a></div>
       
        @else 
            <div class="btn btn--stage"><a href="/stages">Zoek jouw stage!</a></div>
        @endif

        <p>Stagiair is een hub van al je online accounts die je kunnen helpen voor een stage op maat. We streven ernaar om een perfecte
            match te vinden tussen student en bedrijf. 
            Je avontuur start hier, waar wacht je nog op?
        </p>

        

    </div>
    
    <div class="illustration">    
        <img  src="{{ asset('images/stagiairIllustration.png') }}" alt="stagiairIllustration">
    </div>

    
    
@endsection