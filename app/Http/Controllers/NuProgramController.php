<?php

namespace App\Http\Controllers;

use App\Models\NuProgram;
use Illuminate\Http\Request;

class NuProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Nu get program with pagination & index view
        $programs = NuProgram::latest()->paginate(4);
        return view('nu.nu-program.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Nu create program view
        return view('nu.nu-program.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Nu store program
        $request->validate([
            'name' => 'required',
        ]);

        NuProgram::create($request->all());

        return redirect()->route('nu-program.index')
            ->with('success', 'Program created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(NuProgram $nuProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NuProgram $nuProgram)
    {
        // Nu edit program view
        return view('nu.nu-program.edit', compact('nuProgram'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NuProgram $nuProgram)
    {
        // Nu update program
        $request->validate([
            'name' => 'required',
        ]);

        $nuProgram->update($request->all());

        return redirect()->route('nu-program.index')
            ->with('success', 'Program updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NuProgram $nuProgram)
    {
        // Nu delete program
        $nuProgram->delete();

        return redirect()->route('nu-program.index')
            ->with('success', 'Program deleted successfully');
    }

    /**
     * Update program status
     */
    public function updateStatus(Request $request)
    {
        // Nu update program status
        $program = NuProgram::find($request->id);
        $program->status = $request->status;
        $program->save();

        return response()->json(['success' => 'Status updated successfully']);
    }
}
