<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cart_id'=>fake()->numberBetween(1,5),
            'product_id'=>fake()->numberBetween(1,5),
            'quantity'=>fake()->numberBetween(1,5),
        ];
    }
}
