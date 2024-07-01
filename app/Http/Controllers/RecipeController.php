<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use App\Models\Ingredient;
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
        $difficulties = Recipe::getDifficultyOptions();
        $categories = Recipe::getCategoryOptions();
        $restrictions = Recipe::getRestrictionOptions();
        $ingredients = Ingredient::all();

        return view('recipes.create', [
            'difficulties' => $difficulties,
            'categories' => $categories,
            'restrictions' => $restrictions,
            'ingredients' => $ingredients
        ]);
    }
    
    public function store()
    {
        
    }

    public function show($recipe)
    {
        $recipe = Recipe::find($recipe);

        return view('recipes.show', compact('recipe'));
    }


}
