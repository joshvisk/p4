<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	public function user() {
		# Address belongs to User
		# Defines an inverse one-to-many relationship
	    return $this->belongsTo('\App\User');
	}
}
