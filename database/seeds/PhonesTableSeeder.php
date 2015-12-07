<?php

use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$user_id = \App\User::where('username','=','joshvisk')->pluck('id');
		DB::table('phones')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'phone' => '2062650491',
			'phone_type' => '1'
		]);

		$user_id = \App\User::where('username','=','megancampbell')->pluck('id');
		DB::table('phones')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'phone' => '2069384550',
			'phone_type' => '2'
		]);
		
		$user_id = \App\User::where('username','=','macmiller')->pluck('id');
		DB::table('phones')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'phone' => '3606976312',
			'phone_type' => '3'
		]);
		
		$user_id = \App\User::where('username','=','calvisk')->pluck('id');
		DB::table('phones')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'phone' => '4253632936',
			'phone_type' => '1'
		]);		
    }
}
