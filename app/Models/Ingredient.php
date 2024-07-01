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

    //Mutador
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst(trim($value));
    }
}
