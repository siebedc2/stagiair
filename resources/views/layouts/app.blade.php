<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stagiair - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <script defer src="{{ mix('js/app.js') }}"></script>

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/fdbce5f2ce.js" crossorigin="anonymous"></script>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/stagiairFavicon.png') }}" media="screen">

</head>

<body>
    <div id="app">
        <header class="stagiair_header">
            <a href="/" id="logo">Stagiair</a>
            <nav>
                @if (Auth::guard('company')->check())
                    <a href="/bedrijfsProfiel/mijnStages/{{Auth::guard('company')->user()->id}}">Mijn stages</a>
                    <a href="/bedrijfsReviews">Bedrijfsreviews</a>
                    <a href="/bedrijfsProfiel"><span class="iconprofile"></span>{{Auth::guard('company')->user()->email}}</a>
                    <a href="/logout">Afmelden</a>
                
                @elseif (Auth::check()) 
                    <a href="/stages">Stages zoeken</a>
                    <a href="/bedrijfsReviews">Bedrijfsreviews</a>
                    <a href="/mijnProfiel"><span class="iconprofile"></span>{{Auth::user()->email}}</a>
                    <a href="/logout">Afmelden</a>
                

                @else 
                    <a href="/stages">Stages zoeken</a>
                    <a href="/bedrijfsReviews">Bedrijfsreviews</a>
                    <a href="/student/login">Aanmelden</a>
                @endif
            </nav>
        </header>


        <div class="container stagiair">
            @yield('content')
        </div>
    </div>

</body>

</html>