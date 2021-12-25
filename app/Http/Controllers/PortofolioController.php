<?php

namespace App\Http\Controllers;

use App\Models\portofolio;
use App\Http\Requests\StoreportofolioRequest;
use App\Http\Requests\UpdateportofolioRequest;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolio = Portofolio::all();
        return view('index', [
            'portofolio' => $portofolio
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
     * @param  \App\Http\Requests\StoreportofolioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreportofolioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateportofolioRequest  $request
     * @param  \App\Models\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateportofolioRequest $request, portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(portofolio $portofolio)
    {
        //
    }
}
