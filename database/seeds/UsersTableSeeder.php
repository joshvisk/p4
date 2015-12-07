<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'first_name' => 'Joshua',
			'last_name' => 'Visk',
			'username' => 'joshvisk',
		]);

		DB::table('users')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'first_name' => 'Megan',
			'last_name' => 'Campbell',
			'username' => 'megancampbell',
		]);

		DB::table('users')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'first_name' => 'MacAllister',
			'last_name' => 'Miller',
			'username' => 'macmiller',
		]);		
		
		DB::table('users')->insert([
			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
			'first_name' => 'Callahan',
			'last_name' => 'Visk',
			'username' => 'calvisk',
  		]);
	}
}
