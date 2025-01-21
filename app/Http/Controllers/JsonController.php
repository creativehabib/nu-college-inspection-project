<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\Union;
use App\Models\Upazila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JsonController extends Controller
{
    public function index()
    {
//        $districts = Storage::json('districts.json');
//        $divisions = Storage::json('divisions.json');
//        foreach ($divisions[2]['data'] as $division) {
//            $division_data['name'] = $division['name'];
//            $division_data['bn_name'] = $division['bn_name'];
//            $division_data['url'] = $division['url'];
//            Division::create($division_data);
//        }

//        foreach ($districts[2]['data'] as $district) {
//            $district_data['name'] = $district['name'];
//            $district_data['bn_name'] = $district['bn_name'];
//            $district_data['division_id'] = $district['division_id'];
//            $district_data['lat'] = $district['lat'];
//            $district_data['lon'] = $district['lon'];
//            $district_data['url'] = $district['url'];
//            District::create($district_data);
//        }
//        $upazilas = Storage::json('upazilas.json');
//        foreach ($upazilas[2]['data'] as $upazila) {
//            $upazila_data['name'] = $upazila['name'];
//            $upazila_data['bn_name'] = $upazila['bn_name'];
//            $upazila_data['district_id'] = $upazila['district_id'];
//            $upazila_data['url'] = $upazila['url'];
//            Upazila::create($upazila_data);
//        }
//        $unions = Storage::json('unions.json');
//        foreach ($unions[2]['data'] as $union) {
//            $union_data['name'] = $union['name'];
//            $union_data['bn_name'] = $union['bn_name'];
//            $union_data['upazilla_id'] = $union['upazilla_id'];
//            $union_data['url'] = $union['url'];
//            Union::create($union_data);
//        }
//        dd($unions[2]['data']);
    }
}
