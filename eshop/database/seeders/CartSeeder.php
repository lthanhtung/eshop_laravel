<?php

namespace Database\Seeders;

use App\Models\Cart;
use Database\Factories\CartFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cart::factory()->count(5)->create();
    }
}
