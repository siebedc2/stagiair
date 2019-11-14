@extends('layouts/app')

@section('title')
    Mijn sollicitaties
@endsection

@section('content')
<h1>Mijn sollicitaties</h1>

    @if( $flash = session('message') )
        <div class="alert alert-success">{{ $flash }}</div>
    @endif
    
       

@endsection