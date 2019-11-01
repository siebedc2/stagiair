@extends('layouts/internships')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/internships">Internships</a>
        <a href="/mystudent/profile">My Profile</a>
    </nav>
@endsection

@section('content')

    

    <h1>All Internships</h1>

    @if( $flash = session('message') )
        <div class="alert alert-success">{{ $flash }}</div>
    @endif
    
        <div class="container internships">
            <div class="row">
                <!-- lussen over $internships in de DB waar $i 1 internship is -->
                @foreach ($internships as $i)
                <a href="/stages/{{$i->id}}" class="internship">
                        <!-- elk item van 1 internship in een html tag steken -->
                        <h4 id="titleTeaser">{{$i->title}}</h4>
                        <h4 id="companyTeaser">{{$i->companyId}}</h4>
                        <i class="arrow right"></i>
                        <p id="descriptionTeaser">{{$i->description}}</p>
                </a>
                @endforeach
            </div>
        </div>
   

@endsection