<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'HomeController@showWelcome');

Route::resource('/account', 'AccountController');

// Post routes
Route::resource('/posts', 'PostsController'); //A resource controller

Route::post('/posts/show/comment', 'PostsController@comment');

// Authentication routes...
Route::get('/login', 'Auth\AuthController@getLogin');

Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/logout', 'Auth\AuthController@getLogout');

// Signup routes
Route::get('/signup', 'Auth\AuthController@create');

// Registration routes...
Route::get('/register', 'Auth\AuthController@getRegister');

Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/page/not/found',function($closure){
  // second parameter is optional. 
  abort(404);
});

// All errors
Route::get('/404', function()
{
    return view('errors/404');
});

Route::get('/403', function()
{
    return view('errors/403');
});
