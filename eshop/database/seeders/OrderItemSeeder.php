<?php

namespace Database\Seeders;

use App\Models\orderdetail;
use Database\Factories\OrderFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        orderdetail::factory()->count(10)->create();
    }
}
