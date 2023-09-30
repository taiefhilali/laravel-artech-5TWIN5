<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
       //Category::factory(10)->create();
      
           for ($i = 0; $i < 20; $i++) {
               Category::create([
                   'name' => 'Category ' . ($i + 1), 
                   'description' => 'Description for Categorie ' . ($i + 1),
                   
               ]);
           }
    }
}