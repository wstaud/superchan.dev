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
            <p class="timeFont">Created {{$post->created_at->diffForHumans()}} by: {{$post->user->name}}    <a href="/posts/{{$post->id}}/edit">Edit</a>    <span class="danger"><a href="/posts/{{$post->id}}/delete">Delete</a></span></p>
            @else
            <p class="timeFont">Created {{$post->created_at->diffForHumans()}} by: {{$post->user->name}}</p>
            @endif
		</div>
	</div>
    <div class="row whiteBox">   
        <div class="col-md-6 col-sm-12">
            {!! Form::open(
                array( 
                    'action' => 'PostsController@comment',
                    'novalidate' => 'novalidate', 
                    'files' => true)) !!}
            {!!Form::token()!!}  
            <div class="form-group commentTextBox">
                <label for="content"></label>
                <textarea class="form-control" id="content" name="content" rows="8"></textarea>
            </div>
            <div class="form-group commentTextBox">
                {!! Form::label('Image') !!}
                {!! Form::file('image', null) !!}
                <button type="submit" id="commentSubmitButton" class="btn btn-success">Submit</button>
            </div>
        
            <!-- <div class="row">
                <div class="col-sm-6">
                    
                </div>
            </div> -->
        {!! Form::close() !!}
        </div>
        <div class="col-sm-12">
            <h3>Most Recent Comments</h3>
        </div>
        @foreach($comments as $comment)
        <div class="col-sm-12 commentBox">
            <p><span class="commentUsernameText">{{$comment->user->name}}</span> <span class="commentCreatedText">{{$comment->created_at->diffForHumans()}}</span></p>
            <p><span class="commentText">{{$comment->comment}}</span></p> 
        </div>
        @endforeach
    </div>
</div>
@stop
