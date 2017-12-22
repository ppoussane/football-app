<?php

namespace App\Http\Controllers;

use App\Club;
use App\Cup;
use App\Player;
use App\Prize;
use App\Season;
use App\Title;
use Illuminate\Http\Request;

class TitlesController extends Controller
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
        $titles  = Title::all();
        $clubs   = Club::all();
        $players = Player::all();
        $seasons = Season::all();
        $cups    = Cup::all();

        return view('titles.create', compact('cups', 'players', 'seasons', 'clubs', 'titles'));
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
           'year'      => 'date|required',
           'club_id'   => 'required',
           'player_id' => 'required',
           'season_id' => 'required',
           'cup_id'    => 'required'
        ]);

        $titles = new Title();
        $titles->year      = $request->year;
        $titles->club_id   = $request->club_id;
        $titles->player_id = $request->player_id;
        $titles->season_id = $request->season_id;
        $titles->cup_id    = $request->cup_id;
        $cup_id            = $request->cup_id;
        $player_id         = $request->player_id;
        $season_id         = $request->season_id;

        $titles->save();

        $season = Season::find($season_id);
        $season->players()->sync($player_id);

        $cup = Cup::find($cup_id);
        $cup->players()->sync($player_id);

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
        $title = Title::find($id);
        $clubs = Club::all();
        $players = Player::all();
        $seasons = Season::all();
        $cups = Cup::all();

        return view('titles.edit', compact('cups', 'players', 'seasons', 'clubs', 'title'));
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
            'year'   => 'date|required',
            'club_id'   => 'required',
            'player_id' => 'required',
            'season_id' => 'required',
            'cup_id'    => 'required'
        ]);

        $title = Title::find($id);
        $title->year      = $request->year;
        $title->club_id   = $request->club_id;
        $title->player_id = $request->player_id;
        $title->season_id = $request->season_id;
        $title->cup_id    = $request->cup_id;
        $cup_id            = $request->cup_id;
        $player_id         = $request->player_id;

        $title->save();

        $cup = Cup::find($cup_id);
        $cup->players()->sync($player_id);

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
        //
    }
}
