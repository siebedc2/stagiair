@extends('layouts/internships')

@section('title')
{{$internship->title}}
@endsection

@section('content')

<div class="internship_details">
    
    <div>
        <h1>{{$internship->title}}</h1>
    </div>

    <h2>@ {{$internship->companyName}}</h2>

    <p>Aangemaakt op - {{$internship->created_at->format('d/m/Y')}}</p>

    <h3>Korte samenvatting</h3>

    <p>{{$internship->description}}</p>

    <h3>Skills</h3>

    <p>{{$internship->requirements}}</p>

    <h3>Aanbieding</h3>

    <p>{{$internship->offer}}</p>

    <h3>Sollicitaties</h3>

    @foreach ($internsConfirmed as $internConfirmed)
    <p>{{$internConfirmed->students->firstName . " " . $internConfirmed->students->lastName}}</p>

    <form method="post">
            {{ csrf_field() }}

            <input name="confirm" type="text">

            <button type="submit" class="btn btn-primary">Accepteren</button>
    </form>
    
    @endforeach

    <!-- als de student ingelogd is kan hij solliciteren op de stage, zoniet (else) dan wordt hij geriderect naar de inlog pagina -->
    @auth
        <form method="post" action="/mijnProfiel/mijnSollicitaties">
            {{ csrf_field() }}

            <textarea name="internship_id" id="internship_id" class="hiddenInternship_id">{{$internship->id}}</textarea>

            <button type="submit" class="btn btn-primary">Solliciteer</button>
        </form>

    @else
        <a type="submit" href="/student/login" class="btn btn-false">Login als student om te solliciteren</a>

    @endauth

</div>


@endsection