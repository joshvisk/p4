<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//type 1 - grain, 2 - hops, 3 - yeast, 4 - additives
		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name', '=', '2 Row Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_amt' => '7',
			'beer_id' => $beer_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name', '=', 'Crystal Malt 40L')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_amt' => '2',
			'beer_id' => $beer_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name', '=', 'Munich Malt')->pluck('id');
 		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_amt' => '.5',
			'beer_id' => $beer_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name', '=', 'Victory Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_amt' => '1',
			'beer_id' => $beer_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name', '=', 'Columbus')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'hops_amt' => '3',
			'beer_id' => $beer_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name', '=', 'Cascade')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'hops_amt' => '4',
			'beer_id' => $beer_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name', '=', 'Wyeast 1056-Ale American')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'yeast_amt' => '1',
			'beer_id' => $beer_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name', '=', 'Amylase Enzyme')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'additive_amt' => '1',
			'beer_id' => $beer_id,
		]);
    }
}
