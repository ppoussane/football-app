<?php

namespace App\Http\Controllers;

use App\Cup;
use Illuminate\Http\Request;

class CupsController extends Controller
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
        $cups = Cup::all();
        return view('cups.create', compact('cups'));
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
        ]);
        $path = $request->image->store('images', 'public');

        $cup = new Cup();

        $cup->name = $request->name;
        $cup->image = $path;
        $cup->save();
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
        $cup = Cup::find($id);
        return view('cups.edit', compact('cup'));
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
        $inputs = $this->validate($request,[
            'name' => 'string',
        ]);

        $cup = Cup::find($id);
        $cup->name = $inputs['name'];

        if ($request->hasFile('image')) {
            $path = $request->image->store('images', 'public');
            $cup->image = $path;
        }
        $cup->save();
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
        $cup = Cup::find($id);
        $cup->delete();
        return back();
    }
}
