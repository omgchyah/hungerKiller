<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class)->withPivot('measurement', 'quantity')->withTimestamps();
    }

    //Mutator
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower(trim($value)));
    }

    public static function searchByKeywords(array $keywords)
    {
        // Convert keywords to lowercase
        $keywordsArray = array_map('strtolower', $keywords);
/* 
        return self::whereIn('name', $keywordsArray)->get(); */

        // Build the query with LIKE conditions
        return self::where(function ($query) use ($keywordsArray) {
        foreach ($keywordsArray as $keyword) {
            $query->orWhere('name', 'LIKE', '%' . $keyword . '%');
            }
            })->get();
    }


}
