<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
	public function ingredient() {
        # Beer has many Ingredients
        # Define a one-to-many relationship.
        return $this->hasMany('\App\Ingredient');
    }
	
	public function user() {
		# Beer belongs to User
		# Defines an inverse one-to-many relationship
	    return $this->belongsTo('\App\User');			
	}
}
