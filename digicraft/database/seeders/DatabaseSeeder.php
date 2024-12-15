<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'nabila',
            'email' => 'nabila@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'aihaf',
            'email' => 'aihaf@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('12345678'),
        ]);
    }
}
