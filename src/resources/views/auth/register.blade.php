@extends('layout')
@section('content')
 <h1> Sign up </h1>
 <hr>
 @if ($errors->any())
 <div class="alert alert-danger">
 Failed to authenticate. Please try again!
 </div>
 @endif
 <form method="post" action="/store">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="register-name" class="form-label">User name</label>
            <input 
            type="text" 
            class="form-control" 
            id="register-name" 
            name="name"
            autocomplete="off"
            autofocus
            >
        </div>

        <div class="mb-3">
            <label for="register-email" class="form-label">Email</label>
            <input 
            type="email" 
            class="form-control" 
            id="register-email" 
            name="email"
            autocomplete="off"
            autofocus°
            >
        </div>

        <div class="mb-3">
            <label for="register-password" class="from-label">Password</label>
            <input type="password"
                id="register-password"
                name="password"
                class="form-control"
            >
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>

    </form>

@endsection