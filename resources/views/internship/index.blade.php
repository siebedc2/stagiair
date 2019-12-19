@extends('layouts/app')

@section('title')
    Stages
@endsection

@section('content')

   

    <h1>Stages</h1>

    <form method="POST" action="{{URL::to('/search')}}" role="search" class="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" id="search_field" name="searchDescription" placeholder="Zoek stages">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-search">Stages zoeken</button>
            </span>
        </div>
    </form>

    @if( $flash = session('message') )
        <div class="alert alert-success">{{ $flash }}</div>
    @endif


    
        <div class="container internships">
                <filly></filly>
                <stage-component></stage-component>            
        </div>
   

@endsection