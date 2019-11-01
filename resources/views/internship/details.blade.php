@extends('layouts/internships')

@section('content')

    <h1>{{$internship->title}}</h1>
    <h2>{{$internship->companyId}}</h2>
    <p>Aangemaakt op - {{$internship->created_at->format('d/m/Y')}}</p>
    <h3>Korte samenvatting</h3>
    <p>{{$internship->description}}</p>
    <h3>Skills</h3>
    <p>{{$internship->requirements}}</p>
    <h3>Aanbieding</h3>
    <p>{{$internship->offer}}</p>
    
    <button type="submit" class="btn btn-primary">Apply</button>

@endsection