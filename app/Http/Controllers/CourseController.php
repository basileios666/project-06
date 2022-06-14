<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        
    }

    
    public function create()
    {
        return view('pages.create_course');
    }

  
    public function store(Request $request)
    {
        $course = Course::create($request->all());
        return redirect('create_course')->with('message','course added successfully!');
    }

   
    public function show(Course $course)
    {
        //
    }

    
    public function edit(Course $course)
    {
        //
    }

    public function update(Request $request, Course $course)
    {
        //
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return view('pages.home');
    }
}
