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

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@test.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'Master Admin',
            'email' => 'master@test.com',
            'password' => bcrypt('password'),
            'role' => 'master'
        ]);

        User::factory()->create([
            'name' => 'Regular User',
            'email' => 'user@test.com',
            'password' => bcrypt('password'),
            'role' => 'user'
        ]);

        $this->call([
            PlanSeeder::class,
            DepositSettingSeeder::class,
        ]);
    }
}
