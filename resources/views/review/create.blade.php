@extends('layouts/app')

@section('title')
    Reviews
@endsection

@section('content')
    <h1>Schrijf review</h1>

    <form method="post" action="/schrijfReview">

        {{ csrf_field() }}

        @if( $errors->any() )
            @component('components/alert')
                @slot('type', 'danger')
                <ul>
                    @foreach($errors->all() as $e )
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endcomponent
        @endif

        <!-- form voor het aanmaken van een review -->
        <div class="form-group">
            <label for="stars">Aantal sterren</label>
            <textarea class="form-control" id="stars" name="stars"></textarea>
        </div>
        <div class="form-group">
            <label for="description">Beschrijving</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Review posten</button>
    </form>

@endsection