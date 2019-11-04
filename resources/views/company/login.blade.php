@extends('layouts/log')

@section('title')
Login
@endsection

@section('content')

<a class="btn switch" href="/student/login">login student</a>

<form method="post" action="" class="login">

    @auth
        <div>Je bent ingelogd!</div> 
    @endauth

    {{csrf_field()}}

    <div class="form-total">

        <h2>Login als bedrijf</h2>

        <div class="form-group">

            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"  placeholder="Geef jouw mail in...">
        </div>
        <div class="form-group">
            
            <input name="password" type="password" class="form-control" id="password" placeholder="Geef jouw wachtwoord in...">
        </div>
        <div class="form-group form-check check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Onthoud mij</label>
        </div>
        
  

        <button type="submit" class="btn btn--login">Login</button>
        <a href="/bedrijf/register">Nog geen account?</a>

    </div>
</form>

@endsection