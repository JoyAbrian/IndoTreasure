<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seller::create([
            'name' => 'Fantech Official Store',
            'slug' => 'fantechstore',
            'bio' => 'Fantech Official Store Resmi Brand Fantech | Garansi Resmi Fantech www.fantech.id Customer Care WA : 081119094439',
            'address' => 'Jakarta Barat',
            'email' => 'marketingfantech@gmail.com',
            'phone_number' => '081119094439'
        ]);

        Seller::create([
            'name' => '',
            'slug' => '',
            'bio' => '',
            'address' => '',
            'email' => '',
            'phone_number' => ''
        ]);

        Seller::create([
            'name' => '',
            'slug' => '',
            'bio' => '',
            'address' => '',
            'email' => '',
            'phone_number' => ''
        ]);
    }
}
