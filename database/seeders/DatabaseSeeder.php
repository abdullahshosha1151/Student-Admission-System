<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(GovernorateSeeder::class);
        $this->call(ProgramRequirementSeeder::class);
        $this->call(FaculitySeeder::class);
        // Define the password once
        $password = Hash::make('123456');

        // Create users with the factory
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => $password,
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'Mohammed',
            'email' => 'youssef.omara.2112008@gmail.com',
            'password' => $password,
            'role' => 'user'
        ]);
    }
}
