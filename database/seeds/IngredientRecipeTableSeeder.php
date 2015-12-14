<?php

use Illuminate\Database\Seeder;

class IngredientRecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{

		# First, create an array of all the recipes we want to associate ingredients with
		# The *key* will be the recipe name, and the *value* will be an array of ingredients.
		$recipes =[
			'1' => [	'12 Row Malt','Crystal Malt 40L','Munich Malt','Victory Malt',
									'Columbus', 'Cascade', 'Wyeast 1056-Ale American', 'Amylase Enzyme']
		];

		# Now loop through the above array, creating a new pivot for each recipe to ingredient
		foreach($recipes as $id => $ingredients) {
	
			# First get the recipe
			$recipe = \App\Recipe::where('id','LIKE',$id)->first();
	
			# Now loop through each ingredient for this recipe, adding the pivot
			foreach($ingredients as $ingredientName) {
				$ingredient = \App\Ingredient::where('name','LIKE',$ingredientName)->first();
	
				# Connect this ingredient to this recipe
				$recipe->ingredient()->save($ingredient);
			}
	
		}
	}
}
