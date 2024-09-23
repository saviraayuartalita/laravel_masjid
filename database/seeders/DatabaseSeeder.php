<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create(attributes: [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password'=> Hash::make(value: 'admin123')
        ]);
    }
}
