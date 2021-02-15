<?php

namespace App\Http\Controllers;

use App\Models\Arrow;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ArrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('arrow_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $arrows = Arrow::all();

        return view('arrow.index', compact('arrows'));
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
     * @param  \App\Models\Arrow  $arrow
     * @return \Illuminate\Http\Response
     */
    public function show(Arrow $arrow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arrow  $arrow
     * @return \Illuminate\Http\Response
     */
    public function edit(Arrow $arrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arrow  $arrow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arrow $arrow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arrow  $arrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arrow $arrow)
    {
        //
    }
}
