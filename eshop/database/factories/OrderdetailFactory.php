<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orderdetail>
 */
class OrderdetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id'=>fake()->numberBetween(1,5),
            'product_id'=>fake()->numberBetween(1,5),
            'quantity'=>fake()->numberBetween(1,5),
            'price'=>fake()->randomFloat('10'),
        ];
    }
}
