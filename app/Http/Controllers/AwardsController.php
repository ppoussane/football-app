<?php

namespace App\Http\Controllers;

use App\Award;
use App\Club;
use App\Player;
use App\Prize;
use App\Season;
use Illuminate\Http\Request;

class AwardsController extends Controller
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
        $awards = Award::all();
        $prizes = Prize::all();
        $players = Player::all();
        $seasons = Season::all();
        $clubs = Club::all();

        return view('awards.create', compact('prizes', 'players', 'seasons', 'clubs', 'awards'));
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
            'player_id' =>'required',
            'season_id' =>'required',
            'prize_id' =>'required',
            'club_id' =>'required',
        ]);


        $awards = new Award();
        $awards->player_id = $request->player_id;
        $awards->season_id = $request->season_id;
        $awards->club_id = $request->club_id;
        $awards->prize_id = $request->prize_id;
        $player_id = $request->player_id;
        $prize_id = $request->prize_id;

        $awards->save();

        $prize = Prize::find($prize_id);
        $prize->players()->sync($player_id);
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
        $award = Award::find($id);
        $prizes = Prize::all();
        $players = Player::all();
        $seasons = Season::all();
        $clubs = Club::all();

        return view('awards.edit', compact('prizes', 'players', 'seasons', 'clubs', 'award'));
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
            'player_id' =>'required',
            'season_id' =>'required',
            'prize_id' =>'required',
            'club_id' =>'required',
        ]);


        $awards = Award::find($id);
        $awards->player_id = $request->player_id;
        $awards->season_id = $request->season_id;
        $awards->club_id = $request->club_id;
        $awards->prize_id = $request->prize_id;
        $player_id = $request->player_id;
        $prize_id = $request->prize_id;

        $awards->save();

        $prize = Prize::find($prize_id);
        $prize->players()->atach($player_id);
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
        //$player_id = $id;
        //$prize_id = $id;
        //$prize = Prize::find($prize_id);
        //$prize->players()->detach($player_id);
        //$award = Award::find($id);
        //$award->delete();
        //return back();
    }
}
