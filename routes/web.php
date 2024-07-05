<?php

require __DIR__.'/auth.php';

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/recipes', [RecipeController::class, 'index']);

Route::get('/recipes/create', [RecipeController::class, 'create']);

//Because /recipes/{recipe} is defined before /recipes/search, any request to /recipes/search is being interpreted as a request to /recipes/{recipe} with search as the {recipe} parameter.
//Recipe/search need to be before

 Route::get('/recipes/search', [RecipeController::class, 'search']);

Route::get('/recipes/{recipe}', [RecipeController::class, 'show']);

Route::post('/recipes', [RecipeController::class, 'store']);

Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit']);

Route::put('/recipes/{recipe}', [RecipeController::class, 'update']);

Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy']);


 






