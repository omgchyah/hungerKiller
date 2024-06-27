<?php

namespace App\Http\Controllers;

use App\Enums\Category;
use App\Enums\Difficulty;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        
        //return $recipes;
        return view('recipes.index', compact('recipes'));

    //Segunda manera de hacerlo, con un array
/*         return view('recipes.index', [
            'recipes' => $recipes
        ]); */
    }

    public function create()
    {
        $difficulties = Difficulty::cases();
        $categories = Category::cases();

        return view('recipes.create', [
            'difficulties' => $difficulties,
            'categories' => $categories
        ]);
    }    

    public function show($recipe)
    {
        $recipe = Recipe::find($recipe);

        return view('recipes.show', compact('recipe'));
    }


}
