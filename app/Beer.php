<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
	public function recipe() {
        # Beer has one recipe
        # Define a one-to-one relationship.
        return $this->hasOne('\App\Recipe');
    }
	
	public function user() {
		# Beer belongs to User
		# Defines an inverse one-to-many relationship
	    return $this->belongsTo('\App\User');			
	}
}
