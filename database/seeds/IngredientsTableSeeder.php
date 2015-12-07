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
		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain' => '1',
			'grain_amt' => '7',
			'beer_id' => $beer_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain' => '11',
			'grain_amt' => '2',
			'beer_id' => $beer_id,
		]);
		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');

 		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain' => '2',
			'grain_amt' => '.5',
			'beer_id' => $beer_id,
		]);
		
		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'grain' => '16',
			'grain_amt' => '.5',
			'beer_id' => $beer_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'hops' => '6',
			'hops_amt' => '3',
			'beer_id' => $beer_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'hops' => '2',
			'hops_amt' => '4',
			'beer_id' => $beer_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'yeast' => '13',
			'yeast_amt' => '1',
			'beer_id' => $beer_id,
		]);

		$beer_id = \App\Beer::where('beer_name','=','Liberty Bay IPA')->pluck('id');
		DB::table('ingredients')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'additive' => '3',
			'additive_amt' => '1',
			'beer_id' => $beer_id,
		]);

   }
}
