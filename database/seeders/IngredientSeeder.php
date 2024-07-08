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
            'Oil', //1
            'Yellow onion', //2
            'Garlic', //3
            'Vegetable broth',
            'Textured vegetable protein',
            'Chili powder',
            'Paprika',
            'Cumin',
            'Tortillas',
            'Salt', //10
            'Guacamole',
            'Cilantro',
            'Chicken cutlets',
            'Black pepper',
            'Jalapeño',
            'Ginger',
            'Tomatoes',
            'Tomato paste',
            'Unsweetened coconut milk',
            'Brown sugar', //20
            'Fresh cilantro leaves',
            'fresh lime juice',
            'Mushrooms',
            'Tamari',
            'Balsamic vinegar',
            'Sriracha',
            'Walnuts',
            'Flaxseeds',
            'Brown rice',
            'Panko brad crumbs', //30
            'Worcestershire sauce',
            'Buns',
            'Unsalted butter', // 33
            '60-70% cacao chocolate', // 34
            'Cocoa powder', // 35
            'Espresso powder', // 36
            'Granulated sugar', // 37
            'Vanilla extract', // 38
            'Flaky sea salt', // 39
            'Eggs', // 40
            'All-purpose flour', // 41
            'Kosher salt', // 42            
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
