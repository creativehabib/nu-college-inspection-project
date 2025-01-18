<?php

namespace App\Http\Controllers;

use App\Models\NuCourse;
use App\Models\NuProgram;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NuCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all courses with pagination & index view
        $courses = NuCourse::latest()->paginate(5);
        return view('nu.nu-course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // program query
        $programs = NuProgram::where('status', 1)->get();
        return view('nu.nu-course.create', compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, NuCourse $course)
    {
        // Validate request
        $request->validate([
            'name' => [
                'required',
                Rule::unique('nu_courses')->where(function ($query) use ($request) {
                    return $query->where('type', $request->program_id);
                }),
            ],
            'program_id' => 'required|exists:nu_programs,id',
        ], [
            'name.unique' => 'The course name is already assigned to this program.',
        ]);
        // Auto Generate course code 1-3 number
        $courseCode = rand(100, 999);

        // Store data
        NuCourse::create([
            'name' => $request->name,
            'code' => $courseCode,
            'type' => $request->program_id,
        ]);

        // Redirect to index view
        return redirect()->route('nu-course.index')
            ->with('success', 'Course created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(NuCourse $nuCourse)
    {
        // Show view
        return view('nu.nu-course.show', compact('nuCourse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NuCourse $nuCourse)
    {
        // program query
        $programs = NuProgram::where('status', 1)->get();
        return view('nu.nu-course.edit', compact('nuCourse', 'programs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NuCourse $nuCourse)
    {
        // Validate request
        $request->validate([
            'name' => 'required',
            'program_id' => 'required'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NuCourse $nuCourse)
    {
        // Nu delete program
        $nuCourse->delete();

        return redirect()->route('nu-course.index')
            ->with('success', 'Course deleted successfully');
    }

    /**
     * Update course status
     */
    public function updateStatus(Request $request)
    {
        // Update course status
        $course = NuCourse::find($request->id);
        $course->status = $request->status;
        $course->save();

        return response()->json(['success' => 'Status updated successfully']);
    }
}
