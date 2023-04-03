<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ShipmentType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ShipmentTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ShipmentTypeID' => $this->faker->unique()->regexify('ST[0-9]{3}'),
            // shipment type name must be unique
            'ShipmentTypeName' => $this->faker->unique()->randomElement(['SameDay', 'Instant', 'Reguler', 'Economic', 'Cargo']),
            'ShipmentTypeFee' => $this->faker->randomElement([10000, 20000, 30000, 40000, 50000]),
        ];
    }
}
