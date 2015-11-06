<?php

use Illuminate\Database\Seeder;

class YeastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Ale Yeast-Belgian Saison',
			]);
	
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Ale Yeast-CDC Cask Conditioning',
			]);
	
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Ale Yeast-Muntons',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Ale Yeast-Nottingham',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Ale Yeast-Safale 04',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Ale Yeast-Safale 05 Amer Ale',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Ale Yeast-Safbrew 06 Wheat',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Ale Yeast-Windsor',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Lager Yeast-Vierka',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1007-Ale German',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1010-Am Wheat',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1028-Ale London',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1056-Ale American',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1084-Ale Irish',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1098-Ale British',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1214-Belgian Abbey',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1272-American II',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1275-Thames Valley Ale',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1318-London III',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1332-Northwest',
			]);
			
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1388-Bel Strong',
			]);
						
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1728-Scottish Ale',
			]);			
						
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 1968-London Spec',
			]);			
						
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 2007-Lager Pilsner',
			]);			
						
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 2035-Lager American',
			]);			
						
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 2112-Lager California',
			]);			
						
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 2124-Lager Bohemian',
			]);			
						
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 2206-Lager Bavarian',
			]);			
						
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 2308-Lager Munich',
			]);			
									
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 2565-Kolsch',
			]);			
									
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 3056-Bav. Wheat',
			]);			
									
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 3068-Wheinstephen',
			]);			
									
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast 3944-Belgian White',
			]);			
									
			DB::table('yeasts')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'yeast' => 'Wyeast Pacman-Rogue',
			]);			
    }
}
