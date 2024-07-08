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
/*     public function run(): void
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

    } */

    public function run(): void
    {
        // Define ingredients for each recipe by recipe name
        $recipesIngredients = [
            'Vegan tacos' => [
                ['ingredient_id' => 1, 'quantity' => 1, 'measurement' => 'tbsp'], // Oil
                ['ingredient_id' => 2, 'quantity' => 1, 'measurement' => 'unit'], // Yellow onion
                ['ingredient_id' => 3, 'quantity' => 4, 'measurement' => 'cloves'], // Garlic
                ['ingredient_id' => 4, 'quantity' => 2, 'measurement' => 'cup'], // Vegetable broth
                ['ingredient_id' => 5, 'quantity' => 1, 'measurement' => 'cup'], // Textured vegetable protein
                ['ingredient_id' => 6, 'quantity' => 2, 'measurement' => 'tsp'], // Chili powder
                ['ingredient_id' => 7, 'quantity' => 1, 'measurement' => 'tsp'], // Paprika
                ['ingredient_id' => 8, 'quantity' => 1, 'measurement' => 'tsp'], // Cumin
                ['ingredient_id' => 9, 'quantity' => 8, 'measurement' => 'units'], // Tortillas
                ['ingredient_id' => 10, 'quantity' => 1, 'measurement' => 'tsp'], // Salt
                ['ingredient_id' => 11, 'quantity' => 1, 'measurement' => 'cup'], // Guacamole
                ['ingredient_id' => 12, 'quantity' => 1, 'measurement' => 'tbsp'], // Cilantro
            ],
            'One-Pan Coconut-Lime Chicken' => [
                ['ingredient_id' => 13, 'quantity' => 6, 'measurement' => 'units'], // Chicken cutlets
                ['ingredient_id' => 14, 'quantity' => 1, 'measurement' => 'tsp'], // Black pepper
                ['ingredient_id' => 10, 'quantity' => 1, 'measurement' => 'tsp'], // Salt
                ['ingredient_id' => 1, 'quantity' => 2, 'measurement' => 'tbsp'], // Oil
                ['ingredient_id' => 2, 'quantity' => 1, 'measurement' => 'unit'], // Yellow onion
                ['ingredient_id' => 3, 'quantity' => 3, 'measurement' => 'cloves'], // Garlic
                ['ingredient_id' => 15, 'quantity' => 1,
                 'measurement' => 'unit'], // Jalapeño
                ['ingredient_id' => 16, 'quantity' => 1, 'measurement' => 'tbsp'], // Ginger
                ['ingredient_id' => 17, 'quantity' => 2, 'measurement' => 'units'], // Tomatoes
                ['ingredient_id' => 18, 'quantity' => 1, 'measurement' => 'tbsp'], // Tomato paste
                ['ingredient_id' => 19, 'quantity' => 1, 'measurement' => 'cup'], // Unsweetened coconut milk
                ['ingredient_id' => 20, 'quantity' => 2, 'measurement' => 'tbsp'], // Brown sugar
                ['ingredient_id' => 21, 'quantity' => 1, 'measurement' => 'tbsp'], // Fresh cilantro leaves
                ['ingredient_id' => 22, 'quantity' => 2, 'measurement' => 'tbsp'], // Fresh lime juice
            ],
            'The best Veggie Burger!' => [
                ['ingredient_id' => 1, 'quantity' => 2, 'measurement' => 'tbsp'], // Oil
                ['ingredient_id' => 2, 'quantity' => 1, 'measurement' => 'unit'], // Yellow onion
                ['ingredient_id' => 3, 'quantity' => 3, 'measurement' => 'cloves'], // Garlic
                ['ingredient_id' => 7, 'quantity' => 1, 'measurement' => 'tsp'], // Paprika
                ['ingredient_id' => 23, 'quantity' => 2, 'measurement' => 'cup'], // Mushrooms
                ['ingredient_id' => 24, 'quantity' => 2, 'measurement' => 'tbsp'], // Tamari
                ['ingredient_id' => 25, 'quantity' => 2, 'measurement' => 'tbsp'], // Balsamic vinegar
                ['ingredient_id' => 26, 'quantity' => 1, 'measurement' => 'tsp'], // Sriracha
                ['ingredient_id' => 27, 'quantity' => 1, 'measurement' => 'cup'], // Walnuts
                ['ingredient_id' => 28, 'quantity' => 2, 'measurement' => 'tbsp'], // Flaxseeds
                ['ingredient_id' => 29, 'quantity' => 1, 'measurement' => 'cup'], // Brown rice
                ['ingredient_id' => 30, 'quantity' => 1, 'measurement' => 'cup'], // Panko bread crumbs
                ['ingredient_id' => 31, 'quantity' => 1, 'measurement' => 'tbsp'], // Worcestershire sauce
                ['ingredient_id' => 32, 'quantity' => 4, 'measurement' => 'units'], // Buns
                ['ingredient_id' => 10, 'quantity' => 1, 'measurement' => 'tsp'], // Salt
            ],
            'The Best Brownies!' => [
                ['ingredient_id' => 33, 'quantity' => 2.5, 'measurement' => 'sticks'], // Unsalted butter
                ['ingredient_id' => 34, 'quantity' => 225, 'measurement' => 'g'], // 60-70% cacao chocolate
                ['ingredient_id' => 35, 'quantity' => 90, 'measurement' => 'grams'], // Unsweetened cocoa powder
                ['ingredient_id' => 36, 'quantity' => 1, 'measurement' => 'tbsp'], // Espresso powder
                ['ingredient_id' => 37, 'quantity' => 2, 'measurement' => 'cup'], // Granulated sugar
                ['ingredient_id' => 20, 'quantity' => 0.5, 'measurement' => 'cup'], // Brown sugar
                ['ingredient_id' => 38, 'quantity' => 2, 'measurement' => 'tsp'], // Vanilla extract
                ['ingredient_id' => 42, 'quantity' => 2, 'measurement' => 'tsp'], // Kosher salt
                ['ingredient_id' => 40, 'quantity' => 6, 'measurement' => 'units'], // Large eggs
                ['ingredient_id' => 41, 'quantity' => 1, 'measurement' => 'cup'], // All-purpose flour
                ['ingredient_id' => 39, 'quantity' => 1, 'measurement' => 'tsp'], // Flaky sea salt
            ],
        ];

        // Loop through each recipe and insert ingredients
        foreach ($recipesIngredients as $recipeName => $ingredients) {
            // Find the recipe ID for the current recipe name
            $recipeId = DB::table('recipes')->where('name', $recipeName)->value('id');

            // Insert the ingredients for the current recipe
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

}
