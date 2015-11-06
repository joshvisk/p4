<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
			Schema::create('passwords', function (Blueprint $table)
			{			
				# Increments method will make a Primary, Auto-Incrementing field.
				$table->increments('password_id');
				
				# This generates two columns: `created_at` and `updated_at` to
				# keep track of changes to a row
				$table->timestamps();
				
				# The rest of the fields...
				$table->integer('user_id')->unsigned();
				$table->text('password');	
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
    	Schema::drop('passwords');
    }
}