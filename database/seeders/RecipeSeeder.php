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
            [
                'name' => 'Vegan tacos',
                'description' => 'Delicious, fast, easy, cheap, and vegan! Everything about these easy TVP tacos speaks to my soul.',
                'difficulty' => 'easy',
                'servings' => 8,
                'category' => 'main course',
                'restrictions' => 'vegan',
                'instructions' => 'Heat the oil in a large skillet or non-stick frying pan. When hot add the onion and garlic and sauté until the onion turns translucent and just begins to brown, about 5 minutes. Mix in the vegetable broth, TVP, chili powder, smoked paprika, cumin, cayenne, and salt. Bring to a simmer and cook for about 5 minutes until the vegetable broth has absorbed and the TVP is tender and chewy. If it gets a bit dry just add a splash more vegetable broth. Or if it is too wet continue to simmer a little longer until the vegetable broth is absorbed. Spoon into tortilla shells, and decorate with your favorite toppings. Enjoy!',
                'prep_time' => 5,
                'cooking_time' => 10,
                'total_time' => 15,
            ],
        ];

        foreach($recipes as $recipe)
        {
            $recipeId = DB::table('recipes')->insertGetId([
                'name' => $recipe['name'],
                'description' => $recipe['description'],
                'difficulty' => $recipe['difficulty'],
                'servings' => $recipe['servings'],
                'category' => $recipe['category'],
                'restrictions' => $recipe['restrictions'],
                'instructions' => $recipe['instructions'],
                'prep_time' => $recipe['prep_time'],
                'cooking_time' => $recipe['cooking_time'],
                'total_time' => $recipe['total_time'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
    }
}
