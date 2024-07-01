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
    
    public function store(Request $request)
    {
        $recipe = new Recipe();
        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->difficulty = $request->difficulty;
        $recipe->servings = $request->servings;
        $recipe->category = $request->category;
        $recipe->restrictions = $request->restrictions ? $request->restrictions : null;
        $recipe->prep_time = $request->prep_time;
        $recipe->cooking_time = $request->cooking_time;
        $recipe->total_time = $request->prep_time + $request->cooking_time;$request->instructions;
        $recipe->instructions = $request->instructions;

        $recipe->save();

        $ingredients = $request->input('ingredients', []);
        $measurements = $request->input('measurements', []);
        $quantities = $request->input('quantities', []);

        foreach ($ingredients as $index => $ingredientName) {

            // Check if the ingredient already exists
            $ingredient = Ingredient::firstOrCreate(['name' => $ingredientName]);

            // Attach the ingredient to the recipe with additional data
            $recipe->ingredients()->attach($ingredient->id, [
                'measurement' => $measurements[$index],
                'quantity' => $quantities[$index],
            ]);
        }

        return redirect('/recipes');
    }

    public function show($recipe)
    {
        $recipe = Recipe::find($recipe);

        return view('recipes.show', compact('recipe'));
    }


}
