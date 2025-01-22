<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json_data = file_get_contents(database_path('json/districts.json'));
        $data = json_decode($json_data, true);
        foreach ($data['districts'] as $district) {
            $districts_data['division_id'] = $district['division_id'];
            $districts_data['name'] = $district['name'];
            $districts_data['bn_name'] = $district['bn_name'];
            $districts_data['lat'] = $district['lat'];
            $districts_data['long'] = $district['long'];
            District::create($districts_data);
        }
    }
}
