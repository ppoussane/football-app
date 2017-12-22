<?php

namespace App\Http\Controllers;

use App\Category;
use App\Club;
use App\Events\NewPostCreated;
use App\Events\PostUpdated;
use App\Events\PostDeleted;
use App\Gallery;
use App\Post;
use App\Standing;
use App\Stat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Week;
use App\Game;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'update', 'destroy']);
    }

    public function index(Week $week)
    {
        $posts = Post::ordinary()->paginate(5);
        $main_posts = Post::main_post()->load('likes');
        $games = Game::all();
        $weeks = Week::all();
        $standings = Standing::all();
        $galleries = Gallery::all();
        $best_forwards = Stat::all()->sortByDesc('goal')->take(5);
        $more_passes = Stat::all()->sortByDesc('pass')->take(5);
        $more_assists = Stat::all()->sortByDesc('assist')->take(5);
        $more_dribbles = Stat::all()->sortByDesc('dribble')->take(5);
        $clubs = Club::all();
        return view('home', compact('posts','weeks', 'games', 'standings', 'galleries', 'main_posts', 'best_forwards', 'more_passes', 'more_assists', 'more_dribbles', 'clubs'));
    }

    public function create()
    {
        $posts = Post::latest()->get();
        $categories = Category::all();
        return view('posts.create', compact('posts', 'categories'));
    }

    public function store(Request $request)
    {
        dd($request);
        $inputs = $this->validate($request,[
            'title' => 'required|string|max:256',
            'body' => 'required',
            'image' => 'required',
            'category_id' => 'integer',
            'ordinary' => 'required'
        ]);

        $path = $request['image']->store('images' , 'public');

        $post = $request->user()->posts()->create([
            'title' => $inputs['title'],
            'body' => $inputs['body'],
            'image' => $path,
            'category_id' => $inputs['category_id'],
            'ordinary' => $inputs['ordinary'],
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

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        // check mikone bebine access dare user ia na. inke dare ia na ro toie file app\Providers\AuthServiceProvider.php neveshtam.
        $this->authorize('update-post', $post);

        return view('posts.edit', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // check mikone bebine access dare user ia na. inke dare ia na ro toie file app\Providers\AuthServiceProvider.php neveshtam.
        $this->authorize('delete-post', $post);

        $post->delete();

        event(new PostDeleted($post));

        return back();
    }

    public function like(Post $post)
    {
        $post->likes()->toggle([Auth::id()]);

        return back();
    }

    public function category_post_show($id)
    {
        $category = Category::find($id);
        $posts = Post::with('category')->where('category_id', '=', $id)->paginate(5);;
        return view('categories.cat', compact('posts', 'category'));
    }
}
