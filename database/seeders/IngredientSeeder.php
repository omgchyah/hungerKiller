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
            'Oil',
            'Yellow onion',
            'Garlic',
            'Vegetable broth',
            'Textured vegetable protein',
            'Chili powder',
            'Paprika',
            'Cumin',
            'Tortillas',
            'Salt',
            'Guacamole',
            'Cilantro'
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
