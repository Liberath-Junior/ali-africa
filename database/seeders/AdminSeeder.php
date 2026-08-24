<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'full_name' => 'Ali Africa Admin',
            'email' => 'admin@aliafrica.com',
            'password_hash' => Hash::make('Admin@12345'),
            'is_active' => true,
        ]);
    }
}
