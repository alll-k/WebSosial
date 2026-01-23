<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cek apakah admin sudah ada
        if (!User::where('email', 'admin@relawan.com')->exists()) {
            User::create([
                'name' => 'Admin Relawan',
                'email' => 'admin@relawan.com',
                'password' => Hash::make('admin123456'), // Ganti password sesuai kebutuhan
                'role' => 1, // Admin
            ]);
        }
    }
}
