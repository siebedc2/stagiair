@extends('layouts/internships')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/internships">Internships</a>
        <a href="/mystudent/profile">My Profile</a>
    </nav>
@endsection

@section('content')

    <h1>{{$internship->title}}</h1>
    <h2>{{$internship->companyId}}</h2>
    <p>Created - {{$internship->created_at->format('d/m/Y')}}</p>
    <h3>Short summary of the internship</h3>
    <p>{{$internship->description}}</p>
    <h3>The skills you need to have</h3>
    <p>{{$internship->requirements}}</p>
    <h3>What the company offers</h3>
    <p>{{$internship->offer}}</p>
    
    <button type="submit" class="btn btn-primary">Apply</button>

@endsection