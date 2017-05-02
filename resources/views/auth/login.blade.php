@extends('layouts.master')

@section('content')

<form method="POST" action="{{ action ('Auth\AuthController@postLogin') }}">
    {!! csrf_field() !!}
    <div class="row align-center">      
        <div class="small-12 column">
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div class="small-12 column">
            Password
            <input type="password" name="password" id="password">
        </div>

        <div class="small-12 column">
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div class="small-12 column">
            <input type="submit" class="button" value="Submit">
        </div>
    </div>
</form>

@stop