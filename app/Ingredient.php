<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function recipe() {
        # INgredient belongs to Recipe
        # Define an inverse one-to-many relationship.
        return $this->belongsToMany('\App\Recipe')->withTimestamps();
    }}
