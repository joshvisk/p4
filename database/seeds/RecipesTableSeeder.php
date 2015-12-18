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
			'measure' => 'lb',
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
			'measure' => 'lb',
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
			'measure' => 'lb',
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
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain5',
			'amt' => '',
			'measure' => '',
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
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
						
		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Wyeast 1056-Ale American')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'order' => 'yeast',
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

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive2',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar1',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar2',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		//type 1 - grain, 2 - hops, 3 - yeast, 4 - sugar, 4 - additives
		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','2 Row Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain1',
			'amt' => '15',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Crystal Malt 40L')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain2',
			'amt' => '1',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Munich Malt')->pluck('id');
 		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain3',
			'amt' => '.5',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Victory Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain4',
			'amt' => '.5',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
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

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
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

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
						
		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Wyeast 1056-Ale American')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'order' => 'yeast',
			'amt' => '1',
			'measure' => 'package',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
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

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive2',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar1',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar2',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Alaskan Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		//type 1 - grain, 2 - hops, 3 - yeast, 4 - sugar, 4 - additives
		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','2 Row Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain1',
			'amt' => '15',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Crystal Malt 40L')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain2',
			'amt' => '1',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Munich Malt')->pluck('id');
 		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain3',
			'amt' => '.5',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Victory Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain4',
			'amt' => '.5',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
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

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
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

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
						
		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Wyeast 1056-Ale American')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'order' => 'yeast',
			'amt' => '1',
			'measure' => 'package',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
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

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive2',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar1',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar2',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jill Lager')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		//type 1 - grain, 2 - hops, 3 - yeast, 4 - sugar, 4 - additives
		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','2 Row Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain1',
			'amt' => '15',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Crystal Malt 40L')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain2',
			'amt' => '1',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Munich Malt')->pluck('id');
 		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain3',
			'amt' => '.5',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Victory Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain4',
			'amt' => '.5',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
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

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
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

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
						
		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Wyeast 1056-Ale American')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'order' => 'yeast',
			'amt' => '1',
			'measure' => 'package',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
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

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive2',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar1',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar2',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Amber')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		//type 1 - grain, 2 - hops, 3 - yeast, 4 - sugar, 4 - additives
		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','2 Row Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain1',
			'amt' => '15',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Crystal Malt 40L')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain2',
			'amt' => '1',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Munich Malt')->pluck('id');
 		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain3',
			'amt' => '.5',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Victory Malt')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain4',
			'amt' => '.5',
			'measure' => 'lb',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'order' => 'grain5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
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

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
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

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'order' => 'hops5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);
						
		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','Wyeast 1056-Ale American')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'order' => 'yeast',
			'amt' => '1',
			'measure' => 'package',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
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

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive2',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'order' => 'additive5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar1',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar2',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar3',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar4',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Jamal Porter')->pluck('id');
		$ingredient_id = \App\Ingredient::where('name','=','')->pluck('id');
		DB::table('recipes')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'order' => 'sugar5',
			'amt' => '',
			'measure' => '',
			'beer_id' => $beer_id,
			'ingredient_id' => $ingredient_id,
		]);		
    }
}
