<?php

namespace App\Http\Controllers;

use App\Models\CourseProgress;
use App\Http\Requests\StoreCourseProgressRequest;
use App\Http\Requests\UpdateCourseProgressRequest;

class CourseProgressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseProgressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseProgress $courseProgress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseProgress $courseProgress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseProgressRequest $request, CourseProgress $courseProgress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseProgress $courseProgress)
    {
        //
    }
}
