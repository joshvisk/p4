<?php

use Illuminate\Database\Seeder;

class EmailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$user_id = \App\User::where('username','=','joshvisk')->pluck('id');
		DB::table('emails')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'email' => 'josh@legionofjoom.com',
		]);

		$user_id = \App\User::where('username','=','megancampbell')->pluck('id');
		DB::table('emails')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'email' => 'megan@gmail.com',
		]);
		
		$user_id = \App\User::where('username','=','macmiller')->pluck('id');
		DB::table('emails')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'email' => 'mac@hotmail.com',
		]);
		
		$user_id = \App\User::where('username','=','calvisk')->pluck('id');
		DB::table('emails')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'user_id' => $user_id,
			'email' => 'cal@outlook.com',
		]);		
    }
}
