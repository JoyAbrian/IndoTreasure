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
        $this->call([
            UserSeeder::class,
            AlamatSeeder::class,
            CartSeeder::class,
            CategorySeeder::class,
            PaymentsSeeder::class,
            ProductsSeeder::class,
            SellerSeeder::class,
            TopUpCategorySeeder::class,
            TopUpSeeder::class,
            WishlistSeeder::class
        ]);
    }
}