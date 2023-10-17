<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Feedback; // Import the correct namespace for the Event model

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     */
    protected $model = Feedback::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3), // Generate a random sentence as the Feedback name
            'email' => $this->faker->email, // Use $this->faker->email to generate a random email
            'date' => now(), 
            'description' => $this->faker->paragraph, // Generate a random paragraph as the Feedback description
            'ratings' => $this->faker->numberBetween(1, 5), 

        ];
    }
}