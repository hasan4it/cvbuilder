<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
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
     * @return \Illuminate\View\View
     */
    public function create()
    {
        //
        return view('education.add');
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
            'institute' => 'required',
            'start_date' => 'required',
            'status' => 'required',
            'description' => 'required'
        ]);

        if(!$validation){
            return back()->withErrors('found some errors');
        }

        $edu = new Education;

        $edu->title = $request->input('title');
        $edu->institute = $request->input('institute');
        $edu->start_date = $request->input('start_date');
        $edu->end_date = $request->input('end_date');
        $edu->description = $request->input('description');
        $edu->status = $request->input('status');
        $edu->award = $request->input('obtained_marks');
        $edu->UserID = $request->user()->id;
        $edu->save();

        return redirect()->route('dashboard', ['message' => 'Education record saved successfully!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
    }
}
