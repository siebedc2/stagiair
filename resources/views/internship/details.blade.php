@extends('layouts/internships')

@section('content')

<div class="internship_details">
    
    <div>
        <h1>{{$internship->title}}</h1>
    </div>

    <h2>@ {{$internship->company_id}}</h2>

    <p>Aangemaakt op - {{$internship->created_at->format('d/m/Y')}}</p>

    <h3>Korte samenvatting</h3>

    <p>{{$internship->description}}</p>

    <h3>Skills</h3>

    <p>{{$internship->requirements}}</p>

    <h3>Aanbieding</h3>

    <p>{{$internship->offer}}</p>

    <!-- als de student ingelogd is kan hij solliciteren op de stage, zoniet (else) dan wordt hij geriderect naar de inlog pagina -->
    @auth
        <!-- <form method="post" action="/mijnProfiel/mijnSollicitaties">
            {{ csrf_field() }}

            <button type="submit" class="btn btn-primary">Solliciteer</button>
        </form> -->

        <a href="/mijnProfiel/mijnSollicitaties/{{$internship->id}}" class="btn btn-success">Solliciteer</a>

    @else
        <a type="submit" href="/student/login" class="btn btn-false">Login als student om te solliciteren</a>

    @endauth

</div>


@endsection