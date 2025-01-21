<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\NuCourse;
use App\Models\NuProgram;
use App\Models\NuSubject;
use App\Models\Union;
use App\Models\Upazila;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $subjects = NuSubject::all()->where('status', 1);
        $courses = NuCourse::all()->where('status', 1);
        $programs = NuProgram::all()->where('status', 1);
        $divisions = Division::get(["name", "id"]);
        return view('degree')->with(
            [
                'subjects' => $subjects,
                'courses' => $courses,
                'programs' => $programs,
                'divisions' => $divisions
            ]
        );
    }

    // fetch District
    public function fetchDistrict(Request $request)
    {
        $data['districts']= District::where('division_id', $request->division_id)->get(['name', 'id']);
        return response()->json($data);
    }

    // fetch Upazila
    public function fetchUpazila(Request $request)
    {
        $data['upazilas'] = Upazila::where('district_id', $request->district_id)->get(['name', 'id']);
        return response()->json($data);
    }

    // fetch Union
    public function fetchUnion(Request $request)
    {
        $data['unions'] = Union::where('upazilla_id', $request->upazilla_id)->get(['name', 'id']);
        return response()->json($data);
    }
}
