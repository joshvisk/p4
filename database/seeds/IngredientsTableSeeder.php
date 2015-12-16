<?php

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '0',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => '2 Row Malt',
		]);

		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Munich Malt',
		]);

		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Wheat Malt',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Dextrin Malt',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Rye Malt',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Black Patent',
		]);
		
	DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Chocolate Malt',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Crystal Malt 120L',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Crystal Malt 150L',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Crystal Malt 20L',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Crystal Malt 40L',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Crystal Malt 80L',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Roast Barley 350L',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Roast Barley 500L',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Special Roast 50L',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Victory Malt',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'America',
			'name' => 'Wheat Berries',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Flaked',
			'name' => 'Flaked Barley',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Flaked',
			'name' => 'Flaked Maize',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Flaked',
			'name' => 'Flaked Oats',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Flaked',
			'name' => 'Flaked Rice',
		]);
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Flaked',
			'name' => 'Rice Hulls',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Flaked',
			'name' => 'Flaked Rye',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Flaked',
			'name' => 'Flaked Wheat',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Belgian',
			'name' => 'Aromatic Malt',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Belgian',
			'name' => 'Biscuit',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Belgian',
			'name' => 'CaraMunich 55L',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Belgian',
			'name' => 'CaraVienne 35L',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Belgian',
			'name' => 'Pils Malt',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Belgian',
			'name' => 'Special B',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Belgian',
			'name' => 'Kiln Coffee Malt',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'British',
			'name' => 'Amber Malt',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'British',
			'name' => 'British Crystal 55L',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'British',
			'name' => 'Brown Malt',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'British',
			'name' => 'Carastan 35L',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'British',
			'name' => 'Pale Malt',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'British',
			'name' => 'Peated Malt',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'British',
			'name' => 'Torrified Wheat',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Canadian',
			'name' => 'Gambrinus Pale',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'Canadian',
			'name' => 'Honey Malt',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'German',
			'name' => 'Acidulated Malt',
		]);			
								
	DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'German',
			'name' => 'Carafa Malt',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'German',
			'name' => 'Cara Rye',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'German',
			'name' => 'Cara Wheat',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'German',
			'name' => 'Chocolate Rye',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'German',
			'name' => 'Chocolate Wheat',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'German',
			'name' => 'Caramel Pils Carafoam',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'German',
			'name' => 'Carahell Light Chrystal 10L',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'German',
			'name' => 'Caramunich 55L',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'German',
			'name' => 'Melanoidin Malt',
		]);	
											
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'German',
			'name' => 'Pils Malt Weyermann',
		]);										
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '1',
			'grain_type' => 'German',
			'name' => 'Vienna Malt',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Amarillo',
		]);

		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Cascade',
		]);

		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Centennial',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Chinook',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Citra',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Columbus',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Chrystal',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Saaz',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Fuggles',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Golding',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Hallertauer',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Liberty',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Magnum',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Mosaic',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Mt. Hood',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Nor. Brewer',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Nugget',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Perle',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Simcoe',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Sorachi Ace',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Sterling',
		]);
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Tettnanger',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Warrior',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '2',
			'name' => 'Willamette',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Ale Yeast-Belgian Saison',
		]);

		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Ale Yeast-CDC Cask Conditioning',
		]);

		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Ale Yeast-Muntons',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Ale Yeast-Nottingham',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Ale Yeast-Safale 04',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Ale Yeast-Safale 05 Amer Ale',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Ale Yeast-Safbrew 06 Wheat',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Ale Yeast-Windsor',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Lager Yeast-Vierka',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1007-Ale German',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1010-Am Wheat',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1028-Ale London',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1056-Ale American',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1084-Ale Irish',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1098-Ale British',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1214-Belgian Abbey',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1272-American II',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1275-Thames Valley Ale',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1318-London III',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1332-Northwest',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1388-Bel Strong',
		]);
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1728-Scottish Ale',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 1968-London Spec',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 2007-Lager Pilsner',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 2035-Lager American',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 2112-Lager California',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 2124-Lager Bohemian',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 2206-Lager Bavarian',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 2308-Lager Munich',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 2565-Kolsch',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 3056-Bav. Wheat',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 3068-Wheinstephen',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast 3944-Belgian White',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '3',
			'name' => 'Wyeast Pacman-Rogue',
		]);			
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'name' => 'Candi Sugar-Clear',
		]);

		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'name' => 'Candi Sugar-Dark',
		]);

		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'name' => 'Candi Sugar Liquid 180L',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'name' => 'Candi Sugar Liquid 45L',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'name' => 'Candi Sugar Liquid 90L',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'name' => 'Candi Sugar Liquid 1-Simplicity',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'name' => 'Corn Sugar',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'name' => 'Wildflower Honey',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'name' => 'Lactose',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'name' => 'Malto-Dextrin',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '4',
			'name' => 'Rice Syrup-Solid',
		]);	
						
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => '5.2 ph Stabilizer',
		]);

		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => '5.2 ph Stabilizer',
		]);

		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Amylase Enzyme',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Bitter Orange Peel',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Brewing Salts-Burton',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Cacao Nibs',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Calcium Chloride',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Carbonation Drops',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Cinnamon Stick',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Clarity Firm',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Coriander Seed',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Elderberries-Dried',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Elderflowers',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'FermCap',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Dried Ginger',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Grapefruit Peel',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Gypsum',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Heading Powder',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Heather Tips',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Irish Moss Flakes',
		]);
		
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Dry Isinglass Finings',
		]);
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Juniper Berries',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Lactic Acid',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Lemon Peel',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Brewers Licorice',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Dried Licorice Root',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Lime Peel',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Paradise Seed',
		]);			
					
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Indian Sarsaparilla',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Spruce Essence',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Star Anise',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Sweet Orange Peel',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Vanilla Bean',
		]);			
								
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Whirlfloc',
		]);
											
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Wintergreen Leaves',
		]);												
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'type' => '5',
			'name' => 'Wormwood',
		]);	
	}
}
