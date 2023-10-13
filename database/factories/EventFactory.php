<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event; // Import the correct namespace for the Event model

class EventFactory extends Factory
{
    protected $model = Event::class;
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3), // Generate a random sentence as the event name
            'description' => $this->faker->paragraph, // Generate a random paragraph as the event description
            'date' => $this->faker->dateTimeBetween('now', '+1 year'), // Generate a random date within the next year
            'owner' => $this->faker->name, // Generate a random owner name
            'category_id' => $this->faker->numberBetween(1, 100), // Generate a random category ID (adjust the range as needed)

        ];
    }
}