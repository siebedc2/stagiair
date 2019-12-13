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
<<<<<<< HEAD
                @foreach ($reviews as $review)
                    <div class="review">
                        <p id="stars">{{$review->stars}}</p>    
                        <p>{{$review->students->firstName . " " . $review->students->lastName }}</p>
                        <p>{{$review->companies->name}}</p>
                        <p id="description">{{$review->description}}</p>
                </div>
                @endforeach
=======
                <h4 id="stars">{{$review->stars}}/5</h4>
                <h4 id="description">{{$review->description}}</h4>
                <p>{{$review->student_id}}</p>
                <p>{{$review->company_id}}</p>
>>>>>>> d1b03397bb84fc6db97b73a13f310521deee8ce7
            </div>
        </div>
    </div>
    

@endsection