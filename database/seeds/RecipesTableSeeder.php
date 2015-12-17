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
		//type 1 - grain, 2 - hops, 3 - yeast, 4 - sugar, 4 - additives
		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','2 Row Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain1',
			'amt' => '15',
			'measure' => 'oz',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Crystal Malt 40L')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain2',
			'amt' => '1',
			'measure' => 'oz',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Munich Malt')->pluck('id');
 		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain3',
			'amt' => '.5',
			'measure' => 'oz',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Victory Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain4',
			'amt' => '.5',
			'measure' => 'oz',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Columbus')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops1',
			'amt' => '3',
			'measure' => 'oz',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Cascade')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops2',
			'amt' => '4',
			'measure' => 'oz',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Wyeast 1056-Ale American')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'amt' => '1',
			'measure' => 'package',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Amylase Enzyme')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive1',
			'amt' => '1',
			'measure' => 'oz',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		//type 1 - grain, 2 - hops, 3 - yeast, 4 - additives
		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','2 Row Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain1',
			'amt' => '10',
			'measure' => 'oz',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Crystal Malt 80L')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain2',
			'amt' => '1',
			'measure' => 'oz',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
 		$ingredient_id = \App\Ingredient::where('name','=','Cascade')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops1',
			'amt' => '.75',
			'measure' => 'oz',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Sterling')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops1',
			'amt' => '1',
			'measure' => 'package',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Wyeast 1007-Ale German')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'amt' => '1',
			'measure' => 'oz',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
    }
}
