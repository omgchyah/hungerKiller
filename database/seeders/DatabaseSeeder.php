<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Register the IngredientSeeder and RecipeSeeder
        $this->call([
            IngredientSeeder::class,
            RecipeSeeder::class,
        ]);
    }
}
