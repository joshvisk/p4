<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function beer() {
        # INgredient belongs to Recipe
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('\App\Beer');
    }
	
	public function ingredients() {
        # Recipe has many ingredients
        # Define a many-to-many relationship.
        return $this->hasMany('\App\Ingredient');
    }
}
