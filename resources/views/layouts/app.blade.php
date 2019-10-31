<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stagiair - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <header class="stagiair_header">
        <a href="/" id="logo">Stagiair</a>
        <nav>
            <a href="/">Home</a>
            <a href="#">Internships</a>
            <a href="#">My Profile</a>
            <a href="/logout">Log out</a>
        </nav>
    </header>


    <div class="container stagiair">
        @yield('content')
    </div>

</body>

</html>