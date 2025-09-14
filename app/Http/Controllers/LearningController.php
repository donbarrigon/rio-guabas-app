<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelearningRequest;
use App\Http\Requests\UpdatelearningRequest;
use App\Models\Learning;

class LearningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('learning.index');
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
    public function store(StorelearningRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Learning $learning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Learning $learning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatelearningRequest $request, learning $learning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Learning $learning)
    {
        //
    }
}
