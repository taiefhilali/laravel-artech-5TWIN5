<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Commande; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{
    protected $model = Commande::class;

    public function definition(): array
    {
        return [
            'name' => $faker->sentence(3), // Génère une phrase aléatoire comme nom de la commande
            'description' => $faker->paragraph, // Génère un paragraphe aléatoire comme description de la commande
            'date' => $faker->dateTimeBetween('now', '+1 year'), // Génère une date aléatoire dans l'année à venir
            'price' => $faker->randomFloat(2, 10, 1000), // Génère un prix aléatoire entre 10 et 1000 avec 2 décimales
        ];
    }
}
