<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function beer() {
        # INgredient belongs to Recipe
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('\App\Beer');
    }}
