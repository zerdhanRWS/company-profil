<?php

namespace App\Http\Controllers;

use App\Models\galery;
use App\Http\Requests\StoregaleryRequest;
use App\Http\Requests\UpdategaleryRequest;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galery = galery::all();
        return view('index', [
            'galery' => $galery
        ]);
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
     * @param  \App\Http\Requests\StoregaleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregaleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategaleryRequest  $request
     * @param  \App\Models\galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategaleryRequest $request, galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(galery $galery)
    {
        //
    }
}
