<?php

namespace Database\Seeders;

use App\Models\PostCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json_data = file_get_contents(database_path('json/postcodes.json'));
        $data = json_decode($json_data, true);
        foreach ($data['postcodes'] as $postcode) {
            $postcode_data['division_id'] = $postcode['division_id'];
            $postcode_data['district_id'] = $postcode['district_id'];
            $postcode_data['postCode'] = $postcode['postCode'];
            $postcode_data['postOffice'] = $postcode['postOffice'];
            $postcode_data['upazila'] = $postcode['upazila'];
            PostCode::create($postcode_data);
        }
    }
}
