<?php

namespace App\Http\Controllers;

use App\Models\analytics;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Analytics';
        return view('user.analytics', compact('pageTitle'));
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
    public function show(analytics $analytics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(analytics $analytics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, analytics $analytics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(analytics $analytics)
    {
        //
    }
}
