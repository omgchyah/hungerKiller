<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        //return $recipes;
    return view('recipes.index', compact('recipes'));
/*         return view('recipes.index', [
            'recipes' => $recipes
        ]); */


    }
}
