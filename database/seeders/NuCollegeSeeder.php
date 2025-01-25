<?php

namespace Database\Seeders;

use App\Models\NuCollege;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NuCollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json_data = file_get_contents(database_path('json/nu-colleges.json'));
        $data = json_decode($json_data, true);
        foreach ($data as $college) {
            $college_data['college_name'] = $college['college_name'];
            $college_data['college_code'] = $college['college_code'];
            $college_data['college_email'] = $college['email'];
            NuCollege::create($college_data);
        }
    }
}
