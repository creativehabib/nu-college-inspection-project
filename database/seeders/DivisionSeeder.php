<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json_data = file_get_contents(database_path('json/divisions.json'));
        $data = json_decode($json_data, true);
        foreach ($data['divisions'] as $division) {
            $division_data['name'] = $division['name'];
            $division_data['bn_name'] = $division['bn_name'];
            $division_data['lat'] = $division['lat'];
            $division_data['long'] = $division['long'];
            Division::create($division_data);
        }
    }
}
