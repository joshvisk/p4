<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('addresses', function (Blueprint $table)
		{			
			# Increments method will make a Primary, Auto-Incrementing field.
			$table->increments('address_id');
			
			# This generates two columns: `created_at` and `updated_at` to
			# keep track of changes to a row
			$table->timestamps();
			
			# The rest of the fields...
			$table->text('street_address');	
			$table->string('city');				
			$table->integer('state');				
			$table->integer('zip');	
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop('addresses');
    }
}
