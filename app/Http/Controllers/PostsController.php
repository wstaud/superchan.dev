<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Log;
use Input;
use Auth;
use App\Models\Post;
use DB;

class PostsController extends Controller
{

    public function index()
    {
        $posts = \App\Models\Post::orderBy('created_at', 'desc')->paginate(8);

        //Checking to see if url has a board. If it does, filter only that board
        if(Input::has('b')){
            $posts = \App\Models\Post::orderBy('created_at', 'desc')->where('board',Input::get('b'))->paginate(8);
        }

        //If user is logged in, assigned loggedInUser to allow for post edit/delete from index
        if (Auth::check()) {
            $loggedInUser = Auth::user()->id;
        }else{
            $loggedInUser = "";
        }
        $data = array('posts' => $posts, 'user' => $loggedInUser);
        return view('/posts/index', $data);
        
        
    }

    public function create()
    {
        //If user is not logged in, make tem log in first.
        if (!\Auth::check()) {
            return redirect()->action('Auth\AuthController@getLogin');
        }
        return view('/posts/create');
    }

    public function store(Request $request)
    {
        //Rules that need to be met before posting
        $rules = array(
            'title' => 'required|max:100',
            'board' => 'required|max:100',
        );

        $this->validate($request, $rules);

        //Ensures at least one of the following fields has content
        if(!empty($request->url) || $request->hasFile('image') || !empty($request->content)) {
            //Set known variables first
            $post = new \App\Models\Post();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->board = $request->board;
            $post->created_by = 1; 
            if(!empty($request->url)){
                $post->url = $request->url;
            }
            if($request->hasFile('image')){
                if($request->file('image')->getClientSize() <= 41943040 
                    && ($request->file('image')->getClientOriginalExtension() == 'png' 
                        || $request->file('image')->getClientOriginalExtension() == 'jpg'
                        || $request->file('image')->getClientOriginalExtension() == 'jpeg'))
                {
                //change image name
                $imageName =  time() . '.' . 
                $request->file('image')->getClientOriginalExtension();
                //Move image to new folder
                $request->file('image')->move(
                    base_path() . '/public/img/uploads/', $imageName
                );

                $post->photo = $imageName;
                }else{
                    return "fail";
                }
            }
            if(!empty($request->content)){
                $post->content = $request->content;
            }
            $post->save();
            $request->session()->flash('successMessage', 'Post saved successfully');
            Log::info('New post saved', $request->all());

            return redirect()->action('PostsController@show', [$post->id]); //Redirects to post after creation

        }else{
            $request->session()->flash('errorMessage', 'You need at least one of the three: Content, photo or URL');
        }
    }

    public function show($id)
    {
        $loggedInUser = "";
        if (Auth::check()) {
            $loggedInUser = Auth::user()->id;
        }   
        $loggedInUser = "";
        $post = \App\Models\Post::findOrFail($id);
        $comments = \App\Models\Comments::orderBy('post_id', 'desc')->where('post_id', $post->id)->paginate(20);

        $data = array('post' => $post, 'user' => $loggedInUser, 'comments' => $comments);



        return view('/posts/show', $data);    
    }

    public function comment(Request $request)
    {
        if (Auth::check()) {
            $comment = new \App\Models\Comments();
            $comment->comment = $request->comment;
            $comment->post_id = $request->post_id;
            $comment->created_by = Auth::user()->id;
            $comment->save();
            return redirect()->action('PostsController@show', [$request->post_id]);
        }else{
            abort(403);
        }   
    }



    public function edit($id)
    {
        $post = \App\Models\Post::findOrFail($id);
        if (Auth::check()) {
            if(Auth::user()->id === $post->created_by){
                return view('/posts/edit')->with('post', $post);
            }else{
                abort(403);
            }
        }else{
            abort(403);
        } 
    }

    public function update(Request $request, $id)
    {   
        $post = \App\Models\Post::findOrFail($id);
        $post->title = $request->title;
        $post->board = $request->board;
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
