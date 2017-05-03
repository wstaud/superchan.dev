@extends('layouts.master')


@section('content')
<div class="container-fluid marginTop">
	@if(!empty($post->photo))
	<div class="row">
	    <div class="col-sm-12 text-center">
	        <a href="/img/uploads/{{$post->photo}}"><img class="img-fluid contentPhoto" src="/img/uploads/{{$post->photo}}"></a>
	    </div>
	</div>
	@endif
	<div class="row marginTop">
		<div class="col-sm-12">
			<h4>{{$post->title}}</h4>
		    <p>{{$post->content}}</p>
		    <a href="{{$post->url}}">{{$post->url}}</a>
			@if($user === $post->created_by)
            <p class="timeFont">Created {{$post->created_at->diffForHumans()}} by: {{$post->user->name}}   <a href="/posts/{{$post->id}}/edit">Edit</a></p>
            @else
            <p class="timeFont">Created {{$post->created_at->diffForHumans()}} by: {{$post->user->name}}</p>
            @endif
		</div>
	</div>
</div>

@stop
