<?php

namespace App\Http\Controllers;

use App\Country;
use App\Player;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        $countries = Country::all();

        return view('demo.index', compact('countries'));
    }

    public function players()
    {
        return Player::with('country')->get();
    }

    public function player(Request $request)
    {
        $inputs = $this->validate($request, [
            'name' => 'required|string|unique:players,name',
            'nicName' => 'required|string',
            'birthDate' => 'required|date',
            'position' => 'required|string',
            'height' => 'required|integer',
            'country_id' => 'required|exists:countries,id',
            'image' => 'required|image',
        ]);

        $path = $request->file('image')->store('images', 'public');

        $player = Player::create($inputs);
        $player->image = $path;
        $player->save();

        return $player->load('country');
    }

    public function test()
    {
        return view('demo.test');
    }
}
