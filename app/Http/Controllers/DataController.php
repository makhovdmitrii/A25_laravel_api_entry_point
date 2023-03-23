<?php

namespace App\Http\Controllers;

use App\Models\data;
use App\Models\Post;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
     *
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(data $data, $id = 0)
    {
        return view('data.show', ['data' => $id,]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(data $data)
    {
        //
    }
}
