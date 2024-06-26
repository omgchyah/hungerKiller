<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Find the recipe ID for 'Vegan Tacos'
        $recipeId = DB::table('recipes')->where('name', 'Vegan tacos')->value('id');

        // Define ingredients for the Vegan Tacos recipe
        $ingredients = [
            ['ingredient_id' => 1, 'quantity' => 1, 'measurement' => 'tbsp'], // Oil
            ['ingredient_id' => 2, 'quantity' => 1, 'measurement' => 'unit'], // Yellow onion
            ['ingredient_id' => 3, 'quantity' => 4, 'measurement' => 'cloves'], // Garlic
            ['ingredient_id' => 4, 'quantity' => '2', 'measurement' => 'cup'], // Vegetable broth
            ['ingredient_id' => 5, 'quantity' => 1, 'measurement' => 'cup'], // Textured vegetable protein
            ['ingredient_id' => 6, 'quantity' => 2, 'measurement' => 'tsp'], // Chili powder
            ['ingredient_id' => 7, 'quantity' => 1, 'measurement' => 'tsp'], // Paprika
            ['ingredient_id' => 8, 'quantity' => 1, 'measurement' => 'tsp'], // Cumin
            ['ingredient_id' => 9, 'quantity' => 8, 'measurement' => 'units'], // Tortillas
            ['ingredient_id' => 10, 'quantity' => 1, 'measurement' => 'tsp'], // Salt
            ['ingredient_id' => 11, 'quantity' => 1, 'measurement' => 'cup'], // Guacamole
            ['ingredient_id' => 12, 'quantity' => 1, 'measurement' => 'tbsp'], // Cilantro
        ];

         // Insert the ingredients for the Vegan Tacos
         foreach ($ingredients as $ingredient) {
            DB::table('ingredient_recipe')->insert([
                'recipe_id' => $recipeId,
                'ingredient_id' => $ingredient['ingredient_id'],
                'quantity' => $ingredient['quantity'],
                'measurement' => $ingredient['measurement'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
