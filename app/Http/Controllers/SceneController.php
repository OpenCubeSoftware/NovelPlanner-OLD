<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoresceneRequest;
use App\Http\Requests\UpdatesceneRequest;
use App\Models\scene;

class SceneController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresceneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresceneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\scene  $scene
     * @return \Illuminate\Http\Response
     */
    public function show(scene $scene)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\scene  $scene
     * @return \Illuminate\Http\Response
     */
    public function edit(scene $scene)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesceneRequest  $request
     * @param  \App\Models\scene  $scene
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesceneRequest $request, scene $scene)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\scene  $scene
     * @return \Illuminate\Http\Response
     */
    public function destroy(scene $scene)
    {
        //
    }
}
