<?php

namespace App\Http\Controllers;

use App\Models\Kajian;
use Illuminate\Http\Request;

class KajianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kajian.index');
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
    public function show(Kajian $kajian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kajian $kajian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kajian $kajian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kajian $kajian)
    {
        //
    }
}
