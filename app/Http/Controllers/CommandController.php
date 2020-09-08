<?php

namespace App\Http\Controllers;

use App\Command;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('commands');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Command $commands
     * @return Response
     */
    public function show(Command $commands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Command $commands
     * @return Response
     */
    public function edit(Command $commands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Command $commands
     * @return Response
     */
    public function update(Request $request, Command $commands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Command $commands
     * @return Response
     */
    public function destroy(Command $commands)
    {
        //
    }
}
