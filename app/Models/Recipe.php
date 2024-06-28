<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'difficulty', 'servings', 'category', 'restrictions', 'prep_time', 'cokking_time', 'total_time'
    ];

    // Return the possible values for the difficulty enum
    public static function getDifficultyOptions()
    {
        return ['easy', 'medium', 'hard'];
    }

    // Return the possible values for the category enum
    public static function getCategoryOptions()
    {
        return [
            'appetizer', 'main course', 'side dish', 'dessert',
            'salad', 'soup', 'beverage', 'snack'
        ];
    }

    // Return the possible values for the restrictions enum
    public static function getRestrictionOptions()
    {
        return ['vegan', 'vegetarian', 'gluten-free'];
    }
    
}


