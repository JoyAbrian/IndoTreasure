<?php

namespace Database\Seeders;

use App\Models\TopUpCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopUpCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopUpCategory::create([
            'name' => 'Paket Data',
            'slug' => 'paket-data',
        ]);

        TopUpCategory::create([
            'name' => 'Pulsa',
            'slug' => 'pulsa',
        ]);

        TopUpCategory::create([
            'name' => 'Paket Telepon',
            'slug' => 'paket-telepon',
        ]);

        TopUpCategory::create([
            'name' => 'Roaming',
            'slug' => 'roaming',
        ]);

        TopUpCategory::create([
            'name' => 'Mobile Legends',
            'slug' => 'mobile-legends',
        ]);

        TopUpCategory::create([
            'name' => 'Free Fire',
            'slug' => 'free-fire',
        ]);

        TopUpCategory::create([
            'name' => 'PUBG',
            'slug' => 'pubg',
        ]);

        TopUpCategory::create([
            'name' => 'Point Blank',
            'slug' => 'point-blank',
        ]);

        TopUpCategory::create([
            'name' => 'Minecraft',
            'slug' => 'minecraft',
        ]);

        TopUpCategory::create([
            'name' => 'eFootball 2024',
            'slug' => 'efootball',
        ]);

        TopUpCategory::create([
            'name' => 'Steam',
            'slug' => 'steam',
        ]);

        TopUpCategory::create([
            'name' => 'PlayStation',
            'slug' => 'playstation',
        ]);

        TopUpCategory::create([
            'name' => 'Dana',
            'slug' => 'dana',
        ]);

        TopUpCategory::create([
            'name' => 'GoPay',
            'slug' => 'gopay',
        ]);

        TopUpCategory::create([
            'name' => 'OVO',
            'slug' => 'ovo',
        ]);

        TopUpCategory::create([
            'name' => 'ShopeePay',
            'slug' => 'shopeepay',
        ]);

        TopUpCategory::create([
            'name' => 'Netflix',
            'slug' => 'netflix',
        ]);

        TopUpCategory::create([
            'name' => 'Disney+ Hotstar',
            'slug' => 'disney',
        ]);

        TopUpCategory::create([
            'name' => 'Spotify',
            'slug' => 'spotify',
        ]);

        TopUpCategory::create([
            'name' => 'Kredit',
            'slug' => 'kredit',
        ]);

        TopUpCategory::create([
            'name' => 'Asuransi',
            'slug' => 'asuransi',
        ]);

        TopUpCategory::create([
            'name' => 'PDAM',
            'slug' => 'pdam',
        ]);

        TopUpCategory::create([
            'name' => 'Internet',
            'slug' => 'internet',
        ]);

        TopUpCategory::create([
            'name' => 'Pendidikan',
            'slug' => 'pendidikan',
        ]);

        TopUpCategory::create([
            'name' => 'Cicilan',
            'slug' => 'cicilan',
        ]);

        TopUpCategory::create([
            'name' => 'Pascabayar',
            'slug' => 'pascabayar',
        ]);

        TopUpCategory::create([
            'name' => 'Listrik',
            'slug' => 'listrik',
        ]);

        TopUpCategory::create([
            'name' => 'CryptoCurrency',
            'slug' => 'crypto',
        ]);

        TopUpCategory::create([
            'name' => 'Emas',
            'slug' => 'emas',
        ]);
    }
}