<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'nama'=> 'Administrator',
            'email'=> 'admin@gmail.com',
            'role'=> '1',
            'status'=> 1,
            'hp'=> '0812345678901',
            'password'=> bcrypt('Password'),
        ]);
        User::factory()->create([
            'nama'=> 'Xanny',
            'email'=> 'Xanny@gmail.com',
            'role'=> '0',
            'status'=> 1,
            'hp'=> '1234567890',
            'password'=> bcrypt('Password'),
        ]);
    }
}