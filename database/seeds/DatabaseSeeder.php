<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         	$this->call(UsersTableSeeder::class);
        	$this->call(AddressesTableSeeder::class);
	       	$this->call(EmailsTableSeeder::class);
         	$this->call(PasswordsTableSeeder::class);
        	$this->call(PhonesTableSeeder::class);
        	$this->call(BeersTableSeeder::class);
        	$this->call(AdditivesTableSeeder::class);
        	$this->call(GrainsTableSeeder::class);
        	$this->call(HopsTableSeeder::class);
        	$this->call(StatesTableSeeder::class);
        	$this->call(SugarsTableSeeder::class);
	       	$this->call(YeastsTableSeeder::class);
	       	$this->call(IngredientsTableSeeder::class);

        Model::reguard();
    }
}
