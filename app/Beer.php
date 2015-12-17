<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
	public function recipe() {
        # Beer has many recipe parts
        # Define a one-to-Many relationship.
        return $this->hasMany('\App\Recipe');
    }
	
	public function user() {
		# Beer belongs to User
		# Defines an inverse one-to-many relationship
	    return $this->belongsTo('\App\User');			
	}
}
