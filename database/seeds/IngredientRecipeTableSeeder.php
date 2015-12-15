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
		$ingredients = [
			'1' => ['2 Row Malt','Crystal Malt 40L','Munich Malt','Victory Malt','Columbus', 'Cascade', 'Wyeast 1056-Ale American', 'Amylase Enzyme'],
			'5' => ['2 Row Malt','Crystal Malt 80L','Cascade','Sterling','Wyeast 1007-Ale German']
		];
	
		# Now loop through the above array, creating a new pivot for each recipe to ingredient
		foreach($ingredients as $beer_id => $items) {
	
			# First get the recipe
			$recipe = \App\Recipe::where('beer_id','LIKE',$beer_id)->first();
	
			# Now loop through each ingredient for this recipe, adding the pivot
			foreach($items as $ingredientName) {
				$ingredient = \App\Ingredient::where('name','LIKE',$ingredientName)->first();
				# Connect this ingredient to this recipe
				$recipe->ingredients($recipe->id)->save($ingredient);
			}
		}
	}
}
