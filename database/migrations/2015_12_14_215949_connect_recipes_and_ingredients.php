<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectRecipesAndIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('recipes', function (Blueprint $table) {
			$table->integer('ingredient_id')->unsigned();
			$table->foreign('ingredient_id')->references('id')->on('ingredients');
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
			$table->dropForeign('recipes_ingredient_id_foreign');
			$table->dropColumn('ingredient_id');
		});
	}
}
