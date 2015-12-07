<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
	public function user() {
		# Email belongs to User
		# Defines an inverse one-to-many relationship
	    return $this->belongsTo('\App\User');
	}}
