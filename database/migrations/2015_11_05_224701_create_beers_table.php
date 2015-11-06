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
			$table->increments('beer_id');
			
			# This generates two columns: `created_at` and `updated_at` to
			# keep track of changes to a row
			$table->timestamps();
			
			# The rest of the fields...
			$table->string('beer_name');
			$table->integer('user_id')->unsigned();
			$table->boolean('public');	
			$table->index('user_id');
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')
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
    	Schema::drop('beers');
    }
}
