<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Tagging;
use Illuminate\Http\Request;

class TaggingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taggings = Tagging::all();
        $posts = Post::all();
        $tags = Tag::all();
        return view('taggings.create', compact('taggings', 'posts', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request,[
           'post_id' => 'required',
           'tag_id' => 'required',
        ]);

        $taggings = new Tagging();
        $taggings->post_id = $request->post_id;
        $taggings->tag_id = $request->tag_id;

        $taggings->save();

        $post_id = $request->post_id;
        $tag_id = $request->tag_id;

        $post = Post::find($post_id);
        $post->tags()->sync($tag_id);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
