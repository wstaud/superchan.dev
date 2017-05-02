@extends('layouts.master')


@section('content')
<div class="row align-center align-middle">
    <div class="card" style="width: 300px;">
        <img src="http://images.phpgang.com/2015/11/Laravel-5.png">
        <div class="card-section">
            <h4>{{$post->title}}</h4>
            <p>{{$post->content}}</p>
            <a href="{{$post->url}}">{{$post->url}}</a>
      <p class="timeFont">Created on: {{$post->created_at->diffForHumans()}} by:</p>
        </div>
    </div>
</div>

@stop
