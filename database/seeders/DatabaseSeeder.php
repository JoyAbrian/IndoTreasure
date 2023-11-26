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
            'username' => '@stupidImpostor',
            'photo' => 'img/yg-sa-sa-aja.gif',
            'email' => 'joyabrianrantepasang14@gmail.com',
            'phone_number' => '081356621029',
            'gender' => 'male',
            'street' => 'Antang',
            'city' => 'Makassar',
            'state' => 'Indonesia',
            'postal_code' => '90235',
            'role' => 'super-admin',
            'password' => bcrypt('ZFED5u3QN9x7ykwzqA4s8W')
        ]);

        User::create([
            'name' => 'Khaeruozikkin',
            'username' => '@erulzzw69',
            'email' => 'Khaeruozikkin@yahoo.com',
            'role' => 'admin',
            'password' => bcrypt('JegelKom')
        ]);

        User::create([
            'name' => 'Muh. Ilham Syafitra Hendra',
            'username' => '@senpaiIlham',
            'email' => 'senpaikunn@yahoo.com',
            'role' => 'admin',
            'password' => bcrypt('NitoKun1167')
        ]);

        User::create([
            'name' => 'Andi Muh. Haikal Lukman',
            'username' => '@dccal',
            'email' => 'haikallukman@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('dccalForever')
        ]);
    }
}