@extends('layouts.master')


@section('content')
@foreach ($posts as $post)
    <div class="row align-middle grayBox">
        <div class="small-2 medium-2 column"
            <a href="/posts/{{$post->id}}"><img src="http://images.phpgang.com/2015/11/Laravel-5.png"></a>
        </div>
        <div class="small-10 medium-10 column">
            <a href="/posts/{{$post->id}}"><h5>{{$post->title}}</h5></a>
            <a href="{{$post->url}}">{{$post->url}}</a>
            <p class="timeFont">Created {{$post->created_at->diffForHumans()}} by:</p>
        </div>
    </div>
    @endforeach
<div class="row align-center">
    {!! $posts->render() !!}
    <!-- @include('pagination.default', ['paginator' => $posts]) -->
</div>
@stop
