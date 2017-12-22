<?php

namespace App\Http\Controllers;

use App\Club;
use App\League;
use App\Player;
use App\Season;
use App\Stat;
use App\Week;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = Stat::all();
        return view ('layouts.middle', compact('stats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $players = Player::all();
        $leagues = League::all();
        $seasons = Season::all();
        $weeks = Week::all();
        $clubs = Club::all();
        return view ('stats.create', compact('players', 'leagues', 'seasons', 'weeks', 'clubs'));
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
            'player_id' => 'required',
            'club_id' => 'required',
            'goal' => 'integer',
            'head_goal' => 'integer',
            'penalty_goal' => 'integer',
            'right_foot_goal' => 'integer',
            'left_foot_goal' => 'integer',
            'yellow_card' => 'integer',
            'red_card' => 'integer',
            'faults_committed' => 'integer',
            'faults_won' => 'integer',
            'ball_recovered' => 'integer',
            'ball_given_away' => 'integer',
            'dribble' => 'integer',
            'pass' => 'integer',
            'assist' => 'integer',
            'shot' => 'integer',
        ]);

        $stats = new Stat();

        $stats->player_id = $request->player_id;
        $stats->club_id = $request->club_id;
        $stats->week_id = $request->week_id;
        $stats->season_id = $request->season_id;
        $stats->league_id = $request->league_id;
        $stats->goal = $request->goal;
        $stats->head_goal = $request->head_goal;
        $stats->penalty_goal = $request->penalty_goal;
        $stats->right_foot_goal = $request->right_foot_goal;
        $stats->left_foot_goal = $request->left_foot_goal;
        $stats->yellow_card = $request->yellow_card;
        $stats->red_card = $request->red_card;
        $stats->faults_committed = $request->faults_committed;
        $stats->faults_won = $request->faults_won;
        $stats->ball_recovered = $request->ball_recovered;
        $stats->ball_given_away = $request->ball_given_away;
        $stats->dribble = $request->dribble;
        $stats->pass = $request->pass;
        $stats->assist = $request->assist;
        $stats->shot = $request->shot;

        $club_id = $request->club_id;
        $player_id = $request->player_id;
        $season_id = $request->season_id;

        $stats->save();

        $club = Club::find($club_id);
        $club->players()->sync($player_id);

        $season = Season::find($season_id);
        $season->players()->sync($player_id);

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
