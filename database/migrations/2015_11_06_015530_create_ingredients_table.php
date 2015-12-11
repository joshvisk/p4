<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('ingredients', function (Blueprint $table)
		{			
			# Increments method will make a Primary, Auto-Incrementing field.
			$table->increments('id');
			
			# This generates two columns: `created_at` and `updated_at` to
			# keep track of changes to a row
			$table->timestamps();
			
			# The rest of the fields...
			$table->integer('type');	
			$table->integer('grain');	
			$table->decimal('grain_amt');	
			$table->integer('hops');	
			$table->decimal('hops_amt');	
			$table->integer('hop_type');	
			$table->integer('yeast');	
			$table->decimal('yeast_amt');
			$table->integer('additive');
			$table->decimal('additive_amt');
			$table->integer('additive_measure');	
			$table->decimal('water_amt');	
			$table->integer('boil_time');
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop('ingredients');
    }
}
