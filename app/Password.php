<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
	public function user() {
		# Password belongs to User
		# Defines an inverse one-to-many relationship
	    return $this->belongsTo('\App\User');
	}}
