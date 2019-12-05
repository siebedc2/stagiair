@extends('layouts/internships')

@section('content')

<div class="card card-default">
    
    <div class="card-header">
        <h1>{{$internship->title}}</h1>
    </div>

    <h2>{{$internship->company_id}}</h2>

    <p>Aangemaakt op - {{$internship->created_at->format('d/m/Y')}}</p>

    <h3>Korte samenvatting</h3>

    <p>{{$internship->description}}</p>

    <h3>Skills</h3>

    <p>{{$internship->requirements}}</p>

    <h3>Aanbieding</h3>

    <p>{{$internship->offer}}</p>

    <!-- als de student ingelogd is kan hij solliciteren op de stage, zoniet (else) dan wordt hij geriderect naar de inlog pagina -->
    @auth
        <form method="post" action="/mijnProfiel/mijnSollicitaties">
            {{ csrf_field() }}
            <input value="{{ request()->route('id') }}" name=id />

            <button type="submit" class="btn btn-primary">Solliciteer</button>
        </form>

    @else
        <a   type="submit" href="/student/login" class="btn btn-success">Login om te solliciteren</a>

    @endauth

</div>


@endsection