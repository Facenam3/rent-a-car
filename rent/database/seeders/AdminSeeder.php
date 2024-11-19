<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'John',
            'Surname' => 'Doe',
            'email' => "admin@example.com",
            'password' => Hash::make('Admin123'),
            'type' => "admin"
        ]);
    }
}