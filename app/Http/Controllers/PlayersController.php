<?php

namespace App\Http\Controllers;

use App\Award;
use App\Club;
use App\Country;
use App\League;
use App\Player;
use App\Season;
use App\Stat;
use App\Title;
use App\Week;
use Illuminate\Http\Request;

class PlayersController extends Controller
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
        $players = Player::all();
        $countries = Country::all();
        return view ('players.create', compact('players', 'countries'));
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
            'name' => 'string',
            'image' => 'image',
            'height' => 'integer'
        ]);

        $players = new Player();
        $path = $request->image->store('images', 'public');

        $players->name = $request->name;
        $players->nicName = $request->nicName;
        $players->image = $path;
        $players->country_id = $request->country_id;
        $players->height = $request->height;
        $players->position = $request->position;
        $players->birthDate = $request->birthDate;

        $players->save();
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
        $player = Player::find($id);
        $leagues = League::all();
        $stats = Stat::with('player')->where('player_id','=',$id)->get();
        $awards = Award::with('player')->where('player_id', '=', $id)->get();
        $titles = Title::with('player')->where('player_id', '=', $id)->get();
        //$seasons = Season::with('player')->where('player_id', '=', $id)->get();
        return view ('players.show', compact('player', 'leagues', 'stats', 'awards', 'titles', 'seasons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);
        $countries = Country::all();
        return view ('players.edit', compact('player', 'countries'));
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
           'name' => 'string'
        ]);

        $player = Player::find($id);

        if ($request->hasFile('images')){
            $path = $request->image->store('images', 'public');
            $player->image = $path;
        }

        $player->name = $request->name;
        $player->nicName = $request->nicName;
        $player->country_id = $request->country_id;
        $player->height = $request->height;
        $player->position = $request->position;
        $player->birthDate = $request->birthDate;
        $player->save();
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
        $player = Player::find($id);

        $player->delete();
        return back();
    }
}
