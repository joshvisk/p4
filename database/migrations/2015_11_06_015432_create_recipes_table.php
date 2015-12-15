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
			$table->increments('id');
			
			# This generates two columns: `created_at` and `updated_at` to
			# keep track of changes to a row
			$table->timestamps();
			
			# The rest of the fields...
			$table->integer('type');
			$table->integer('amt');
			$table->string('measure');	
/*			$table->decimal('grain_amt');	
			$table->decimal('hops_amt');	
			$table->decimal('yeast_amt');
			$table->decimal('sugar_amt');
			$table->decimal('additive_amt');*/
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
    	Schema::drop('recipes');
    }
}
