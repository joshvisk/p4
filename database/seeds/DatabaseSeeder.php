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
        	$this->call(BeersTableSeeder::class);
	       	$this->call(IngredientsTableSeeder::class);
			$this->call(RecipesTableSeeder::class);
        	$this->call(StatesTableSeeder::class);
			#$this->call(IngredientRecipeTableSeeder::class);

        Model::reguard();
    }
}
