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
		$user = \App\User::firstOrCreate(['email' => 'jill@harvard.edu']);
		$user->username = 'jill';
		$user->email = 'jill@harvard.edu';
		$user->password = \Hash::make('helloworld');
		$user->save();
	
		$user = \App\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
		$user->username = 'jamal';
		$user->email = 'jamal@harvard.edu';
		$user->password = \Hash::make('helloworld');
		$user->save();

		$user = \App\User::firstOrCreate(['email' => 'josh@legionofjoom.com']);
		$user->first_name = 'Joshua';
		$user->last_name = 'Visk';
		$user->username = 'joshvisk';
		$user->email = 'josh@legionofjoom.com';
		$user->password = \Hash::make('Password');
		$user->save();
	}
}
