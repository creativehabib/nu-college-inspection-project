<?php

namespace App\Http\Controllers;

use App\Models\CityCorporation;
use App\Models\District;
use App\Models\Division;
use App\Models\PostCode;
use App\Models\Union;
use App\Models\Upazila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JsonController extends Controller
{
    public function index()
    {
//        $divisions = Storage::json('divisions.json');
//        foreach ($divisions['divisions'] as $division) {
//            $division_data['name'] = $division['name'];
//            $division_data['bn_name'] = $division['bn_name'];
//            $division_data['lat'] = $division['lat'];
//            $division_data['long'] = $division['long'];
//            Division::create($division_data);
//        }
//        dd($divisions['divisions']);

//        $districts = Storage::json('districts.json');
//        foreach ($districts['districts'] as $district) {
//            $district_data['division_id'] = $district['division_id'];
//            $district_data['name'] = $district['name'];
//            $district_data['bn_name'] = $district['bn_name'];
//            $district_data['lat'] = $district['lat'];
//            $district_data['long'] = $district['long'];
//            District::create($district_data);
//        }
//        dd($districts['districts']);

//        $upazilas = Storage::json('upazilas.json');
//        foreach ($upazilas['upazilas'] as $upazila){
//            $upazila_data['district_id'] = $upazila['district_id'];
//            $upazila_data['name'] = $upazila['name'];
//            $upazila_data['bn_name'] = $upazila['bn_name'];
//            Upazila::create($upazila_data);
//        }
//        dd($upazilas['upazilas']);

//        $unions = Storage::json('unions.json');
//        foreach ($unions[2]['data'] as $union) {
//            $union_data['name'] = $union['name'];
//            $union_data['bn_name'] = $union['bn_name'];
//            $union_data['upazilla_id'] = $union['upazilla_id'];
//            $union_data['url'] = $union['url'];
//            Union::create($union_data);
//        }
//        dd($unions[2]['data']);

//        $postcodes = Storage::json('postcodes.json');
//        foreach ($postcodes['postcodes'] as $postcode) {
//            $postcode_data['division_id'] = $postcode['division_id'];
//            $postcode_data['district_id'] = $postcode['district_id'];
//            $postcode_data['upazila'] = $postcode['upazila'];
//            $postcode_data['postOffice'] = $postcode['postOffice'];
//            $postcode_data['postCode'] = $postcode['postCode'];
//            PostCode::create($postcode_data);
//        }
//        dd($postcodes['postcodes'][1012]);

        $dhakaCity = Storage::json('dhaka-city.json');
//        foreach ($dhakaCity['dhaka'] as $city) {
//            $city_data['division_id'] = $city['division_id'];
//            $city_data['district_id'] = $city['district_id'];
//            $city_data['city_corporation'] = $city['city_corporation'];
//            $city_data['name'] = $city['name'];
//            $city_data['bn_name'] = $city['bn_name'];
//            CityCorporation::create($city_data);
//        }
//        dd($dhakaCity['dhaka']);
    }
}
