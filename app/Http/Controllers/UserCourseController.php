<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\UserCourse;
use Illuminate\Http\Request;
use App\Http\Resources\User\UserCourseResource;

class UserCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return new UserCourseResource($user);
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
     * @param  \App\Model\UserCourse  $userCourse
     * @return \Illuminate\Http\Response
     */
    public function show(UserCourse $userCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\UserCourse  $userCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCourse $userCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\UserCourse  $userCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserCourse $userCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\UserCourse  $userCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCourse $userCourse)
    {
        //
    }
}
