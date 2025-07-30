<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'zaidkhan200912@gmail.com',
            'password' => Hash::make('admin123'),
            'is_admin' => true,
        ]);
    }
}
