<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function recipes() {
        # Ingredient has many Recipes
        # Define an inverse one-to-many relationship.
        return $this->hasMany('\App\Recipe');
    }}
