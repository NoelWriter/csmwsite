<?php

namespace App\Http\Controllers;

use App\Command;
use Illuminate\Http\Request;

class CommandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view('commands');
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
     * @param  \App\Command  $commands
     * @return \Illuminate\Http\Response
     */
    public function show(Command $commands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Command  $commands
     * @return \Illuminate\Http\Response
     */
    public function edit(Command $commands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Command  $commands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Command $commands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Command  $commands
     * @return \Illuminate\Http\Response
     */
    public function destroy(Command $commands)
    {
        //
    }
}
