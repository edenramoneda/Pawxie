@extends('layouts.app')

@section('title', 'Pawxie | Login')

<nav class="navbar navbar-expand-sm ess-navigation justify-content-center">
  <a class="navbar-brand text-white" href="/">
    <img src="{{asset('images/logo.png')}}" alt="logo" style="width:40px;">
    <strong>Pawxie</strong> Veterinary Clinic</a>
</nav>

@section('login')
    <div class="login-form mt-5">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="AuthLogin" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pswd" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div> 
        </div> 
    </div>
@endsection