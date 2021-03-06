@extends('layouts.master')


@section('content')
<div class="container">
    @if(Input::has('b'))
    <div class="row">
        <div class="col-md-8 offset-md-2 col-sm-12 offset-sm-0">
            <h1>Welcome to /b {{Input::get('b')}}</h1>
        </div>
    </div>
    @endif
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
            @if($user === $post->created_by)
            <p class="timeFont">Created {{$post->created_at->diffForHumans()}} by: {{$post->user->name}}    <a href="/posts/{{$post->id}}/edit">Edit</a>    <span class="danger"><a href="/posts/{{$post->id}}/delete">Delete</a></span></p>
            @else
            <p class="timeFont">Created {{$post->created_at->diffForHumans()}} by: {{$post->user->name}}</p>
            @endif
        </div>
    </div>
    @endforeach
    <div class="row">
        {!! $posts->render() !!}
        <!-- @include('pagination.default', ['paginator' => $posts]) -->
    </div> 
</div>

@stop
