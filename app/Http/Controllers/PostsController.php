<?php

namespace App\Http\Controllers;

use App\Events\NewPostCreated;
use App\Events\PostUpdated;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $inputs = $this->validate($request,[
            'title' => 'required|string|max:256',
            'body' => 'required',
            'image' => 'required'
        ]);

        $path = $request['image']->store('images' , 'public');

        $post = $request->user()->posts()->create([
            'title' => $inputs['title'],
            'body' => $inputs['body'],
            'image' => $path
        ]);

        event(new NewPostCreated($post));

        return back();
    }

    public function update(Request $request, Post $post)
    {
        $inputs = $this->validate($request,[
            'title' => 'required|string|max:256',
            'body' => 'required|string',
            'image' => 'nullable|image'
        ]);

        $post->title = $inputs['title'];
        $post->body = $inputs['body'];
        if ($request->hasFile('image')){
            $path = $request['image']->store('images' , 'public');
            $post->image = $path;
        }

        $post->save();

        event(new PostUpdated($post));

        return back();
    }

}
