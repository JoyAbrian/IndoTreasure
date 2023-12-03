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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Joy Abrian Rantepasang',
            'birthdate' => '2004-10-05',
            'username' => 'stupidImpostor',
            'email' => 'joyabrianrantepasang14@gmail.com',
            'primary_phone_number' => '081356621029',
            'gender' => 'Male',
            'role' => 'super-admin',
            'password' => bcrypt('ZFED5u3QN9x7ykwzqA4s8W')
        ]);

        User::create([
            'name' => 'Andi Muh. Haikal Lukman',
            'birthdate' => '',
            'username' => 'dccal',
            'email' => '',
            'primary_phone_number' => '',
            'gender' => '',
            'role' => 'admin',
            'password' => bcrypt('')
        ]);

        User::create([
            'name' => 'Henokh Abhinaya Tjahjadi',
            'birthdate' => '',
            'username' => 'enoch',
            'email' => '',
            'primary_phone_number' => '',
            'gender' => '',
            'role' => 'admin',
            'password' => bcrypt('')
        ]);

        User::create([
            'name' => 'Mayko Raditya Wirawan',
            'birthdate' => '',
            'username' => 'h3nry',
            'email' => '',
            'primary_phone_number' => '',
            'gender' => '',
            'role' => 'admin',
            'password' => bcrypt('')
        ]);

        User::create([
            'name' => 'Muhammad Nabil Shadiq',
            'birthdate' => '',
            'username' => 'naaoi',
            'email' => '',
            'primary_phone_number' => '',
            'gender' => '',
            'role' => 'admin',
            'password' => bcrypt('')
        ]);

        User::create([
            'name' => 'Muhammad Ilham Syahfithrah Hendra',
            'birthdate' => '',
            'username' => 'nito',
            'email' => '',
            'primary_phone_number' => '',
            'gender' => '',
            'role' => 'admin',
            'password' => bcrypt('')
        ]);

        User::create([
            'name' => 'Andi Ahmad Salwan Farid',
            'birthdate' => '',
            'username' => 'sal1',
            'email' => '',
            'primary_phone_number' => '',
            'gender' => '',
            'role' => 'admin',
            'password' => bcrypt('')
        ]);

        User::factory(23)->create();

    }
}