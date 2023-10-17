<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment; // Import the correct namespace for the Event model

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Comment::class;

    public function definition(): array
    {
        return [
                
                'dateComment' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d H:i:s'), // Generate a random date within the next year
                'descriptionComment' => $this->faker->paragraph, // Generate a random paragraph as the Feedback description
    
            
        ];
    }
}
