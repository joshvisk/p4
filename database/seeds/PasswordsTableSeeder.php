<?php

use Illuminate\Database\Seeder;

class PasswordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$user_id = \App\User::where('username','=','joshvisk')->pluck('id');
		DB::table('passwords')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'password' => \Hash::make('Password'),
		]);

		$user_id = \App\User::where('username','=','megancampbell')->pluck('id');
		DB::table('passwords')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'password' => \Hash::make('12345678'),
		]);
		
		$user_id = \App\User::where('username','=','macmiller')->pluck('id');
		DB::table('passwords')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'password' => \Hash::make('TestTest'),
		]);
		
		$user_id = \App\User::where('username','=','calvisk')->pluck('id');
		DB::table('passwords')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'password' => \Hash::make('helloworld'),
		]);		
    }
}
