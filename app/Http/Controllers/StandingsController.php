<?php

namespace App\Http\Controllers;

use App\Club;
use App\Standing;
use Illuminate\Http\Request;

class StandingsController extends Controller
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
        $standings = Standing::all();
        $clubs = Club::all();
        return view('standings.create', compact('standings', 'clubs'));
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
            'level' => 'required',
            'game' => 'required',
            'club_id' => 'required',
            'win' => 'required',
            'draw' => 'required',
            'lose' => 'required',
            'goal_f' => 'required',
            'goal_c' => 'required',
            'point' => 'required',
        ]);

        $standings = new Standing();
        $standings->level = $request->level;
        $standings->game = $request->game;
        $standings->club_id = $request->club_id;
        $standings->win = $request->win;
        $standings->draw = $request->draw;
        $standings->lose = $request->lose;
        $standings->goal_f = $request->goal_f;
        $standings->goal_c = $request->goal_c;
        $standings->point = $request->point;
        $standings->save();
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
        $standing = Standing::find($id);
        $clubs = Club::all();
        return view('standings.edit', compact('standing', 'clubs'));
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
            'level' => 'required',
            'game' => 'required',
            'club_id' => 'required',
            'win' => 'required',
            'draw' => 'required',
            'lose' => 'required',
            'goal_f' => 'required',
            'goal_c' => 'required',
            'point' => 'required',
        ]);

        $standings = Standing::find($id);
        $standings->level = $request->level;
        $standings->game = $request->game;
        $standings->club_id = $request->club_id;
        $standings->win = $request->win;
        $standings->draw = $request->draw;
        $standings->lose = $request->lose;
        $standings->goal_f = $request->goal_f;
        $standings->goal_c = $request->goal_c;
        $standings->point = $request->point;
        $standings->save();
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
        $standings = Standing::find($id);
        $standings->delete();
        return back();
    }
}
