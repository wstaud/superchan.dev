@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <h3>Your profile</h3>
            <ul>
                <li><a href="/account/edit">Edit Profile</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
        <div class="col">
            <h1>Your Posts</h1>
            @foreach ($posts as $post)
            <div class="row post">
                <div class="col-sm-12 col-md-2 align-self-center">
                    <div class="thumbnailContainer">
                        @if(!empty($post->photo))
                        <a href="/posts/{{$post->id}}"><img class="thumbnail" src="/img/uploads/{{$post->photo}}"></a>
                        @else
                        <a href="/posts/{{$post->id}}"><img class="thumbnail" src="/img/uploads/default.png"></a>
                        @endif
                    </div>
                </div>
                <div class="col-sm-12 col-md-10">
                    <a href="/posts/{{$post->id}}"><h5>{{$post->title}}</h5></a>
                    <a href="{{$post->url}}">{{$post->url}}</a>
                    <p class="timeFont">Created {{$post->created_at->diffForHumans()}} by: {{$post->user->name}}   <a href="/posts/{{$post->id}}/edit">Edit</a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@stop