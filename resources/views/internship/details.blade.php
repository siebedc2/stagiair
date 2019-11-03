@extends('layouts/internships')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="#">Internships</a>
        <a href="#">My Profile</a>
    </nav>
@endsection

@section('content')

    <h1>Details stage</h1>

    <h2>Reviews stage</h2>
    @foreach($internship->reviews as $review)
        <div>{{ $review->stars }}</div>
        <div>{{ $review->description }}</div>
        <br>
    @endforeach

@endsection