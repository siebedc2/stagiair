@extends('layouts/log')

@section('title')
Registreren
@endsection

@section('content')

<form action="" method="post" class="login register">
    {{csrf_field()}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-total">
        <h2>Registreren als student</h2>
        <form>
            <div class="form-group">
                <label for="name">Voornaam</label>
                <input name="firstName" type="text" class="form-control" id="firstName" placeholder="Geef jouw voornaam in..." value="{{ old('firstName') }}">
            </div>

            <div class="form-group">
                <label for="name">Achternaam</label>
                <input name="lastName" type="text" class="form-control" id="lastName" placeholder="Geef jouw achternaam in..." value="{{ old('lastName') }}">
            </div>

            <div class="form-group">
                <label for="name">School</label>
                <input name="school" type="text" class="form-control" id="school" placeholder="Geef jouw school in..." value="{{ old('school') }}">
            </div>

            <div class="form-group">
                <label for="name">Studierichting</label>
                <input name="education" type="text" class="form-control" id="education" placeholder="Geef jouw studierichting in..." value="{{ old('education') }}">
            </div>

            <div class="form-group">
                <label for="name">Verjaardag</label>
                <input name="dateOfBirth" type="date" class="form-control" id="birthday" value="{{ old('dateOfBirth') }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Geef jouw email in..." value="{{ old('email') }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Geef jouw wachtwoord in...">
            </div>

            <button type="submit" class="btn btn--login">Registreren</button>
            <a href="/student/login">Ik heb al een account?</a>
        </form>
    </div>

    @endsection