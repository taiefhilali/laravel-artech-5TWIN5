<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Commande;


class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            Commande::create([
                'name' => 'Commande ' . ($i + 1), // Personnalisez le nom de la commande au besoin
                'description' => 'Description de la commande ' . ($i + 1), // Personnalisez la description
                'date' => now(), // Personnalisez la date
                'price' => rand(10, 1000), // Génère un prix aléatoire entre 10 et 1000
            ]);
        }
    }
}