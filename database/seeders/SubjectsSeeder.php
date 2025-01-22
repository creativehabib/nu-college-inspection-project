<?php

namespace Database\Seeders;

use App\Models\NuSubject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json_data = file_get_contents(database_path('json/subjects.json'));
        $data = json_decode($json_data, true);
        foreach ($data['subjects'] as $subject) {
            $subject_data['name'] = $subject['name'];
            $subject_data['code'] = $subject['code'];
            NuSubject::create($subject_data);
        }
    }
}
