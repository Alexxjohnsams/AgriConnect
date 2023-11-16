<?php

namespace App\Http\Controllers;

use App\Models\userprofile;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Samson John';
        return view('user.userprofile', compact('pageTitle'));
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
    public function show(userprofile $userprofile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(userprofile $userprofile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, userprofile $userprofile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(userprofile $userprofile)
    {
        //
    }
}
