<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$user_id = \App\User::where('username','=','joshvisk')->pluck('id');
		DB::table('addresses')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'street_address' => '18109 Mount Walker Dr',
			'city' => 'Poulsbo',
			'state' => '47',
			'zip' => '98370',
		]);

		$user_id = \App\User::where('username','=','megancampbell')->pluck('id');
		DB::table('addresses')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'street_address' => '20155 12th Ave',
			'city' => 'Poulsbo',
			'state' => '47',
			'zip' => '98370',
		]);

		$user_id = \App\User::where('username','=','macmiller')->pluck('id');
		DB::table('addresses')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'street_address' => '7721 Melrose Ln',
			'city' => 'Snoqualmie',
			'state' => '47',
			'zip' => '98065',
		]);
		
		$user_id = \App\User::where('username','=','calvisk')->pluck('id');
		DB::table('addresses')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'street_address' => '1234 56th Ave S',
			'city' => 'Beverly Hills',
			'state' => '5',
			'zip' => '90210',
		]);
    }
}
