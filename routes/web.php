<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/recipes', [RecipeController::class, 'index']);

Route::get('/recipes/create', [RecipeController::class, 'create']);

Route::get('/recipes/{recipe}', [RecipeController::class, 'show']);



require __DIR__.'/auth.php';
