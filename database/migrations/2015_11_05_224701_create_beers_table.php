<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {	
	
		Schema::create('beers', function (Blueprint $table) {
		
			# Increments method will make a Primary, Auto-Incrementing field.
			$table->increments('id');
			
			# This generates two columns: `created_at` and `updated_at` to
			# keep track of changes to a row
			$table->timestamps();
			
			# The rest of the fields...
			$table->string('beer_name');
			$table->boolean('public');
			$table->integer('mash_time');	
			$table->text('directions');
		});
		
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop('beers');
    }
}
