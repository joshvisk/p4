<?php

use Illuminate\Database\Seeder;

class SugarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('sugars')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'sugar' => 'Candi Sugar-Clear',
			]);
	
			DB::table('sugars')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'sugar' => 'Candi Sugar-Dark',
			]);
	
			DB::table('sugars')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'sugar' => 'Candi Sugar Liquid 180L',
			]);
			
			DB::table('sugars')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'sugar' => 'Candi Sugar Liquid 45L',
			]);
			
			DB::table('sugars')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'sugar' => 'Candi Sugar Liquid 90L',
			]);
			
			DB::table('sugars')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'sugar' => 'Candi Sugar Liquid 1-Simplicity',
			]);
			
			DB::table('sugars')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'sugar' => 'Corn Sugar',
			]);
			
			DB::table('sugars')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'sugar' => 'Wildflower Honey',
			]);
			
			DB::table('sugars')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'sugar' => 'Lactose',
			]);
			
			DB::table('sugars')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'sugar' => 'Malto-Dextrin',
			]);
			
			DB::table('sugars')->insert([
					'created_at' => Carbon\Carbon::now()->toDateTimeString(),
					'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
					'sugar' => 'Rice Syrup-Solid',
			]);	
    }
}
