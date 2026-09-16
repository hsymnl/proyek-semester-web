<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Mahdi',
            'email' => 'user@growcare.com',
            'password' => Hash::make('12345678'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Dr. Grow Care',
            'email' => 'dokter@growcare.com',
            'password' => Hash::make('12345678'),
            'role' => 'dokter',
        ]);
    }
}