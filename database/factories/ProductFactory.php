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
            'ProductCategory' => $this->faker->randomElement(['Beverage', 'Food', 'Snack','Dessert']),
            'ProductPrice' => $this->faker->numberBetween(1000, 100000),
            'ProductStock' => $this->faker->numberBetween(50, 100),
            //default image is 'default-product.png'
            'ProductImage' => 'default-product.png',
            'StoreName'=> $this->faker->randomElement(['Store1', 'Store2', 'Store3','Store4'])
        ];
    }
}
