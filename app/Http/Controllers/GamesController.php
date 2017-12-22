<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;
use App\Game;
use App\Week;

class GamesController extends Controller
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
        $games = Game::latest()->get();
        $weeks = Week::all();
        return view ('games.create', compact('games', 'weeks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'host' => 'required',
            'guest' => 'required',
            'day' => 'required',
            'timeResult' => 'required',
            'week_id' => 'required|integer'
        ]);
        $game = new Game;

        $game->host = $request->host;
        $game->guest = $request->guest;
        $game->day = $request->day;
        $game->timeResult = $request->timeResult;
        $game->week_id = $request->week_id;
        $game->save();

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
        $game = Game::find($id);
        $weeks = Week::all();
        return view ('games.edit', compact('game', 'weeks'));
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
            'host' => 'required',
            'guest' => 'required',
            'day' => 'required',
            'timeResult' => 'required',
            'week_id' => 'required|integer'
        ]);
        $game = Game::find($id);

        $game->host = $request->host;
        $game->guest = $request->guest;
        $game->day = $request->day;
        $game->timeResult = $request->timeResult;
        $game->week_id = $request->week_id;
        $game->save();

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
        $game = Game::find($id);
        $game->delete();
        return back();
    }
}
