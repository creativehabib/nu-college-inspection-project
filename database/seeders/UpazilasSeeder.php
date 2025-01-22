<?php

namespace Database\Seeders;

use App\Models\Upazila;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpazilasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json_data = file_get_contents(database_path('json/upazilas.json'));
        $data = json_decode($json_data, true);
        foreach ($data['upazilas'] as $upazila) {
            $upazila_data['district_id'] = $upazila['district_id'];
            $upazila_data['name']        = $upazila['name'];
            $upazila_data['bn_name']     = $upazila['bn_name'];
            Upazila::create($upazila_data);
        }
    }
}
