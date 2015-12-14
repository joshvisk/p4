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
	
	public function ingredient() {
        # Recipe has many ingredients
        # Define a one-to-many relationship.
        return $this->hasMany('\App\Ingredient');
    }
}
