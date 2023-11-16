<?php

namespace App\Http\Controllers;

use App\Models\aid;
use Illuminate\Http\Request;

class AidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Financial Aid';
        return view('user.capital.aid', compact('pageTitle'));
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
    public function show(aid $aid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(aid $aid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, aid $aid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(aid $aid)
    {
        //
    }
}
