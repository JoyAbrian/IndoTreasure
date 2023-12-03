<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alamat>
 */
class AlamatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 30),
            'postal_code' => fake()->numberBetween(10000, 99999),
            'street' => fake()->address(),
            'kecamatan' => fake()->city(),
            'kabupaten_kota' => fake()->city(),
            'provinsi' => fake()->city(),
            'name' => fake()->name(),
            'phone_number' => fake()->phoneNumber(),
        ];
    }
}
