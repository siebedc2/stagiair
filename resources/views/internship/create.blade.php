@extends('layouts/internships')

@section('title')
    Stage aanmaken
@endsection

@section('content')

    <h1>Create new Internship</h1>

    <!-- form voor het aanmaken van een nieuwe internship door een bedrijf -->
    <form method="post" action="/stages">

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

        <!-- form voor het aanmaken van een stage -->
        <div class="form-group">
            <label for="title">Titel van de stage</label>
            <input value="{{ old('title') }}" type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Korte samenvatting over de stage</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="requirements">Welke skills moet de student hebben</label>
            <textarea class="form-control" id="requirements" name="requirements" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="offer">Wat heb je als bedrijf aan te bieden</label>
            <textarea class="form-control" id="offer" name="offer" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Stage aanmaken</button>
    </form>
    

@endsection