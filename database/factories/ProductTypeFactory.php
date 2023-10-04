<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProductType; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductType>
 */
class ProductTypeFactory extends Factory
{
    protected $model = ProductType::class;
    public function definition()
    {
        return [
            'name' =>  $this->faker->sentence,
            'description' =>  $this->faker->paragraph,
            'image' =>  $this->faker->sentence,

        ];
    }
}
