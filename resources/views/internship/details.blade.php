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

    @if ($internConfirmed->confirmed == 0)
        <!-- Enkel als je als bedrijf bent ingelogd mag je een student kunnen accepteren of weigeren -->
        @if (Auth::guard('company')->check())
        <!-- Student accepteren -->
        <form method="post" action="">
                {{ csrf_field() }}

                <textarea name="student_internship_id" class="hiddenInternship_id">{{$internConfirmed->id}}</textarea>

                <textarea name="confirmed" class="hiddenInternship_id">1</textarea>

                <button type="submit" name="form2" class="btn btn-primary">Accepteren</button>
        </form>

        <!-- Student weigeren -->
        <form method="post" action="">
                {{ csrf_field() }}

                <textarea name="student_internship_id" class="hiddenInternship_id">{{$internConfirmed->id}}</textarea>

                <textarea name="confirmed" class="hiddenInternship_id">0</textarea>

                <button type="submit" name="form2" class="btn btn-primary">Weigeren</button>
        </form>

        @else
        <p>In behandeling...</p>

        @endif

    @else
        <p>Geaccepteerd</p>
    @endif
    
    @endforeach

    <!-- als de student ingelogd is kan hij solliciteren op de stage, zoniet (else) dan wordt hij geriderect naar de inlog pagina -->
    @auth
        <form method="post" action="/mijnProfiel/mijnSollicitaties">
            {{ csrf_field() }}

            <textarea name="internship_id" id="internship_id" class="hiddenInternship_id">{{$internship->id}}</textarea>

            <button type="submit" name="form1" class="btn btn-primary">Solliciteer</button>
        </form>

    @else
        <a type="submit" href="/student/login" class="btn btn-false">Login als student om te solliciteren</a>

    @endauth

</div>


@endsection