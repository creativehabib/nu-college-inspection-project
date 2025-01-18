<?php

namespace App\Http\Controllers;

use App\Models\NuSubject;
use Illuminate\Http\Request;

class NuSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all subjects with pagination & index view
        $subjects = NuSubject::latest()->paginate(5);
        return view('nu.nu-subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Create subject view
        return view('nu.nu-subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required',
            'code' => 'string|unique:nu_subjects,code',
        ]);
        // 100+ continue number
        $subjectCode = 'SUB'.'-'. str_pad(NuSubject::count() + 1, 4, '0', STR_PAD_LEFT);
        // Store data
        NuSubject::create(
            [
                'name' => $request->name,
                'code' => $subjectCode
            ]
        );

        // Redirect to index view
        return redirect()->route('nu-subject.index')
            ->with('success', 'Subject created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(NuSubject $nuSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NuSubject $nuSubject)
    {
        // Edit subject view
        return view('nu.nu-subject.edit', compact('nuSubject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NuSubject $nuSubject)
    {
        // Validate request
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'credit' => 'required',
            'status' => 'required',
        ]);

        // Update data
        $nuSubject->update($request->all());

        // Redirect to index view
        return redirect()->route('nu-subject.index')
            ->with('success', 'Subject updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NuSubject $nuSubject)
    {
        // Delete subject
        $nuSubject->delete();

        // Redirect to index view
        return redirect()->route('nu-subject.index')
            ->with('success', 'Subject deleted successfully.');
    }

    /**
     * Update the status of the specified resource.
     */
    public function updateStatus(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:nu_subjects,id',
            'status' => 'required|boolean',
        ]);

        $subject = NuSubject::findOrFail($request->id);
        $subject->status = $request->status;
        $subject->save();

        return response()->json(['success' => 'Status updated successfully!']);
    }

}
