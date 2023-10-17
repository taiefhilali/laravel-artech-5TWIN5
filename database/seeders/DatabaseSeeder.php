<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\EventSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ProductTypeSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\FeedbackSeeder;
use Database\Seeders\CommentSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     
        $this->call(EventSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProductTypeSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(CommentSeeder::class);

    }
}
