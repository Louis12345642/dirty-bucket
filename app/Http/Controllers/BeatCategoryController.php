<?php

namespace App\Http\Controllers;

use App\Models\BeatCategory;
use App\Http\Requests\StoreBeatCategoryRequest;
use App\Http\Requests\UpdateBeatCategoryRequest;

class BeatCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $test=BeatCategory::all();
    dd($test);

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
    public function store(StoreBeatCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BeatCategory $beatCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BeatCategory $beatCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeatCategoryRequest $request, BeatCategory $beatCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BeatCategory $beatCategory)
    {
        //
    }
}
