<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Teddy Pascual',
            'role' => 'admin',
            'email' => 'ted@agri.com',
            'phone' => '09982409945',
            'password' => Hash::make('pass1234'),
        ]);
        User::factory()->create([
            'name' => 'Denmark Cube',
            'role' => 'farmer',
            'email' => 'den@agri.com',
            'phone' => '09123459223',
            'password' => Hash::make('pass1234'),
        ]);
        User::factory()->create([
            'name' => 'Darren Ventura',
            'role' => 'farmer',
            'email' => 'dar@agri.com',
            'phone' => '09434433212',
            'password' => Hash::make('pass1234'),
        ]);
        User::factory()->create([
            'name' => 'Angelica Pascual',
            'role' => 'consumer',
            'email' => 'lyka@agri.com',
            'phone' => '09501809299',
            'password' => Hash::make('pass1234'),
        ]);
    }
}
