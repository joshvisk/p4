<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHopsUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			Schema::create('hops_uses', function (Blueprint $table)
			{			
				# Increments method will make a Primary, Auto-Incrementing field.
				$table->increments('hops_uses_id');
				
				# This generates two columns: `created_at` and `updated_at` to
				# keep track of changes to a row
				$table->timestamps();
				
				# The rest of the fields...
				$table->string('hops_uses');
			});
		}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop('hops_uses');
    }
}