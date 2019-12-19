@extends('layouts/app')

@section('title')
    {{$userInfo->firstName}} {{$userInfo->lastName}}
@endsection
@section('content')
    
        <div class="myInfo">
            @if ($flash = session('message'))
                <div class="alert alert--succes">
                    {{$flash}}
                </div>
            @endif
            <div class="headOfInfo">
                <h2>{{$userInfo->firstName}} {{$userInfo->lastName}}</h2>
                <a href="/mijnProfiel/instellingen">Wijzig</a>
            </div>
            <div class="info__container">
                <img src="http://tinygraphs.com/squares/helloworld">
                <div class="myInfo__info">
                        <p class="school">{{$userInfo->school}}, {{$userInfo->education}}</p>
                        <social></social>        
                </div>
            </div>
        </div>
    
@endsection