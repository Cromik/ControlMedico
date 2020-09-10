<?php

namespace App\Http\Controllers;

use App\Agendar;
use Illuminate\Http\Request;

class AgendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agenda.index')->with([
            'agendas'=> Agendar::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Agendar  $agendar
     * @return \Illuminate\Http\Response
     */
    public function show(Agendar $agendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agendar  $agendar
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendar $agendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agendar  $agendar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendar $agendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agendar  $agendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendar $agendar)
    {
        //
    }
}
