<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Log;
use DB;
use Input;
use Auth;

class PostsController extends Controller
{

    public function index()
    {
        $loggedInUser = Auth::user()->id;
        $posts = \App\Models\Post::orderBy('created_at', 'desc')->paginate(8);

        if(Input::has('b')){
            $posts = DB::table('posts')->where('board',Input::get('b'))->get();
        }
        $data = array('posts' => $posts, 'user' => $loggedInUser);

        return view('/posts/index', $data);
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
            'board' => 'required|max:100',
        );

        $this->validate($request, $rules);

        if(!empty($request->url) || $request->hasFile('image') || !empty($request->content)) {
            //Set known variables first
            $post = new \App\Models\Post();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->board = $request->board;
            $post->created_by = 1; //TODO: Update this to actual user ID session
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
        $loggedInUser = Auth::user()->id;
        $post = \App\Models\Post::findOrFail($id);

        $data = array('post' => $post, 'user' => $loggedInUser);

        return view('/posts/show', $data);    
    }

    public function edit($id)
    {
        
        $post = \App\Models\Post::findOrFail($id);
        if(Auth::user()->id === $post->created_by){
            return view('/posts/edit')->with('post', $post);
        }else{
            abort(404);
        }
        
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
