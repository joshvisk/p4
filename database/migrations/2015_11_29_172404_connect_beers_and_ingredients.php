<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectBeersAndIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('ingredients', function (Blueprint $table) {
			$table->integer('beer_id')->unsigned();
			$table->foreign('beer_id')->references('id')->on('beers')->onUpdate('cascade')
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
		Schema::table('ingredients', function (Blueprint $table) {
			$table->dropForeign('ingredients_beer_id_foreign');
			$table->dropColumn('beer_id');
		});
	}
}