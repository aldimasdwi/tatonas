<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'SuperAdmin',
                'email' => 'superadmin@gmail.com',
                'role' => 'superadmin',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => Hash::make('12345678'),
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}






