<?php

namespace App\Http\Controllers;

use App\Models\CourseController;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.fans');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseController $courseController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseController $courseController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseController $courseController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseController $courseController)
    {
        //
    }
}
