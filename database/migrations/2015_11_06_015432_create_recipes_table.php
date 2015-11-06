<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			Schema::create('recipes', function (Blueprint $table)
			{			
				# Increments method will make a Primary, Auto-Incrementing field.
				$table->increments('recipe_id');
				
				# This generates two columns: `created_at` and `updated_at` to
				# keep track of changes to a row
				$table->timestamps();
				
				# The rest of the fields...
				$table->integer('beer_id')->unsigned();
				$table->integer('mash_time');	
				$table->text('directions');				
				$table->index('beer_id');
				$table->foreign('beer_id')->references('beer_id')->on('beers')->onUpdate('cascade')
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
    	Schema::drop('recipes');
    }
}
