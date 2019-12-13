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
            <div class="reviews">
                @foreach ($reviews as $review)
                    <div class="review">
                        <p id="stars">{{$review->stars}}</p>    
                        <p>{{$review->students->firstName . " " . $review->students->lastName }}</p>
                        <p>{{$review->companies->name}}</p>
                        <p id="description">{{$review->description}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    

@endsection