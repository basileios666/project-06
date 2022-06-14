<?php

namespace App\Http\Controllers;

use App\Models\mentor_request;
use Illuminate\Http\Request;
use App\Models\User;

class MentorRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('admin.mentors',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mentor_request  $mentor_request
     * @return \Illuminate\Http\Response
     */
    public function show(mentor_request $mentor_request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mentor_request  $mentor_request
     * @return \Illuminate\Http\Response
     */
    public function edit(mentor_request $mentor_request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mentor_request  $mentor_request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mentor_request $mentor_request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mentor_request  $mentor_request
     * @return \Illuminate\Http\Response
     */
    public function destroy($mentor_request)
    {
        $m = User::find($mentor_request);
        $m->delete();
        return redirect()->back()->with('status', 'Mentor Deleted Successfully');
   
    }
}
