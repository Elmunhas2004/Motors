<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;               
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = 'motorssite2025@gmail.com';
        $password = 'admin2025';

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => 'Administrador do Sistema',
                'password' => Hash::make($password),
                'email_verified_at' => now(),
            ]
        );
    }
}
