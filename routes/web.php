<?php

require __DIR__.'/auth.php';

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/recipes', [RecipeController::class, 'index'])
    ->name('recipes.index');

Route::get('/recipes/create', [RecipeController::class, 'create'])
    ->name('recipes.create');

Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])
    ->name('recipes.show');

Route::post('/recipes', [RecipeController::class, 'store'])
    ->name('recipes.store');







