<?php

namespace App\Http\Controllers;

use App\Models\NuCollege;
use Illuminate\Http\Request;

class NuCollegeController extends Controller
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
     */
    public function show(NuCollege $nuCollege)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NuCollege $nuCollege)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NuCollege $nuCollege)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NuCollege $nuCollege)
    {
        //
    }

    // nu college fetch
    public function fetchNuCollege(Request $request)
    {
        $data['nuColleges'] = NuCollege::where('division_id', $request->division_id)
            ->where('district_id', $request->district_id)
            ->where('upazila_id', $request->upazila_id)
            ->where('union_id', $request->union_id)
            ->where('post_code_id', $request->post_code_id)
            ->get(['college_name', 'id']);
        return response()->json($data);
    }
}
