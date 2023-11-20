<?php

namespace Database\Seeders;

use App\Models\TopUp;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TopUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SECTION PAKET
        TopUp::create([
            'top_up_category_id' => '1',
            'name' => 'Internet Bulanan 55GB OMG',
            'slug' => 'internet-omg-55gb',
            'price' => 60000,
        ]);

        TopUp::create([
            'top_up_category_id' => '1',
            'name' => 'Internet Bulanan 75GB OMG',
            'slug' => 'internet-omg-75gb',
            'price' => 70000,
        ]);

        TopUp::create([
            'top_up_category_id' => '1',
            'name' => 'Internet Bulanan 100GB OMG',
            'slug' => 'internet-omg-100gb',
            'price' => 120000,
        ]);

        TopUp::create([
            'top_up_category_id' => '1',
            'name' => 'Internet Bulanan 125GB OMG',
            'slug' => 'internet-omg-125gb',
            'price' => 140000,
        ]);

        TopUp::create([
            'top_up_category_id' => '1',
            'name' => 'Internet Bulanan 10GB',
            'slug' => 'internet-bln-10gb',
            'price' => 40000,
        ]);

        TopUp::create([
            'top_up_category_id' => '1',
            'name' => 'Internet Bulanan 15GB',
            'slug' => 'internet-bln-15gb',
            'price' => 48000,
        ]);

        TopUp::create([
            'top_up_category_id' => '1',
            'name' => 'Internet Bulanan 25GB',
            'slug' => 'internet-bln-25gb',
            'price' => 75000,
        ]);

        TopUp::create([
            'top_up_category_id' => '1',
            'name' => 'Internet Bulanan 55GB',
            'slug' => 'internet-bln-55gb',
            'price' => 65000,
        ]);

        TopUp::create([
            'top_up_category_id' => '1',
            'name' => 'Internet Bulanan 100GB',
            'slug' => 'internet-bln-100gb',
            'price' => 105000,
        ]);

        TopUp::create([
            'top_up_category_id' => '1',
            'name' => 'Internet Mingguan 10GB',
            'slug' => 'internet-ming-10gb',
            'price' => 18000,
        ]);

        TopUp::create([
            'top_up_category_id' => '1',
            'name' => 'Internet Mingguan 20GB',
            'slug' => 'internet-ming-20gb',
            'price' => 32000,
        ]);

        TopUp::create([
            'top_up_category_id' => '1',
            'name' => 'Internet Mingguan 40GB',
            'slug' => 'internet-ming-40gb',
            'price' => 58000,
        ]);

        // SECTION PULSA
        TopUp::create([
            'top_up_category_id' => '2',
            'name' => 'Pulsa 15.000',
            'slug' => 'pulsa-15k',
            'price' => 17500,
        ]);

        TopUp::create([
            'top_up_category_id' => '2',
            'name' => 'Pulsa 20.000',
            'slug' => 'pulsa-20k',
            'price' => 22500,
        ]);

        TopUp::create([
            'top_up_category_id' => '2',
            'name' => 'Pulsa 25.000',
            'slug' => 'pulsa-25k',
            'price' => 27500,
        ]);

        TopUp::create([
            'top_up_category_id' => '2',
            'name' => 'Pulsa 30.000',
            'slug' => 'pulsa-30k',
            'price' => 32500,
        ]);

        TopUp::create([
            'top_up_category_id' => '2',
            'name' => 'Pulsa 35.000',
            'slug' => 'pulsa-35k',
            'price' => 37500,
        ]);

        TopUp::create([
            'top_up_category_id' => '2',
            'name' => 'Pulsa 40.000',
            'slug' => 'pulsa-40k',
            'price' => 42500,
        ]);

        TopUp::create([
            'top_up_category_id' => '2',
            'name' => 'Pulsa 45.000',
            'slug' => 'pulsa-45k',
            'price' => 47500,
        ]);

        TopUp::create([
            'top_up_category_id' => '2',
            'name' => 'Pulsa 50.000',
            'slug' => 'pulsa-50k',
            'price' => 52500,
        ]);

        TopUp::create([
            'top_up_category_id' => '2',
            'name' => 'Pulsa 55.000',
            'slug' => 'pulsa-55k',
            'price' => 57500,
        ]);

        TopUp::create([
            'top_up_category_id' => '2',
            'name' => 'Pulsa 60.000',
            'slug' => 'pulsa-60k',
            'price' => 62500,
        ]);

        TopUp::create([
            'top_up_category_id' => '2',
            'name' => 'Pulsa 65.000',
            'slug' => 'pulsa-65k',
            'price' => 67500,
        ]);

        TopUp::create([
            'top_up_category_id' => '2',
            'name' => 'Pulsa 70.000',
            'slug' => 'pulsa-70k',
            'price' => 72500,
        ]);

        // SECTION TELEPON
        TopUp::create([
            'top_up_category_id' => '3',
            'name' => 'Paket Telepon 100 Menit',
            'slug' => 'telp-100',
            'price' => 15000,
        ]);

        TopUp::create([
            'top_up_category_id' => '3',
            'name' => 'Paket Telepon 150 Menit',
            'slug' => 'telp-150',
            'price' => 20000,
        ]);

        TopUp::create([
            'top_up_category_id' => '3',
            'name' => 'Paket Telepon 200 Menit',
            'slug' => 'telp-200',
            'price' => 25000,
        ]);

        TopUp::create([
            'top_up_category_id' => '3',
            'name' => 'Paket Telepon 100 Menit All Operator',
            'slug' => 'telp-100-op',
            'price' => 20000,
        ]);

        TopUp::create([
            'top_up_category_id' => '3',
            'name' => 'Paket Telepon 150 Menit All Operator',
            'slug' => 'telp-150-op',
            'price' => 25000,
        ]);

        TopUp::create([
            'top_up_category_id' => '3',
            'name' => 'Paket Telepon 200 Menit All Operator',
            'slug' => 'telp-200-op',
            'price' => 30000,
        ]);

        // SECTION ROAMING
        TopUp::create([
            'top_up_category_id' => '4',
            'name' => 'RoaMax 3 GB Qatar',
            'slug' => 'roam-3gb-qat',
            'price' => 30000,
        ]);

        TopUp::create([
            'top_up_category_id' => '4',
            'name' => 'RoaMax 6 GB Qatar',
            'slug' => 'roam-6gb-qat',
            'price' => 58000,
        ]);

        TopUp::create([
            'top_up_category_id' => '4',
            'name' => 'RoaMax 8 GB Qatar',
            'slug' => 'roam-8gb-qat',
            'price' => 69000,
        ]);

        TopUp::create([
            'top_up_category_id' => '4',
            'name' => 'RoaMax 3 GB Jepang',
            'slug' => 'roam-3gb-jap',
            'price' => 30000,
        ]);

        TopUp::create([
            'top_up_category_id' => '4',
            'name' => 'RoaMax 6 GB Jepang',
            'slug' => 'roam-6gb-jap',
            'price' => 58000,
        ]);

        TopUp::create([
            'top_up_category_id' => '4',
            'name' => 'RoaMax 8 GB Jepang',
            'slug' => 'roam-8gb-jap',
            'price' => 69000,
        ]);

        TopUp::create([
            'top_up_category_id' => '4',
            'name' => 'RoaMax 3 GB Malaysia',
            'slug' => 'roam-3gb-mal',
            'price' => 30000,
        ]);

        TopUp::create([
            'top_up_category_id' => '4',
            'name' => 'RoaMax 6 GB Malaysia',
            'slug' => 'roam-6gb-mal',
            'price' => 58000,
        ]);

        TopUp::create([
            'top_up_category_id' => '4',
            'name' => 'RoaMax 8 GB Malaysia',
            'slug' => 'roam-8gb-mal',
            'price' => 69000,
        ]);

        // Mobile Legends Section
        TopUp::create([
            'top_up_category_id' => '5',
            'name' => '10 Diamonds',
            'slug' => 'ml-10-dm',
            'price' => 3300,
        ]);

        TopUp::create([
            'top_up_category_id' => '5',
            'name' => '36 Diamonds',
            'slug' => 'ml-36-dm',
            'price' => 11000,
        ]);

        TopUp::create([
            'top_up_category_id' => '5',
            'name' => '72 Diamonds',
            'slug' => 'ml-72-dm',
            'price' => 20000,
        ]);

        TopUp::create([
            'top_up_category_id' => '5',
            'name' => '370 Diamonds',
            'slug' => 'ml-370-dm',
            'price' => 54000,
        ]);

        TopUp::create([
            'top_up_category_id' => '5',
            'name' => '2010 Diamonds',
            'slug' => 'ml-2010-dm',
            'price' => 330000,
        ]);

        TopUp::create([
            'top_up_category_id' => '5',
            'name' => '5921 Diamonds',
            'slug' => 'ml-5921-dm',
            'price' => 890000,
        ]);

        TopUp::create([
            'top_up_category_id' => '5',
            'name' => 'Starlight Member',
            'slug' => 'ml-starlight',
            'price' => 70000,
        ]);

        // Free Fire Section
        TopUp::create([
            'top_up_category_id' => '6',
            'name' => '5 Diamonds',
            'slug' => 'ff-5-dm',
            'price' => 1000,
        ]);

        TopUp::create([
            'top_up_category_id' => '6',
            'name' => '50 Diamonds',
            'slug' => 'ff-50-dm',
            'price' => 9000,
        ]);

        TopUp::create([
            'top_up_category_id' => '6',
            'name' => '140 Diamonds',
            'slug' => 'ff-140-dm',
            'price' => 1900,
        ]);

        TopUp::create([
            'top_up_category_id' => '6',
            'name' => '720 Diamonds',
            'slug' => 'ff-720-dm',
            'price' => 98000,
        ]);

        TopUp::create([
            'top_up_category_id' => '6',
            'name' => '2180 Diamonds',
            'slug' => 'ff-2180-dm',
            'price' => 297000,
        ]);

        TopUp::create([
            'top_up_category_id' => '6',
            'name' => '3640 Diamonds',
            'slug' => 'ff-3640-dm',
            'price' => 490000,
        ]);

        // PUBG SECTION
        TopUp::create([
            'top_up_category_id' => '7',
            'name' => '60 UC',
            'slug' => 'pubg-60-uc',
            'price' => 18000,
        ]);

        TopUp::create([
            'top_up_category_id' => '7',
            'name' => '660 UC',
            'slug' => 'pubg-660-uc',
            'price' => 180000,
        ]);

        TopUp::create([
            'top_up_category_id' => '7',
            'name' => '3850 UC',
            'slug' => 'pubg-3850-uc',
            'price' => 900000,
        ]);

        // Point Blank SECTION
        TopUp::create([
            'top_up_category_id' => '8',
            'name' => '2400 Cash',
            'slug' => 'pb-2400-cash',
            'price' => 18000,
        ]);

        TopUp::create([
            'top_up_category_id' => '8',
            'name' => '6000 Cash',
            'slug' => 'pb-6000-cash',
            'price' => 48000,
        ]);

        TopUp::create([
            'top_up_category_id' => '8',
            'name' => '24000 Cash',
            'slug' => 'pb-24000-cash',
            'price' => 198000,
        ]);

        TopUp::create([
            'top_up_category_id' => '8',
            'name' => '36000 Cash',
            'slug' => 'pb-36000-cash',
            'price' => 297000,
        ]);

        TopUp::create([
            'top_up_category_id' => '8',
            'name' => '60000 Cash',
            'slug' => 'pb-60000-cash',
            'price' => 495000,
        ]);

        // Minecraft SECTION
        TopUp::create([
            'top_up_category_id' => '9',
            'name' => 'Minecraft Java + Bedrock Edition Pack',
            'slug' => 'mc-java-bedrock',
            'price' => 390000,
        ]);

        TopUp::create([
            'top_up_category_id' => '9',
            'name' => 'MCPACK 1720 Coins',
            'slug' => 'mc-1720-coins',
            'price' => 155000,
        ]);

        TopUp::create([
            'top_up_category_id' => '9',
            'name' => 'MCPACK 3500 Coins',
            'slug' => 'mc-3500-coins',
            'price' => 320000,
        ]);

        // eFootball Section
        TopUp::create([
            'top_up_category_id' => '10',
            'name' => '130 Coins',
            'slug' => 'pes-130-coins',
            'price' => 18000,
        ]);

        TopUp::create([
            'top_up_category_id' => '10',
            'name' => '550 Coins',
            'slug' => 'pes-550-coins',
            'price' => 72000,
        ]);

        TopUp::create([
            'top_up_category_id' => '10',
            'name' => '1040 Coins',
            'slug' => 'pes-1040-coins',
            'price' => 143000,
        ]);

        TopUp::create([
            'top_up_category_id' => '10',
            'name' => '2130 Coins',
            'slug' => 'pes-2130-coins',
            'price' => 276000,
        ]);

        // Steam Section
        TopUp::create([
            'top_up_category_id' => '11',
            'name' => '12000 WALLET IDR',
            'slug' => 'steam-12000-wallet',
            'price' => 12000,
        ]);

        TopUp::create([
            'top_up_category_id' => '11',
            'name' => '45000 WALLET IDR',
            'slug' => 'steam-45000-wallet',
            'price' => 45000,
        ]);

        TopUp::create([
            'top_up_category_id' => '11',
            'name' => '60000 WALLET IDR',
            'slug' => 'steam-60000-wallet',
            'price' => 60000,
        ]);

        TopUp::create([
            'top_up_category_id' => '11',
            'name' => '90000 WALLET IDR',
            'slug' => 'steam-90000-wallet',
            'price' => 90000,
        ]);

        TopUp::create([
            'top_up_category_id' => '11',
            'name' => '120000 WALLET IDR',
            'slug' => 'steam-120000-wallet',
            'price' => 120000,
        ]);

        TopUp::create([
            'top_up_category_id' => '11',
            'name' => '250000 WALLET IDR',
            'slug' => 'steam-250000-wallet',
            'price' => 250000,
        ]);

        TopUp::create([
            'top_up_category_id' => '11',
            'name' => '400000 WALLET IDR',
            'slug' => 'steam-400000-wallet',
            'price' => 400000,
        ]);

        TopUp::create([
            'top_up_category_id' => '11',
            'name' => '600000 WALLET IDR',
            'slug' => 'steam-600000-wallet',
            'price' => 600000,
        ]);

        TopUp::create([
            'top_up_category_id' => '11',
            'name' => '1000000 WALLET IDR',
            'slug' => 'steam-1000000-wallet',
            'price' => 1000000,
        ]);

        // PlayStation Section
        TopUp::create([
            'top_up_category_id' => '12',
            'name' => '100000 GIFTCARD IDR',
            'slug' => 'ps-100000-gift',
            'price' => 100000,
        ]);

        TopUp::create([
            'top_up_category_id' => '12',
            'name' => '200000 GIFTCARD IDR',
            'slug' => 'ps-200000-gift',
            'price' => 200000,
        ]);

        TopUp::create([
            'top_up_category_id' => '12',
            'name' => '300000 GIFTCARD IDR',
            'slug' => 'ps-300000-gift',
            'price' => 300000,
        ]);

        TopUp::create([
            'top_up_category_id' => '12',
            'name' => '400000 GIFTCARD IDR',
            'slug' => 'ps-400000-gift',
            'price' => 400000,
        ]);

        TopUp::create([
            'top_up_category_id' => '12',
            'name' => '600000 GIFTCARD IDR',
            'slug' => 'ps-600000-gift',
            'price' => 600000,
        ]);

        TopUp::create([
            'top_up_category_id' => '12',
            'name' => '1000000 GIFTCARD IDR',
            'slug' => 'ps-1000000-gift',
            'price' => 1000000,
        ]);

        TopUp::create([
            'top_up_category_id' => '12',
            'name' => '1500000 GIFTCARD IDR',
            'slug' => 'ps-1500000-gift',
            'price' => 1500000,
        ]);

        // Dana Section
        TopUp::create([
            'top_up_category_id' => '13',
            'name' => '10000IDR Dana',
            'slug' => 'dana-10000-idr',
            'price' => 10000,
        ]);

        TopUp::create([
            'top_up_category_id' => '13',
            'name' => '20000IDR Dana',
            'slug' => 'dana-20000-idr',
            'price' => 20000,
        ]);

        TopUp::create([
            'top_up_category_id' => '13',
            'name' => '30000IDR Dana',
            'slug' => 'dana-30000-idr',
            'price' => 30000,
        ]);

        TopUp::create([
            'top_up_category_id' => '13',
            'name' => '40000IDR Dana',
            'slug' => 'dana-40000-idr',
            'price' => 40000,
        ]);

        TopUp::create([
            'top_up_category_id' => '13',
            'name' => '60000IDR Dana',
            'slug' => 'dana-60000-idr',
            'price' => 60000,
        ]);

        TopUp::create([
            'top_up_category_id' => '13',
            'name' => '90000IDR Dana',
            'slug' => 'dana-90000-idr',
            'price' => 90000,
        ]);

        TopUp::create([
            'top_up_category_id' => '13',
            'name' => '120000IDR Dana',
            'slug' => 'dana-120000-idr',
            'price' => 120000,
        ]);

        TopUp::create([
            'top_up_category_id' => '13',
            'name' => '150000IDR Dana',
            'slug' => 'dana-150000-idr',
            'price' => 150000,
        ]);

        // GoPay Section
        TopUp::create([
            'top_up_category_id' => '14',
            'name' => '10000IDR Gopay',
            'slug' => 'gopay-10000-idr',
            'price' => 10000,
        ]);

        TopUp::create([
            'top_up_category_id' => '14',
            'name' => '20000IDR Gopay',
            'slug' => 'gopay-20000-idr',
            'price' => 20000,
        ]);

        TopUp::create([
            'top_up_category_id' => '14',
            'name' => '30000IDR Gopay',
            'slug' => 'gopay-30000-idr',
            'price' => 30000,
        ]);

        TopUp::create([
            'top_up_category_id' => '14',
            'name' => '40000IDR Gopay',
            'slug' => 'gopay-40000-idr',
            'price' => 40000,
        ]);

        TopUp::create([
            'top_up_category_id' => '14',
            'name' => '60000IDR Gopay',
            'slug' => 'gopay-60000-idr',
            'price' => 60000,
        ]);

        TopUp::create([
            'top_up_category_id' => '14',
            'name' => '90000IDR Gopay',
            'slug' => 'gopay-90000-idr',
            'price' => 90000,
        ]);

        TopUp::create([
            'top_up_category_id' => '14',
            'name' => '120000IDR Gopay',
            'slug' => 'gopay-120000-idr',
            'price' => 120000,
        ]);

        TopUp::create([
            'top_up_category_id' => '14',
            'name' => '150000IDR Gopay',
            'slug' => 'gopay-150000-idr',
            'price' => 150000,
        ]);

        // OVO Section
        TopUp::create([
            'top_up_category_id' => '15',
            'name' => '10000IDR OVO',
            'slug' => 'ovo-10000-idr',
            'price' => 10000,
        ]);

        TopUp::create([
            'top_up_category_id' => '15',
            'name' => '20000IDR OVO',
            'slug' => 'ovo-20000-idr',
            'price' => 20000,
        ]);

        TopUp::create([
            'top_up_category_id' => '15',
            'name' => '30000IDR OVO',
            'slug' => 'ovo-30000-idr',
            'price' => 30000,
        ]);

        TopUp::create([
            'top_up_category_id' => '15',
            'name' => '40000IDR OVO',
            'slug' => 'ovo-40000-idr',
            'price' => 40000,
        ]);

        TopUp::create([
            'top_up_category_id' => '15',
            'name' => '60000IDR OVO',
            'slug' => 'ovo-60000-idr',
            'price' => 60000,
        ]);

        TopUp::create([
            'top_up_category_id' => '15',
            'name' => '90000IDR OVO',
            'slug' => 'ovo-90000-idr',
            'price' => 90000,
        ]);

        TopUp::create([
            'top_up_category_id' => '15',
            'name' => '120000IDR OVO',
            'slug' => 'ovo-120000-idr',
            'price' => 120000,
        ]);

        TopUp::create([
            'top_up_category_id' => '15',
            'name' => '150000IDR OVO',
            'slug' => 'ovo-150000-idr',
            'price' => 150000,
        ]);

        // ShopeePay Section
        TopUp::create([
            'top_up_category_id' => '16',
            'name' => '10000IDR ShopeePay',
            'slug' => 'sp-10000-idr',
            'price' => 10000,
        ]);

        TopUp::create([
            'top_up_category_id' => '16',
            'name' => '20000IDR ShopeePay',
            'slug' => 'sp-20000-idr',
            'price' => 20000,
        ]);

        TopUp::create([
            'top_up_category_id' => '16',
            'name' => '30000IDR ShopeePay',
            'slug' => 'sp-30000-idr',
            'price' => 30000,
        ]);

        TopUp::create([
            'top_up_category_id' => '16',
            'name' => '40000IDR ShopeePay',
            'slug' => 'sp-40000-idr',
            'price' => 40000,
        ]);

        TopUp::create([
            'top_up_category_id' => '16',
            'name' => '60000IDR ShopeePay',
            'slug' => 'sp-60000-idr',
            'price' => 60000,
        ]);

        TopUp::create([
            'top_up_category_id' => '16',
            'name' => '90000IDR ShopeePay',
            'slug' => 'sp-90000-idr',
            'price' => 90000,
        ]);

        TopUp::create([
            'top_up_category_id' => '16',
            'name' => '120000IDR ShopeePay',
            'slug' => 'sp-120000-idr',
            'price' => 120000,
        ]);

        TopUp::create([
            'top_up_category_id' => '16',
            'name' => '150000IDR ShopeePay',
            'slug' => 'sp-150000-idr',
            'price' => 150000,
        ]);

        // Netflix Section
        TopUp::create([
            'top_up_category_id' => '17',
            'name' => 'Paket Ponsel',
            'slug' => 'netflix-phone',
            'price' => 53500,
        ]);

        TopUp::create([
            'top_up_category_id' => '17',
            'name' => 'Paket Basic',
            'slug' => 'netflix-basic',
            'price' => 64500,
        ]);

        TopUp::create([
            'top_up_category_id' => '17',
            'name' => 'Paket Standar',
            'slug' => 'netflix-standar',
            'price' => 119500,
        ]);

        TopUp::create([
            'top_up_category_id' => '17',
            'name' => 'Paket Premium',
            'slug' => 'netflix-premium',
            'price' => 185500,
        ]);

        // Disney+ Hotstar
        TopUp::create([
            'top_up_category_id' => '18',
            'name' => 'Paket 1 Bulan',
            'slug' => 'disney-1',
            'price' => 39000,
        ]);

        TopUp::create([
            'top_up_category_id' => '18',
            'name' => 'Paket 1 Tahun',
            'slug' => 'disney-12',
            'price' => 199000,
        ]);

        // Spotify
        TopUp::create([
            'top_up_category_id' => '19',
            'name' => 'Paket Mini',
            'slug' => 'spotify-mini',
            'price' => 2500,
        ]);

        TopUp::create([
            'top_up_category_id' => '19',
            'name' => 'Paket Individual',
            'slug' => 'spotify-individual',
            'price' => 54500,
        ]);

        TopUp::create([
            'top_up_category_id' => '19',
            'name' => 'Paket Duo',
            'slug' => 'spotify-duo',
            'price' => 71000,
        ]);

        TopUp::create([
            'top_up_category_id' => '19',
            'name' => 'Paket Family',
            'slug' => 'spotify-family',
            'price' => 86500,
        ]);
    }
}