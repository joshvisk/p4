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

        	$this->call(HopsTableSeeder::class);
        	$this->call(YeastsTableSeeder::class);
        	$this->call(StatesTableSeeder::class);
        	$this->call(AdditivesTableSeeder::class);
        	$this->call(GrainsTableSeeder::class);
        	$this->call(SugarsTableSeeder::class);

        Model::reguard();
    }
}
