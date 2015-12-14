<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('ingredient_recipe', function (Blueprint $table) {
	
			$table->increments('id');
			$table->timestamps();
	
			# `ingredient_id` and `recipe_id` will be foreign keys, so they have to be unsigned
			#  Note how the field names here correspond to the tables they will connect...
			# `ingredient_id` will reference the `ingredients table` and `recipe_id` will 
			# reference the `recipe` table.
			$table->integer('ingredient_id')->unsigned();
			$table->integer('recipe_id')->unsigned();
	
			# Make foreign keys
			$table->foreign('ingredient_id')->references('id')->on('ingredients');
			$table->foreign('recipe_id')->references('id')->on('recipes');
		});
	}
	
	public function down()
	{
		Schema::drop('ingredient_recipe');
	}
}