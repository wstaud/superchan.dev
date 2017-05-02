<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Log;

class PostsController extends Controller
{

    public function index()
    {
        $posts = \App\Models\Post::orderBy('created_at', 'desc')->paginate(4);
        return view('/posts/index')->with('posts', $posts);
    }

    public function create()
    {
        if (!\Auth::check()) {
            return redirect()->action('Auth\AuthController@getLogin');
        }
        return view('/posts/create');
    }

    public function store(Request $request)
    {
        $rules = array(
            'title' => 'required|max:100',
            'url'   => 'required',
            'content' => 'required'
        );

        $this->validate($request, $rules);

        $post = new \App\Models\Post();
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = 1; //TODO: Update this to actual user ID session
        $post->save();
        
        $request->session()->flash('successMessage', 'Post saved successfully');
        Log::info('New post saved', $request->all());

        return redirect()->action('PostsController@show', [$post->id]); //Redirects to post after creation
    }

    public function show($id)
    {
        $post = \App\Models\Post::findOrFail($id);
       
        return view('/posts/show')->with('post', $post);
        
    }

    public function edit($id)
    {
        $post = \App\Models\Post::findOrFail($id);
        return view('/posts/edit')->with('posts', $posts);
    }

    public function update(Request $request, $id)
    {   
        $post = \App\Models\Post::findOrFail($id);
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = $post->created_by;
        $post->save();
        return redirect()->action('PostsController@show', [$post->id]); //Redirects to post after edit
    }

    public function destroy($id)
    {
        $post = \App\Models\Post::findOrFail($id);
        $post->delete();
        return redirect()->action('PostsController@index');
    }
}
