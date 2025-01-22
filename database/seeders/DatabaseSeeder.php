<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // User::factory(10)->create();

            $this->call(DivisionSeeder::class);
            $this->call(DistrictsSeeder::class);
            $this->call(UpazilasSeeder::class);
            $this->call(PostCodesSeeder::class);
            $this->call(SubjectsSeeder::class);


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        $role = Role::create(['name' => 'super-admin']);
        $user = User::find(1);
        // assign role to user
        $user->assignRole('super-admin');
    }
}
