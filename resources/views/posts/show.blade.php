@extends('layouts.master')


@section('content')
<div class="container-fluid marginTop">
	<div class="row">
	    <div class="col-sm-12 text-center">
	        <a href="https://images7.alphacoders.com/344/344627.jpg"><img class="img-fluid contentPhoto" src="https://images7.alphacoders.com/344/344627.jpg"></a>
	    </div>
	</div>
	<div class="row marginTop">
		<div class="col-sm-12">
			<h4>{{$post->title}}</h4>
		    <p>{{$post->content}}</p>
		    <a href="{{$post->url}}">{{$post->url}}</a>
			<p class="timeFont">Created on: {{$post->created_at->diffForHumans()}} by:</p>
		</div>
	</div>
</div>

@stop
