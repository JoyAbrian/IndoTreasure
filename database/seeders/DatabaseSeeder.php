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
            'birthdate' => '2004-04-15',
            'username' => 'dccal',
            'email' => 'pengagumrahasiaanda@gmail.com',
            'primary_phone_number' => '081352412134',
            'gender' => 'Male',
            'role' => 'admin',
            'password' => bcrypt('SorryYaAkuMabok')
        ]);

        User::create([
            'name' => 'Henokh Abhinaya Tjahjadi',
            'birthdate' => '2004-04-15',
            'username' => 'enoch',
            'email' => 'enochkunnnn@gmail.com',
            'primary_phone_number' => '081312412134',
            'gender' => 'Male',
            'role' => 'admin',
            'password' => bcrypt('SorryYaAkuMabok')
        ]);

        User::create([
            'name' => 'Mayko Raditya Wirawan',
            'birthdate' => '2004-04-15',
            'username' => 'h3nry',
            'email' => 'himpunanmodelahh@gmail.com',
            'primary_phone_number' => '081333212134',
            'gender' => 'Male',
            'role' => 'admin',
            'password' => bcrypt('SorryYaAkuMabok')
        ]);

        User::create([
            'name' => 'Muhammad Nabil Shadiq',
            'birthdate' => '2004-04-15',
            'username' => 'naaoi',
            'email' => 'naooiiselamanya@gmail.com',
            'primary_phone_number' => '081352455134',
            'gender' => 'Male',
            'role' => 'admin',
            'password' => bcrypt('SorryYaAkuMabok')
        ]);

        User::create([
            'name' => 'Muhammad Ilham Syahfithrah Hendra',
            'birthdate' => '2004-04-15',
            'username' => 'nito',
            'email' => 'nitonihbozzz@gmail.com',
            'primary_phone_number' => '081352412322',
            'gender' => 'Male',
            'role' => 'admin',
            'password' => bcrypt('SorryYaAkuMabok')
        ]);

        User::create([
            'name' => 'Andi Ahmad Salwan Farid',
            'birthdate' => '2004-04-15',
            'username' => 'sal1',
            'email' => 'thisiscogil@gmail.com',
            'primary_phone_number' => '081352412145',
            'gender' => 'Male',
            'role' => 'admin',
            'password' => bcrypt('SorryYaAkuMabok')
        ]);

        User::factory(23)->create();

    }
}