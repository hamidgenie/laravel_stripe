<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory()->create([
            'name' => 'B2C Product',
            'description' => 'This is the B2C Product',
            'price' => 60
        ]);

        Product::factory()->create([
            'name' => 'B2B Product',
            'description' => 'This is the B2B Product',
            'price' => 90
        ]);
    }
}