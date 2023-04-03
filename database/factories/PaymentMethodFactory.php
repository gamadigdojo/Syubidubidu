<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PaymentMethod;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PaymentMethodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'PaymentMethodID' => $this->faker->unique()->regexify('PM[0-9]{3}'),
            'PaymentMethodName' => $this->faker->unique()->randomElement(['COD', 'Visa/MasterCard', 'Transfer Bank', 'OVO', 'Gopay','Virtual Account']),
        ];
    }
}
