<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
	public function beer() {
	 	# Recipe belongs to Beeer
		# Defines and inverse one-to-many relationship
	    return $this->belongsTo('\App\Beer');
	}
}
