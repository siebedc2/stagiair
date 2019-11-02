@extends('layouts/log')

@section('title')
Login
@endsection

@section('content')

<form method="post" action="">

    @auth
        <div>We are logged in!</div> 
    @endauth

    {{csrf_field()}}

    <div class="form-total">

        <h2>Log in als bedrijf</h2>

        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"  placeholder="Geef jouw mail in...">
        </div>
        <div class="form-group">
            <label for="password">Wachtwoord</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Geef jouw wachtwoord in...">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Onthoudt mij</label>
        </div>
        <a href="/company/register">Nog geen account?</a>
        <br>
        <a href="/student/login">Ik ben een student</a>

        <button type="submit" class="btn btn-primary">Log in</button>

    </div>
</form>

@endsection