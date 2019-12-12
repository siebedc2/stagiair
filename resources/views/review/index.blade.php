
@extends('layouts/app')

@section('title')
    Reviews
@endsection

@section('content')
    <h1>Bedrijfsreviews</h1>

    @if(Auth::check())
        <a class="btn btn-primary" href="/schrijfReview">Schrijf review</a>
    @endif


    <div class="container reviews">
        <div class="row">
            <!-- lussen over $internships in de DB waar $i 1 internship is -->
            @foreach ($reviews as $review)
            <div class="reviews">
                <h4 id="stars">{{$review->stars}}</h4>
                <h4 id="description">{{$review->description}}</h4>
                <p>{{$review->student_id}}</p>
                <p>{{$review->company_id}}</p>
            </div>
            @endforeach
        </div>
    </div>
    

@endsection