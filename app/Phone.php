<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
	public function user() {
		# Phone belongs to User
		# Defines an inverse one-to-many relationship
	    return $this->belongsTo('\App\User');
	}}
