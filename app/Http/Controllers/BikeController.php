<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //bike.index意思是: views裡面的bike資料夾裡面的index.blade.php
       return view('bike.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        return view('bike.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return view('bike.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('bike.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
