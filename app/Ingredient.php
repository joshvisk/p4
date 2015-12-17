<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function recipes() {
        # Ingredient has many Recipes
        # Define an inverse one-to-many relationship.
        return $this->hasMany('\App\Recipe');
    }
	
    public function getIngredientsForDropdown() {
        $ingredients = $this->orderby('name','ASC')->get();
        $ingredients_for_dropdown = [];
        foreach($ingredients as $ingredient) {
            $ingredients_for_dropdown[$ingredient->id] = $ingredient->name;
        }
        return $ingredients_for_dropdown;
    }	
}
