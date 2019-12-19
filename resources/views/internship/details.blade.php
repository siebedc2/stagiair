@extends('layouts/internships')

@section('title')
    Detials
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

    <!-- Enkel als je als bedrijf bent ingelogd mag je een student kunnen accepteren of weigeren -->
    @if (Auth::guard('company')->check())
    <div class="applications">
    <p>{{$internConfirmed->students->firstName . " " . $internConfirmed->students->lastName}}</p>
    @if ($internConfirmed->confirmed == 0)
    <!-- Student accepteren -->        
        <div class="applications_buttons">
            <form method="post" action="">
                {{ csrf_field() }}

                <textarea name="student_internship_id" class="hiddenInternship_id">{{$internConfirmed->id}}</textarea>

                <textarea name="confirmed" class="hiddenInternship_id">1</textarea>

                <button type="submit" name="form2" class="btn-accept">Accepteren</button>
            </form>

            <!-- Student weigeren -->
            <form method="post" action="">
                {{ csrf_field() }}

                <textarea name="student_internship_id" class="hiddenInternship_id">{{$internConfirmed->id}}</textarea>

                <textarea name="confirmed" class="hiddenInternship_id">2</textarea>

                <button type="submit" name="form2" class="btn-alert">Weigeren</button>
            </form>
        </div>

        @elseif ($internConfirmed->confirmed == 2)
        <p>Geweigerd</p>

        @else
        <p>Geaccepteerd</p>
        @endif
    </div>

    @elseif (Auth::check())

    @if($internConfirmed->student_id == Auth::user()->id )
    <div class="applications">
        <p>{{$internConfirmed->students->firstName . " " . $internConfirmed->students->lastName}}</p>

        @if ($internConfirmed->confirmed == 0)
        <p>In behandeling...</p>

        @elseif ($internConfirmed->confirmed == 2)
        <p>Geweigerd</p>

        @elseif ($internConfirmed->confirmed == 1)
        <p>Geaccepteerd</p>
        @endif
    </div>
    @endif

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
