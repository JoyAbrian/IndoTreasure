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
            'images' => 'clothing.png'
        ]);

        Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'description' => 'Smartphone, Laptop, Computer, Audio, Headphone, Camera and Accessories',
            'images' => 'electronic.png'
        ]);

        Category::create([
            'name' => 'Home and Furniture',
            'slug' => 'home-furniture',
            'description' => 'Furniture, Home Decor, Kitchen, And Bath',
            'images' => 'home-furniture.png'
        ]);

        Category::create([
            'name' => 'Beauty and Personal Care',
            'slug' => 'beauty-care',
            'description' => 'Skincare, Makeup, Haircare, Personal Care',
            'images' => 'beauty.png'
        ]);

        Category::create([
            'name' => 'Sports and Outdoors',
            'slug' => 'sports',
            'description' => 'Sport Equipment, Outdoor Gear, Activewear, And Camping',
            'images' => 'sports.png'
        ]);

        Category::create([
            'name' => 'Books and Stationery',
            'slug' => 'books',
            'description' => 'Book, Office, Writing, And Art',
            'images' => 'books.png'
        ]);

        Category::create([
            'name' => 'Toys and Games',
            'slug' => 'toy-games',
            'description' => 'Toys, Board Games, Video Games, And Outdoor Play',
            'images' => 'toys.png'
        ]);

        Category::create([
            'name' => 'Health and Wellness',
            'slug' => 'health-wellness',
            'description' => 'Vitamins, Supplements, Fitness, And Devices',
            'images' => 'health.png'
        ]);

        Category::create([
            'name' => 'Jewelry and Accessories',
            'slug' => 'jewelry-accessories',
            'description' => 'Jewelry, Watches, Bags, And Wallets',
            'images' => 'jewelry.png'
        ]);

        Category::create([
            'name' => 'Automotive',
            'slug' => 'automotive',
            'description' => 'Car Accessories, Motorcycle, Tools, And Parts',
            'images' => 'automotive.png'
        ]);

        Category::create([
            'name' => 'Pet Supplies',
            'slug' => 'pet-supply',
            'description' => 'Pet Food, Accesories, Grooming, And Toys',
            'images' => 'pets.png'
        ]);

        Category::create([
            'name' => 'Travel and Luggage',
            'slug' => 'travel-luggage',
            'description' => 'Bags, Accesories, Clothing, And Gear',
            'images' => 'travel.png'
        ]);

        Category::create([
            'name' => 'Gifts and Occasions',
            'slug' => 'gift-occasions',
            'description' => 'Gifts and Cards',
            'images' => 'gift.png'
        ]);

        Category::create([
            'name' => 'Electrical Appliances',
            'slug' => 'electrical',
            'description' => 'Appliances and Smart Home Device',
            'images' => 'appliances.png'
        ]);
    }
}
