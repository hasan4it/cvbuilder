<?php

namespace App\Http\Controllers;

use App\Models\Publications;
use Illuminate\Http\Request;

class PublicationsController extends Controller
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
        //
        return view('publications.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required',
            'forum' => 'required',
            'date' => 'required',
            'contribution' => 'required'
        ]);

        if(!$validation){
            return back()->withErrors('found some errors');
        }

        $publications = new Publications;

        $publications->title = $request->input('title');
        $publications->forum = $request->input('forum');
        $publications->contribution = $request->input('contribution');
        $publications->date = $request->input('date');
        $publications->description = $request->input('description');
        $publications->UserID = $request->user()->id;
        $publications->save();

        return redirect()->route('dashboard', ['message' => 'Publications saved successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publications  $publications
     * @return \Illuminate\Http\Response
     */
    public function show(Publications $publications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publications  $publications
     * @return \Illuminate\Http\Response
     */
    public function edit(Publications $publications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publications  $publications
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publications $publications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publications  $publications
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publications $publications)
    {
        //
    }
}
