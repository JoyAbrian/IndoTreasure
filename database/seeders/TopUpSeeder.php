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
    }
}