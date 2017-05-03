@extends('layouts.master')


@section('content')
<div class="container">
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
            <p class="timeFont">Created {{$post->created_at->diffForHumans()}} by: {{$post->user->name}}</p>
        </div>
    </div>
    @endforeach
    <div class="row">
        {!! $posts->render() !!}
        <!-- @include('pagination.default', ['paginator' => $posts]) -->
    </div> 
</div>

@stop
