
@extends('layouts/app')

@section('title')
    Reviews
@endsection

@section('content')
    <h1>Reviews</h1>

    <a href="/schrijfReview">Schrijf review</a>


    <div class="container reviews">
        <div class="row">
            <!-- lussen over $internships in de DB waar $i 1 internship is -->
            @foreach ($reviews as $review)
            <a href="#" class="internship">
                <h4 id="stars">{{$review->stars}}</h4>
                <h4 id="description">{{$review->description}}</h4>
                <p>{{$review->student_id}}</p>
            </a>
            @endforeach
        </div>
    </div>
    

@endsection