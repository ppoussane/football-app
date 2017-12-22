<?php

namespace App\Http\Controllers;

use App\Club;
use App\League;
use App\Season;
use App\Week;
use Illuminate\Http\Request;
use App\Statistic;

class StatisticsController extends Controller
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
        $statistics = Statistic::all();
        $clubs= Club::all();
        $leagues = League::all();
        $weeks = Week::all();
        $seasons = Season::all();
        return view('statistics.create', compact('statistics', 'clubs', 'leagues', 'weeks', 'seasons'));
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
            'club_id' => 'required',
            'week_id' => 'required',
            'season_id' => 'required',
            'league_id' => 'required',
            'game' => 'integer|required'
        ]);

        $statistics = new Statistic();
        $statistics->club_id = $request->club_id;
        $statistics->week_id = $request->week_id;
        $statistics->season_id = $request->season_id;
        $statistics->league_id = $request->league_id;
        $statistics->game = $request->game;
        $statistics->save();
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
        $statistic = Statistic::find($id);
        $clubs= Club::all();
        $leagues = League::all();
        $weeks = Week::all();
        $seasons = Season::all();
        return view('statistics.edit', compact('statistic', 'clubs', 'leagues', 'weeks', 'seasons'));
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
            'club_id' => 'required',
            'week_id' => 'required',
            'season_id' => 'required',
            'league_id' => 'required',
            'game' => 'integer|required'
        ]);

        $statistic = Statistic::find($id);
        $statistic->club_id = $request->club_id;
        $statistic->week_id = $request->week_id;
        $statistic->season_id = $request->season_id;
        $statistic->league_id = $request->league_id;
        $statistic->game = $request->game;
        $statistic->save();
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
        $statistic = Statistic::find($id);
        $statistic->delete();
        return back();
    }
}
