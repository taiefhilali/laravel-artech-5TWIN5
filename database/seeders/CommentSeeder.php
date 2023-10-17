<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            for ($i = 0; $i < 20; $i++) {
                Comment::create([
                 
                    'descriptionComment' => 'Description for Comment ' . ($i + 1), // Customize the description
                    'dateComment' => now(), // Customize the date
                    
                ]);
            }
        }  
    }
}
