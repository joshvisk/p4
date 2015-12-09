<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('users', function (Blueprint $table) {
			
			# Increments method will make a Primary, Auto-Incrementing field.
			$table->increments('id');
			
			# This generates two columns: `created_at` and `updated_at` to
			# keep track of changes to a row
			$table->timestamps();

			# The rest of the fields...
			$table->string('first_name');
			$table->string('last_name');
			$table->string('username')->unique();
			$table->string('email')->unique();				
			$table->text('password', 60);	
			$table->rememberToken();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('users');
    }
}
