<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
    'name', 'description', 'difficulty', 'servings', 'category', 'restrictions', 'prep_time', 'cooking_time', 'total_time', 'instructions'
    ];

    //Method to fetch enum values
    private static function getEnumValues($table, $column)
    {
        $result = DB::select("SHOW COLUMNS FROM {$table} WHERE Field = ?", [$column]);$type = $result[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach(explode(',', $matches[1]) as $value) {
            $enum[] = trim($value, "'");
        }
        return $enum;
    }

    // Return the possible values for the difficulty enum
    public static function getDifficultyOptions()
    {
        return self::getEnumValues('recipes', 'difficulty');
    }

    // Return the possible values for the category enum
    public static function getCategoryOptions()
    {
        return self::getEnumValues('recipes', 'category');
    }

    // Return the possible values for the restrictions enum
    public static function getRestrictionOptions()
    {
        return self::getEnumValues('recipes', 'restrictions');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->withPivot('measurement', 'quantity')->withTimestamps();
    }

 /**
  * Set the recipe name
  *
  *@param string $value
  *@return void
  */

  public function setNameAttribute($value)
  {
    $this->attributes['name'] = ucfirst(strtolower($value));
  }

  public function sanitizeParagraph($value)
  {
    $value = trim($value);

    $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

    // Normalize line breaks to a single format (e.g., \n)
    $value = preg_replace("/\r\n|\r|\n/", "\n", $value);

    return $value;
  }
  public function setDescriptionAttribute($value)
  {
    $this->attributes['description'] = $this->sanitizeParagraph($value);
  }

  public function setInstructionsAttribute($value)
  {
    $this->attributes['instructions'] = $this->sanitizeParagraph($value);
  }
    
}


