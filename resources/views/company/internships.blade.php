@extends('layouts/internships')

@section('title')
    Mijn stages
@endsection

@section('content')
    <h1>{{ $company->name }}</h1>

     <!--
    <h2>Internships</h2>
    @foreach($company->internships as $internship)
        <div>{{ $internship->title }}</div>
        <div>{{ $internship->description }}</div>
        <br>
    @endforeach
    -->


    <div class="container internships">
            <div class="row">
                <!-- lussen over $internships in de DB waar $i 1 internship is -->
                @foreach($company->internships as $internship)
                <a href="/stages/{{$internship->id}}" class="internship">
                        <!-- elk item van 1 internship in een html tag steken -->
                        <h4 id="titleTeaser">{{ $internship->title }}</h4>
                        <p id="descriptionTeaser">{{ $internship->description }}</p>
                        <i class="arrow right"></i>
                </a>
                @endforeach
            </div>
        </div>

@endsection