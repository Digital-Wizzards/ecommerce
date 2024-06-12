<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Import>
 */
class ImportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quantity' => $this->faker->randomDigit(),
            'price' => $this->faker->numberBetween(100, 100000),
            'import_date' => $this->faker->dateTime(),
            'vendor_id' => Vendor::all()->random()->id,
            'product_id' => Product::all()->random()->id,
        ];
    }
}
