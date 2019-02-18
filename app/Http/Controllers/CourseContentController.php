<?php

namespace App\Http\Controllers;

use App\Model\CourseContent;
use Illuminate\Http\Request;
use App\Model\Course;
use App\Http\Resources\CourseContentResource;

class CourseContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        return CourseContentResource::collection($course->coursecontents);
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
     * @param  \App\Model\CourseContent  $courseContent
     * @return \Illuminate\Http\Response
     */
    public function show(CourseContent $courseContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\CourseContent  $courseContent
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseContent $courseContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\CourseContent  $courseContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseContent $courseContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\CourseContent  $courseContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseContent $courseContent)
    {
        //
    }
}
