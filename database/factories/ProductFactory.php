<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //ProductID LIKE 'PD001'
            'ProductID' => $this->faker->unique()->regexify('PD[0-9]{3}'),
            'ProductName' => $this->faker->unique()->name(),
            'ProductDescription' => $this->faker->text(),
            'ProductPrice' => $this->faker->numberBetween(1000, 100000),
            'ProductStock' => $this->faker->numberBetween(50, 100),
            'ProductImage' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
        ];
    }
}
