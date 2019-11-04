@extends('layouts/log')

@section('title')
Registreren
@endsection

@section('content')

<form action="" method="post">
    {{csrf_field()}}

    <div class="form-total">
        <h2>Registreren als student</h2>
        <form>
            <div class="form-group">
                <label for="name">Voornaam</label>
                <input name="firstName" type="text" class="form-control" id="firstName" placeholder="Geef jouw voornaam in...">
            </div>

            <div class="form-group">
                <label for="name">Achternaam</label>
                <input name="lastName" type="text" class="form-control" id="lastName" placeholder="Geef jouw achternaam in...">
            </div>

            <div class="form-group">
                <label for="name">School</label>
                <input name="school" type="text" class="form-control" id="school" placeholder="Geef jouw school in...">
            </div>

            <div class="form-group">
                <label for="name">Studierichting</label>
                <input name="education" type="text" class="form-control" id="education" placeholder="Geef jouw studierichting in...">
            </div>

            <div class="form-group">
                <label for="name">Verjaardag</label>
                <input name="dateOfBirth" type="date" class="form-control" id="birthday">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Geef jouw email in...">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Geef jouw wachtwoord in...">
            </div>

            <button type="submit" class="btn btn-primary">Registreren</button>
        </form>
    </div>

    @endsection