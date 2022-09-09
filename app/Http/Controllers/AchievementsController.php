<?php

namespace App\Http\Controllers;

use App\Models\Achievements;
use Illuminate\Http\Request;

class AchievementsController extends Controller
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
        return view('achievements.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validation = $request->validate([
            'title' => 'required',
            'field' => 'required',
            'date' => 'required',
            'contribution' => 'required'
        ]);

        if(!$validation){
            return back()->withErrors('found some errors');
        }

        $achievement = new Achievements;

        $achievement->title = $request->input('title');
        $achievement->field = $request->input('field');
        $achievement->contribution = $request->input('contribution');
        $achievement->date = $request->input('date');
        $achievement->description = $request->input('description');
        $achievement->UserID = $request->user()->id;
        $achievement->save();

        return redirect()->route('dashboard', ['message' => 'Achievements saved successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achievements  $achievements
     * @return \Illuminate\Http\Response
     */
    public function show(Achievements $achievements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achievements  $achievements
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievements $achievements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achievements  $achievements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achievements $achievements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achievements  $achievements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievements $achievements)
    {
        //
    }
}
