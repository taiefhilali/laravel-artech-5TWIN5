<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 20; $i++) {
            $randomPrice = mt_rand(100, 10000000) / 100; // Generates a random price between 1.00 and 100000.00

            Product::create([
                'title' => 'Product ' . ($i + 1), // Customize the event name as needed
                'description' => 'Description for Product ' . ($i + 1), // Customize the description
                'price' => $randomPrice,
                // Customize the date
            ]);
        }
    }
}
