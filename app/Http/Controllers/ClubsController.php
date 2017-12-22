<?php

namespace App\Http\Controllers;

use App\Club;
use App\Country;
use App\League;
use App\Post;
use App\Stadium;
use App\Stat;
use App\Statistic;
use Illuminate\Http\Request;

class ClubsController extends Controller
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
        $clubs = Club::all();
        $countries = Country::all();
        return view ('clubs.create', compact('clubs', 'countries'));
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
            'name' => 'string|required',
            'country_id' => 'required',
        ]);

        $path = $request->image->store('images', 'public');

        $club = new Club();
        $club->name = $request->name;
        $club->country_id = $request->country_id;
        $club->manager = $request->manager;
        $club->chairman = $request->chairman;
        $club->found = $request->found;
        $club->website = $request->website;
        $club->image = $path;
        $club->save();
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
        $club = Club::find($id);
        $posts = Post::all();
        return view('clubs.show', compact('club', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $club = Club::find($id);
        $countries = Country::all();
        return view ('clubs.edit', compact('club', 'countries'));
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
        $this->validate($request,[
            'name' => 'string',
            'country_id' => 'required'
        ]);

        $club = Club::find($id);

        if ($request->hasFile('image')) {
            $path = $request['image']->store('images', 'public');
            $club->image = $path;
        }

        $club->name = $request->name;
        $club->country_id = $request->country_id;
        $club->manager = $request->manager;
        $club->chairman = $request->chairman;
        $club->found = $request->found;
        $club->website = $request->website;
        $club->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $club = Club::find($id);

        $club->delete();
        return back();
    }
}
