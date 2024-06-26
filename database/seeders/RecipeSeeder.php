<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            // Vegan Recipes
            [
                'name' => 'Vegan Tacos',
                'description' => 'Delicious vegan tacos with beans and vegetables.',
                'difficulty' => 'easy',
                'category' => 'main course',
                'restrictions' => 'vegan',
                'instructions' => 'Cook beans. Prepare vegetables. Assemble tacos.',
                'prep_time' => 20,
                'cooking_time' => 15,
                'total_time' => 35,
            ],
            [
                'name' => 'Vegan Salad',
                'description' => 'Fresh salad with a variety of vegetables and a light dressing.',
                'difficulty' => 'easy',
                'category' => 'salad',
                'restrictions' => 'vegan',
                'instructions' => 'Chop vegetables. Mix dressing. Toss salad.',
                'prep_time' => 15,
                'cooking_time' => 0,
                'total_time' => 15,
            ],
            [
                'name' => 'Vegan Smoothie',
                'description' => 'A refreshing smoothie made with fresh fruits and almond milk.',
                'difficulty' => 'easy',
                'category' => 'beverage',
                'restrictions' => 'vegan',
                'instructions' => 'Blend fruits and almond milk until smooth.',
                'prep_time' => 5,
                'cooking_time' => 0,
                'total_time' => 5,
            ],
            [
                'name' => 'Vegan Chocolate Cake',
                'description' => 'Rich and moist vegan chocolate cake.',
                'difficulty' => 'medium',
                'category' => 'dessert',
                'restrictions' => 'vegan',
                'instructions' => 'Mix dry and wet ingredients. Bake at 350°F for 30 minutes.',
                'prep_time' => 20,
                'cooking_time' => 30,
                'total_time' => 50,
            ],
            // Vegetarian Recipes
            [
                'name' => 'Vegetarian Pizza',
                'description' => 'Homemade pizza with a variety of vegetables.',
                'difficulty' => 'medium',
                'category' => 'main course',
                'restrictions' => 'vegetarian',
                'instructions' => 'Prepare dough. Add toppings. Bake at 400°F for 20 minutes.',
                'prep_time' => 30,
                'cooking_time' => 20,
                'total_time' => 50,
            ],
            [
                'name' => 'Vegetarian Pasta',
                'description' => 'Pasta with a rich tomato and vegetable sauce.',
                'difficulty' => 'easy',
                'category' => 'main course',
                'restrictions' => 'vegetarian',
                'instructions' => 'Cook pasta. Prepare sauce. Combine and serve.',
                'prep_time' => 10,
                'cooking_time' => 20,
                'total_time' => 30,
            ],
            [
                'name' => 'Vegetarian Sandwich',
                'description' => 'A hearty sandwich with grilled vegetables and cheese.',
                'difficulty' => 'easy',
                'category' => 'snack',
                'restrictions' => 'vegetarian',
                'instructions' => 'Grill vegetables. Assemble sandwich.',
                'prep_time' => 15,
                'cooking_time' => 10,
                'total_time' => 25,
            ],
            [
                'name' => 'Vegetarian Soup',
                'description' => 'A warm and comforting vegetable soup.',
                'difficulty' => 'easy',
                'category' => 'soup',
                'restrictions' => 'vegetarian',
                'instructions' => 'Chop vegetables. Cook in broth until tender.',
                'prep_time' => 15,
                'cooking_time' => 30,
                'total_time' => 45,
            ],
            // Gluten-Free Recipes
            [
                'name' => 'Gluten-Free Pancakes',
                'description' => 'Fluffy gluten-free pancakes.',
                'difficulty' => 'easy',
                'category' => 'breakfast',
                'restrictions' => 'gluten-free',
                'instructions' => 'Mix ingredients. Cook on griddle until golden.',
                'prep_time' => 10,
                'cooking_time' => 10,
                'total_time' => 20,
            ],
            [
                'name' => 'Gluten-Free Pasta',
                'description' => 'Pasta made with gluten-free ingredients.',
                'difficulty' => 'easy',
                'category' => 'main course',
                'restrictions' => 'gluten-free',
                'instructions' => 'Cook pasta. Prepare sauce. Combine and serve.',
                'prep_time' => 10,
                'cooking_time' => 20,
                'total_time' => 30,
            ],
            [
                'name' => 'Gluten-Free Bread',
                'description' => 'Freshly baked gluten-free bread.',
                'difficulty' => 'medium',
                'category' => 'bread',
                'restrictions' => 'gluten-free',
                'instructions' => 'Mix ingredients. Bake at 375°F for 45 minutes.',
                'prep_time' => 20,
                'cooking_time' => 45,
                'total_time' => 65,
            ],
            [
                'name' => 'Gluten-Free Cookies',
                'description' => 'Delicious gluten-free cookies.',
                'difficulty' => 'easy',
                'category' => 'dessert',
                'restrictions' => 'gluten-free',
                'instructions' => 'Mix ingredients. Bake at 350°F for 10 minutes.',
                'prep_time' => 15,
                'cooking_time' => 10,
                'total_time' => 25,
            ],
            // Regular Recipes
            [
                'name' => 'Beef Stew',
                'description' => 'Hearty beef stew with vegetables.',
                'difficulty' => 'medium',
                'category' => 'main course',
                'restrictions' => null,
                'instructions' => 'Brown beef. Add vegetables and broth. Simmer until tender.',
                'prep_time' => 20,
                'cooking_time' => 120,
                'total_time' => 140,
            ],
            [
                'name' => 'Chicken Alfredo',
                'description' => 'Creamy chicken Alfredo pasta.',
                'difficulty' => 'easy',
                'category' => 'main course',
                'restrictions' => null,
                'instructions' => 'Cook pasta. Prepare Alfredo sauce. Add chicken.',
                'prep_time' => 15,
                'cooking_time' => 20,
                'total_time' => 35,
            ],
            [
                'name' => 'Chocolate Cake',
                'description' => 'Rich chocolate cake with frosting.',
                'difficulty' => 'medium',
                'category' => 'dessert',
                'restrictions' => null,
                'instructions' => 'Mix ingredients. Bake at 350°F for 30 minutes. Frost.',
                'prep_time' => 20,
                'cooking_time' => 30,
                'total_time' => 50,
            ],
            [
                'name' => 'Caesar Salad',
                'description' => 'Classic Caesar salad with homemade dressing.',
                'difficulty' => 'easy',
                'category' => 'salad',
                'restrictions' => null,
                'instructions' => 'Prepare dressing. Toss with lettuce and croutons.',
                'prep_time' => 15,
                'cooking_time' => 0,
                'total_time' => 15,
            ],
        ];

        foreach($recipes as $recipe)
        {
            DB::table('recipes')->insert($recipe);
        }
    }
}
