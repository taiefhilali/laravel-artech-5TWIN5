<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product; 
use App\Models\ProductType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'artist' => $this->faker->name,
            'creation_date' => $this->faker->date,
            'dimensions' => $this->faker->randomNumber(2) . 'x' . $this->faker->randomNumber(2), // Use $this->faker
            'medium' => $this->faker->word,
            'quantity' => $this->faker->randomNumber(2),
            'image_url' => $this->faker->imageUrl,
            'product_type_id' => ProductType::inRandomOrder()->first()->id,
        ];
    }
    
}