@extends('layouts.master')

@section('content')
<div class="container-fluid fullHeight">
    <div class="row align-items-center fullHeight" id="loginBox">      
        <div class="col-md-6 offset-md-3 col-sm offset-sm-0">
            <form method="POST" action="{{ action ('Auth\AuthController@postRegister') }}" data-validation data-required-message="This field is required">
            {!! csrf_field() !!}
                <div id="loginHeaderBox" class="boardsBox-fp">
                    <h1>Create an account</h1>
                </div>
                <div class="whiteBox">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" data-required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" data-required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 killPadding leftButton">
                        <button type="submit" class="btn btn-success btn-block">Signup</button>
                    </div>
                    <div class="col-sm-6 killPadding rightButton">
                        <a href="/login" role="button" class="btn btn-primary btn-block">Go To Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@stop