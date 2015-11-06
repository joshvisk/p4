<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			Schema::create('recipe_ingredients', function (Blueprint $table)
			{			
				# Increments method will make a Primary, Auto-Incrementing field.
				$table->increments('ingredient_id');
				
				# This generates two columns: `created_at` and `updated_at` to
				# keep track of changes to a row
				$table->timestamps();
				
				# The rest of the fields...
				$table->integer('recipe_id')->unsigned();
				$table->integer('grain');	
				$table->decimal('grain_amt');	
				$table->integer('hops');	
				$table->decimal('hops_amt');	
				$table->integer('hop_type');	
				$table->integer('yeast');	
				$table->decimal('yeats_amt');	
				$table->decimal('water_amt');	
				$table->integer('boil_time');				
				$table->index('recipe_id');
				$table->foreign('recipe_id')->references('recipe_id')->on('recipes')->onUpdate('cascade')
					->onDelete('cascade');	
			});
		}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop('recipe_ingredients');
    }
}
