<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectBeersAndRecipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('recipes', function (Blueprint $table) {
			$table->integer('beer_id')->unsigned();
			$table->foreign('beer_id')->references('id')->on('beers');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('recipes', function (Blueprint $table) {
			$table->dropForeign('recipes_beer_id_foreign');
			$table->dropColumn('beer_id');
		});
	}
}
