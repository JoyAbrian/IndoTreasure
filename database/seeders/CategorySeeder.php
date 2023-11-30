<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Clothing And Apparel',
            'slug' => 'clothing',
            'description' => 'Mens Clothing,Womens Clothing, Kids Clothing, Shoes, and Accessories',
            'images' => 'img\for-seeder\categories\clothing.png'
        ]);

        Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'description' => 'Smartphone, Laptop, Computer, Audio, Headphone, Camera and Accessories',
            'images' => 'img\for-seeder\categories\electronic.png'
        ]);

        Category::create([
            'name' => 'Home and Furniture',
            'slug' => 'home-furniture',
            'description' => 'Furniture, Home Decor, Kitchen, And Bath',
            'images' => 'img\for-seeder\categories\home-furniture.png'
        ]);

        Category::create([
            'name' => 'Beauty and Personal Care',
            'slug' => 'beauty-care',
            'description' => 'Skincare, Makeup, Haircare, Personal Care',
            'images' => 'img\for-seeder\categories\beauty.png'
        ]);

        Category::create([
            'name' => 'Sports and Outdoors',
            'slug' => 'sports',
            'description' => 'Sport Equipment, Outdoor Gear, Activewear, And Camping',
            'images' => 'img\for-seeder\categories\sports.png'
        ]);

        Category::create([
            'name' => 'Books and Stationery',
            'slug' => 'books',
            'description' => 'Book, Office, Writing, And Art',
            'images' => 'img\for-seeder\categories\books.png'
        ]);

        Category::create([
            'name' => 'Toys and Games',
            'slug' => 'toy-games',
            'description' => 'Toys, Board Games, Video Games, And Outdoor Play',
            'images' => 'img\for-seeder\categories\toys.png'
        ]);

        Category::create([
            'name' => 'Health and Wellness',
            'slug' => 'health-wellness',
            'description' => 'Vitamins, Supplements, Fitness, And Devices',
            'images' => 'img\for-seeder\categories\health.png'
        ]);

        Category::create([
            'name' => 'Jewelry and Accessories',
            'slug' => 'jewelry-accessories',
            'description' => 'Jewelry, Watches, Bags, And Wallets',
            'images' => 'img\for-seeder\categories\jewelry.png'
        ]);

        Category::create([
            'name' => 'Automotive',
            'slug' => 'automotive',
            'description' => 'Car Accessories, Motorcycle, Tools, And Parts',
            'images' => 'img\for-seeder\categories\automotive.png'
        ]);

        Category::create([
            'name' => 'Pet Supplies',
            'slug' => 'pet-supply',
            'description' => 'Pet Food, Accesories, Grooming, And Toys',
            'images' => 'img\for-seeder\categories\pets.png'
        ]);

        Category::create([
            'name' => 'Travel and Luggage',
            'slug' => 'travel-luggage',
            'description' => 'Bags, Accesories, Clothing, And Gear',
            'images' => 'img\for-seeder\categories\travel.png'
        ]);

        Category::create([
            'name' => 'Gifts and Occasions',
            'slug' => 'gift-occasions',
            'description' => 'Gifts and Cards',
            'images' => 'img\for-seeder\categories\gift.png'
        ]);

        Category::create([
            'name' => 'Electrical Appliances',
            'slug' => 'electrical',
            'description' => 'Appliances and Smart Home Device',
            'images' => 'img\for-seeder\categories\appliances.png'
        ]);
    }
}
