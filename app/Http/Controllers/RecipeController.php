<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::orderBy('name', 'asc')
            ->paginate(10);
        
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
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'difficulty' => 'required|in:easy,medium,hard',
            'servings' => 'required|integer|min:1',
            'category' => 'required|in:appetizer,main course,side dish,dessert,salad,soup,beverage,snack,breakfast',
            'restrictions' => 'nullable|in:vegan,vegetarian,gluten-free',
            'prep_time' => 'required|integer|min:0',
            'cooking_time' => 'required|integer|min:0',
            'instructions' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ingredients' => 'required|array',
            'ingredients.*' => 'required|string|max:255',
            'measurements' => 'required|array',
            'measurements.*' => 'required|string|max:255',
            'quantities' => 'required|array',
            'quantities.*' => 'required|numeric|min:0',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

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
        $recipe->image_path = $imagePath;

        $recipe->save();

        $recipe->addIngredients(
            $request->input('ingredients', []),
            $request->input('measurements', []),
            $request->input('quantities', [])
        );

        return redirect('/recipes')->with('success', 'Recipe create successfully!');
    }

    public function show($recipe)
    {
        $recipe = Recipe::with('ingredients')->find($recipe);

        return view('recipes.show', compact('recipe'));
    }

    public function edit($recipe)
    {
        $recipe = Recipe::find($recipe);

        $difficulties = Recipe::getDifficultyOptions();
        $categories = Recipe::getCategoryOptions();
        $restrictions = Recipe::getRestrictionOptions();
        $ingredients = Ingredient::all();

        return view('recipes.edit', [
            'recipe' => $recipe,
            'difficulties' => $difficulties,
            'categories' => $categories,
            'restrictions' => $restrictions,
            'ingredients' => $ingredients
        ]);
    }

    public function update(Request $request, $recipe)
    {

        $recipe = Recipe::findOrFail($recipe);

          $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'difficulty' => 'required|in:easy,medium,hard',
            'servings' => 'required|integer|min:1',
            'category' => 'required|in:appetizer,main course,side dish,dessert,salad,soup,beverage,snack,breakfast',
            'restrictions' => 'nullable|in:vegan,vegetarian,gluten-free',
            'prep_time' => 'required|integer|min:0',
            'cooking_time' => 'required|integer|min:0',
            'instructions' => 'required|string',
            //'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'ingredients' => 'required|array',
            //Error al validar arrays
            //'ingredients.*' => 'required|string|max:255',
            //'measurements' => 'required|array',
            //'measurements.*' => 'required|string|max:255',
            //'quantities' => 'required|array',
            //'quantities.*' => 'required|numeric|min:0', 
        ]);

        if ($request->hasFile('image')) {
            $recipe->image_path = $request->file('image')->store('images', 'public');
            $recipe->save();
        }

        $recipe->update($request->only([
            'name', 'description', 'difficulty', 'servings', 'category', 'restrictions',
            'prep_time', 'cooking_time', 'instructions', 'image'
        ]));

        $recipe->removeIngredients($request->input('remove_ingredient_ids', []));
    
        $recipe->addIngredients(
            $request->input('ingredients', []),
            $request->input('measurements', []),
            $request->input('quantities', [])
        );
 
        return redirect("/recipes/{$recipe->id}")->with('success', 'Recipe updated successfully!');
    }

    public function destroy($recipe)
    {
        $recipe = Recipe::find($recipe);
        $recipe->delete();

        return redirect("/recipes");
    }

}
