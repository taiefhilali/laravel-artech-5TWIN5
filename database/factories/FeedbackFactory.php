<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Feedback; // Import the correct namespace for the Event model
use App\Models\Product; // Import the correct namespace for the Event model
use App\Models\User; // Import the correct namespace for the Event model

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
           
            'date' => now(), 
            'description' => $this->faker->paragraph, // Generate a random paragraph as the Feedback description
            'ratings' => $this->faker->numberBetween(1, 5), 
            'product_id' => Product::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,

        ];
    }
}