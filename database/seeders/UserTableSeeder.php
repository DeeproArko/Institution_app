<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',

            ],
            //employee
            [
                'name' => 'Employee',
                'username' => 'employee',
                'email' => 'employee@example.com',
                'password' => Hash::make('111'),
                'role' => 'employee',
                'status' => 'active',

            ],
            //User
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@example.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => 'active',

            ]
            ]);
        
        
    }
}
