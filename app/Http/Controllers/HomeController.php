<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\NuCollege;
use App\Models\NuCourse;
use App\Models\NuProgram;
use App\Models\NuSubject;
use App\Models\PostCode;
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
        $nuColleges = NuCollege::where('status', 1)->get(['college_name', 'college_code', 'id']);
        return view('degree')->with(
            [
                'subjects' => $subjects,
                'courses' => $courses,
                'programs' => $programs,
                'divisions' => $divisions,
                'nuColleges' => $nuColleges
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

    // fetch postcodes
    public function fetchPostCode(Request $request)
    {
        $upazila = Upazila::find($request->id);
        $data['post_codes'] = PostCode::where('district_id', $upazila['district_id'])->get(['postCode', 'postOffice', 'upazila']);
        return response()->json($data);
    }

    // fetchCollegeCode
    public function fetchCollegeCode(Request $request)
    {
        $data['college_codes']= NuCollege::where('id', $request->id)->get();
        return response()->json($data);
    }

    // search college
    public function search(Request $request)
    {
        $colleges = NuCollege::where('college_name', 'LIKE', "%{$request->query}%")->get();
        return response()->json(['colleges' => $colleges]);
    }



}
