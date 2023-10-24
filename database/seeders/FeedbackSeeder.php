<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            for ($i = 0; $i < 20; $i++) {
                Feedback::create([
                    'name' => 'Feedback ' . ($i + 1), // Customize the event name as needed
                    'description' => 'Description for Feedback ' . ($i + 1), // Customize the description
                    'date' => now(), // Customize the date
                    'ratings' => rand(1, 5), // Add a random rating between 1 and 5
                    'email' => 'Feedback' . ($i + 1) . '@example.com', // Customize the email
                    'product_id' => rand(1, 100), // Generate a random category ID (adjust the range as needed)
                    'user_id' => rand(1, 100), // Generate a random category ID (adjust the range as needed)

                ]);
            }
        }  
    }
}