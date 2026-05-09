<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'accept_admin',
            'email' => 'admin@bucharestpride.ro',
            'password' => Hash::make('82Sx13<-64|\kK#S!)r'),
        ]);
    }
}
