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
		$user = \App\User::firstOrCreate(['email' => 'josh@legionofjoom.com']);
		$user->first_name = 'Joshua';
		$user->last_name = 'Visk';
		$user->username = 'joshvisk';
		$user->email = 'josh@legionofjoom.com';
		$user->password = \Hash::make('Password');
		$user->save();

		$user = \App\User::firstOrCreate(['email' => 'megan@gmail.com']);
		$user->first_name = 'Megan';
		$user->last_name = 'Campbell';
		$user->username = 'megancampbell';
		$user->email = 'megan@gmail.com';
		$user->password = \Hash::make('12345678');
		$user->save();

		$user = \App\User::firstOrCreate(['email' => 'mac@hotmail.com']);
		$user->first_name = 'MacAllister';
		$user->last_name = 'Miller';
		$user->username = 'macmiller';
		$user->email = 'mac@hotmail.com';
		$user->password = \Hash::make('TestTest');
		$user->save();
	
		$user = \App\User::firstOrCreate(['email' => 'cal@outlook.com']);
		$user->first_name = 'Callahan';
		$user->last_name = 'Visk';
		$user->username = 'calvisk';
		$user->email = 'cal@outlook.com';
		$user->password = \Hash::make('helloworld');
		$user->save();
		
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
	}
}
