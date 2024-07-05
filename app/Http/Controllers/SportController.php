<?php

namespace App\Http\Controllers;

use App\Models\sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sports =sport::all();
        $SportJson = $sports->toJson();
        return view('sports')->with('sports', $sports); 
        // return response()->json($SportJson);
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
     */
    public function show(sport $sport)
    {
        $sportjson = $sport->toJson();
        return view('sport')->with('sport' , $sport);
        // return response()->json($sportjson);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sport $sport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sport $sport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sport $sport)
    {
        //
    }
}
