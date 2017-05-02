@extends('layouts.master')


@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row post">
        <div class="col-sm-12 col-md-2 align-self-center">
            <a href="/posts/{{$post->id}}"><img class="thumbnail" src="https://images7.alphacoders.com/344/344627.jpg"></a>
        </div>
        <div class="col-sm-12 col-md-10">
            <a href="/posts/{{$post->id}}"><h5>{{$post->title}}</h5></a>
            <a href="{{$post->url}}">{{$post->url}}</a>
            <p class="timeFont">Created {{$post->created_at->diffForHumans()}} by:</p>
        </div>
    </div>
    @endforeach
    <div class="row">
        {!! $posts->render() !!}
        <!-- @include('pagination.default', ['paginator' => $posts]) -->
    </div> 
</div>

@stop
