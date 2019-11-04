@extends('layouts/app')

@section('title')
    Instellingen student
@endsection

@section('content')

        <form action="" method="post">
            {{csrf_field()}}
            
                    
            <div class="form-total">
                <h2>Instellingen student</h2>

                <div class="form-group">
                    <label for="name">School</label>
                    <input name="school" type="text" class="form-control" id="school" aria-describedby="emailHelp" placeholder="{{$userInfo->school}}" >
                </div>
        
                <div class="form-group">
                    <label for="name">Studierichting</label>
                    <input name="education" type="text" class="form-control" id="education" aria-describedby="emailHelp" placeholder="{{$userInfo->education}}" >
                </div>
        
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="{{$userInfo->email}}" >
                </div>
                <div class="form-group">
                    <label for="password">Wachtwoord</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" >
                </div>
        
                <button type="submit" class="btn btn-primary">Opslaan</button>
            </div>
        </form>

@endsection