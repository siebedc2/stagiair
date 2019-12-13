@extends('layouts/app')

@section('title')
{{$companyInfo->name}}
@endsection
@section('content')

<div class="myInfo">
    @if ($flash = session('message'))
    <div class="alert alert--succes">
        {{$flash}}
    </div>
    @endif
    <div class="headOfInfo">
        <h2>{{$companyInfo->name}}</h2>
        <!--<a href="/mijnProfiel/instellingen">Wijzig</a>-->
    </div>
    <div class="info__container">
        <img src="http://tinygraphs.com/squares/helloworld">
        <div class="myInfo__info">
            <p class="school">{{$companyInfo->city}}, {{$companyInfo->sector}}</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis voluptatum aspernatur ex. Tempore eaque quas delectus doloribus quod iusto nobis nesciunt veritatis sintLorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis voluptatum aspernatur ex. Tempore eaque quas delectus doloribus quod iusto nobis nesciunt veritatis sint bLorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis voluptatum aspernatur ex. Tempore eaque quas delectus doloribus quod iusto nobis nesciunt veritatis sint bLorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis voluptatum aspernatur ex. Tempore eaque quas delectus doloribus quod iusto nobis nesciunt veritatis sint b beatae voluptates temporibus ea provident, quo perspiciatis.</p>        
        </div>
    </div>
</div>

@endsection
