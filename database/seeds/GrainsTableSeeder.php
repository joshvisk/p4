<?php

use Illuminate\Database\Seeder;

class GrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => '2 Row Malt',
		]);

		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Munich Malt',
		]);

		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Wheat Malt',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Dextrin Malt',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Rye Malt',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Black Patent',
		]);
		
	DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Chocolate Malt',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Crystal Malt 120L',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Crystal Malt 150L',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Crystal Malt 20L',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Crystal Malt 40L',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Crystal Malt 80L',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Roast Barley 350L',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Roast Barley 500L',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Special Roast 50L',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Victory Malt',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'America',
			'grain' => 'Wheat Berries',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Flaked',
			'grain' => 'Flaked Barley',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Flaked',
			'grain' => 'Flaked Maize',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Flaked',
			'grain' => 'Flaked Oats',
		]);
		
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Flaked',
			'grain' => 'Flaked Rice',
		]);
					
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Flaked',
			'grain' => 'Rice Hulls',
		]);			
					
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Flaked',
			'grain' => 'Flaked Rye',
		]);			
					
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Flaked',
			'grain' => 'Flaked Wheat',
		]);			
					
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Belgian',
			'grain' => 'Aromatic Malt',
		]);			
					
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Belgian',
			'grain' => 'Biscuit',
		]);			
					
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Belgian',
			'grain' => 'CaraMunich 55L',
		]);			
					
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Belgian',
			'grain' => 'CaraVienne 35L',
		]);			
					
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Belgian',
			'grain' => 'Pils Malt',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Belgian',
			'grain' => 'Special B',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Belgian',
			'grain' => 'Kiln Coffee Malt',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'British',
			'grain' => 'Amber Malt',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'British',
			'grain' => 'British Crystal 55L',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'British',
			'grain' => 'Brown Malt',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'British',
			'grain' => 'Carastan 35L',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'British',
			'grain' => 'Pale Malt',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'British',
			'grain' => 'Peated Malt',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'British',
			'grain' => 'Torrified Wheat',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Canadian',
			'grain' => 'Gambrinus Pale',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'Canadian',
			'grain' => 'Honey Malt',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'German',
			'grain' => 'Acidulated Malt',
		]);			
								
	DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'German',
			'grain' => 'Carafa Malt',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'German',
			'grain' => 'Cara Rye',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'German',
			'grain' => 'Cara Wheat',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'German',
			'grain' => 'Chocolate Rye',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'German',
			'grain' => 'Chocolate Wheat',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'German',
			'grain' => 'Caramel Pils Carafoam',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'German',
			'grain' => 'Carahell Light Chrystal 10L',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'German',
			'grain' => 'Caramunich 55L',
		]);			
								
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'German',
			'grain' => 'Melanoidin Malt',
		]);	
											
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'German',
			'grain' => 'Pils Malt Weyermann',
		]);										
		DB::table('grains')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain_type' => 'German',
			'grain' => 'Vienna Malt',
		]);
    }
}
