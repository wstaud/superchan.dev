@extends('layouts.master')

@section('content')
<div class="container fullHeight">
    <div class="row align-items-center fullHeight">      
        <div class="col-md-6 offset-md-3 col-sm offset-sm-0">
            <form method="POST" action="{{ action ('Auth\AuthController@postLogin') }}" data-validation data-required-message="This field is required">
            {!! csrf_field() !!}
                <div id="loginHeaderBox" class="boardsBox-fp">
                    <h1>Login to SUPERchan</h1>
                </div>
                <div class="whiteBox">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <input type="checkbox" name="remember"> Remember Me
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 killPadding leftButton">
                        <button type="submit" class="btn btn-success btn-block">Login</button>
                    </div>
                    <div class="col-sm-6 killPadding rightButton">
                        <a href="/signup" role="button" class="btn btn-primary btn-block">Go To Signup</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop