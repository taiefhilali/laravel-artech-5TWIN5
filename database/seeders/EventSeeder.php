<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;


class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create and seed 20 events using the EventFactory
       // Event::factory()->count(20)->create();
       for ($i = 0; $i < 20; $i++) {
        Event::create([
            'name' => 'Event ' . ($i + 1), // Customize the event name as needed
            'description' => 'Description for Event ' . ($i + 1), // Customize the description
            'date' => now(), // Customize the date
            'owner' => 'Owner ' . ($i + 1), // Customize the owner
        ]);
    }
    }
}
