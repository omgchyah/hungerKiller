<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            'Salt',
            'Sugar',
            'Flour',
            'Eggs',
            'Milk',
            'Butter',
            'Cheese',
            'Garlic',
            'Onion',
            'Tomato',
            'Potato',
            'Carrot',
            'Chicken',
            'Beef',
            'Pork',
            'Fish',
            'Olive Oil',
            'Rice',
            'Pasta',
            'Bread',
            'Baking Powder',
            'Baking Soda',
            'Vanilla Extract',
            'Cinnamon',
            'Black Pepper',
            'Red Pepper Flakes',
            'Paprika',
            'Cumin',
            'Oregano',
            'Basil',
            'Parsley',
            'Thyme',
            'Rosemary',
            'Bay Leaves',
            'Soy Sauce',
            'Vinegar',
            'Honey',
            'Lemon',
            'Lime',
            'Orange',
            'Apple',
            'Banana',
            'Strawberry',
            'Blueberry',
            'Grapes',
            'Mushrooms',
            'Spinach',
            'Broccoli',
            'Cauliflower',
            'Zucchini',
            'Bell Pepper',
            'Chili Pepper',
            'Corn',
            'Peas',
            'Beans',
            'Lentils',
            'Chickpeas',
            'Peanuts',
            'Almonds',
            'Walnuts',
            'Cashews',
            'Coconut Milk',
            'Yogurt',
            'Cream',
            'Mozzarella',
            'Parmesan',
            'Feta',
            'Ricotta',
            'Cream Cheese',
            'Mayonnaise',
            'Ketchup',
            'Mustard',
            'BBQ Sauce',
            'Hot Sauce',
            'Chocolate',
            'Cocoa Powder',
            'Gelatin',
            'Peanut Butter',
            'Jam',
            'Olives',
            'Pickles',
            'Capers',
            'Anchovies',
            'Tuna',
            'Salmon',
            'Shrimp',
            'Crab',
            'Lobster',
            'Scallops',
            'Squid',
            'Octopus',
            'Clams',
            'Oysters',
        ];

        foreach($ingredients as $ingredient)
        {
            DB::table('ingredients')->insert([
                'name' => $ingredient,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
