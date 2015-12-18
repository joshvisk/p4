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
        # Define a many-to-many relationship.
        return $this->hasMany('\App\Ingredient');
    }
	
	public function ingredientsByOrder($recipeItems) {
		$ingredient_order = [	"grain1","grain2","grain2","grain3","grain4","grain5",
								"hops1","hops2","hops3","hops4","hops5",
								"yeast",
								"sugar1","sugar2","sugar3","sugar4","sugar5",
								"additive1","additive2","additive3","additive4","additive5",];
		$sorted_recipe_items[] = "";
		foreach($recipeItems as $ingredient) {
            for($i=0; $i<count($ingredient_order); $i++) {
				if($ingredient->order == $ingredient_order[$i]) {
					$sorted_recipe_items[$ingredient->order] = $ingredient;
				}
			}
        }
		
		return $sorted_recipe_items;
	}
}
