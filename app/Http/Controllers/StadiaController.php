<?php

namespace App\Http\Controllers;

use App\Club;
use App\Stadium;

use Illuminate\Http\Request;

class StadiaController extends Controller
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
        $stadiums = Stadium::all();
        $clubs = Club::all();
        return view('stadiums.create', compact('stadiums', 'clubs'));
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
           'name' => 'required|string',
            'club_id' => 'required'
        ]);

        $path = $request->image->store('images', 'public');

        $stadiums = new Stadium();
        $stadiums->name = $request->name;
        $stadiums->club_id = $request->club_id;
        $stadiums->capacity = $request->capacity;
        $stadiums->city = $request->city;
        $stadiums->image = $path;

        $stadiums->save();
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
        $stadium = Stadium::find($id);
        $clubs = Club::all();
        return view('stadiums.edit', compact('stadium', 'clubs'));
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
            'name' => 'required|string',
            'club_id' => 'required'
        ]);

        $stadium = Stadium::find($id);
        $stadium->name = $request->name;
        $stadium->club_id = $request->club_id;
        $stadium->capacity = $request->capacity;
        $stadium->city = $request->city;
        if ($request->hasFile('image')) {
            $path = $request->image->store('images', 'public');
            $stadium->image = $path;
        }
        $stadium->save();
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
