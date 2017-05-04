@extends('layouts.master')


@section('content')
<div class="container-fluid fullHeight">
    <div class="row align-items-center fullHeight killFlex">
        <div class="col-md-6 offset-md-3 col-sm offset-sm-0">
            {!! Form::open(
                array( 
                    'action' => 'PostsController@store',
                    'novalidate' => 'novalidate', 
                    'files' => true)) !!}
            {!!Form::token()!!}
            <div id="loginHeaderBox" class="boardsBox-fp">
                <h1>Post</h1>
            </div>
            <div class="whiteBox">
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" data-required>
                </div>
                <div class="form-group">
                <label for="exampleSelect1">Board</label>
                    <select class="form-control" id="board" name="board">
                        <option selected>Choose...</option>
                        <option>technology</option>
                        <option value="comics-cartoons">comics and cartoons</option>
                        <option value="tv-film">tv and film</option>
                        <option>Weapons</option>
                        <option>Auto</option>
                        <option value="animals-nature">Animals and Nature</option>
                        <option>Sports</option>
                        <option value="science-math">Science and Math</option>
                        <option>History</option>
                        <option>Photography</option>
                        <option value="food-cooking">Food and Cooking</option>
                        <option>Artwork</option>
                        <option>Wallpapers</option>
                        <option>Literature</option>
                        <option>Music</option>
                        <option>Fashion</option>
                        <option value="graphic-design">Graphic Design</option>
                        <option>GIFs</option>
                        <option value="us-news">US News</option>
                        <option value="world-news">World News</option>
                        <option>Politics</option>
                        <option>Snowflakes</option>
                        <option>Alt-Right</option>
                        <option value="business-finance">Business and Finance</option>
                        <option>Fitness</option>
                        <option>Travel</option>
                        <option>Advice</option>
                        <option>E-Sports</option>
                        <option value="video-games-general">Video Games General</option>
                        <option>FPS</option>
                        <option>MMO</option>
                        <option>RPG</option>
                        <option value="gaming-wallpapers">Gaming Wallpapers</option>
                        <option value="pc-masters">PC Masters</option>
                        <option value="console-peasants">Console Peasants</option>
                        <option value="retro-gaming">Retro Gaming</option>
                        <option>Anime</option>
                        <option>Manga</option>
                        <option value="anime-wallpapers">Anime Wallpapers</option>
                        <option>Cosplay</option>
                        <option>Random</option>
                        <option value="offical-stuff">Offical Stuff</option>
                        <option>Vaping</option>
                        <option>Programming</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Content <br> (at least one of the three below are required)</label>
                    <textarea class="form-control" id="content" name="content" rows="8"></textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL" data-required>
                </div>
                <div class="form-group">
                {!! Form::label('Product Image') !!}
                {!! Form::file('image', null) !!}
            </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </div>
        {!! Form::close() !!}
        @if (count($errors) > 0)
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <div class="callout alert">
                    <h5>Error:</h5>
                    @foreach ($errors->all() as $error)
                        <p>-{{ $error }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    
    @endif
        </div>
    </div>
</div>
    
@stop
