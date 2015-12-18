<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class BeerController extends Controller
{
	public function __construct()
	{
		# Put anything here that should happen before any of the other actions
	}
	
	# Get a listing of beers that users have inputted.	
	public function getBeer()
	{
		$beers = \App\Beer::with('user')->get();
		
		return view('beer.beer')
			->with('beers', $beers)
			->with('user', Auth::user());

	}
	
	# function iterates through the request of a new beer recipe
	public function postBeer(Request $request)
	{
		$beer = new \App\Beer();
        $beer->beer_name = $request->beer_name;
		$beer->personal = $request->personal;
		$beer->user_id = Auth::id();
		$beer->save();
		
		// Grain 1
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 1;
		$recipe->order = "grain1";
		$recipe->amt = $request->grainAmt1;
		$recipe->measure = $request->grainMeasure1;
		$recipe->ingredient_id = $request->grain1;
		$recipe->save();
		
		// Grain 2
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 1;
		$recipe->order = "grain2";
		$recipe->amt = $request->grainAmt2;
		$recipe->measure = $request->grainMeasure2;
		$recipe->ingredient_id = $request->grain2;
		$recipe->save();
		
		// Grain 3
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 1;
		$recipe->order = "grain3";
		$recipe->amt = $request->grainAmt3;
		$recipe->measure = $request->grainMeasure3;
		$recipe->ingredient_id = $request->grain3;
		$recipe->save();

		// Grain 4
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 1;
		$recipe->order = "grain4";
		$recipe->amt = $request->grainAmt4;
		$recipe->measure = $request->grainMeasure4;
		$recipe->ingredient_id = $request->grain4;
		$recipe->save();
		
		// Grain 5
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 1;
		$recipe->order = "grain5";
		$recipe->amt = $request->grainAmt5;
		$recipe->measure = $request->grainMeasure5;
		$recipe->ingredient_id = $request->grain5;
		$recipe->save();

		// Hops 1
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 2;
		$recipe->order = "hops1";
		$recipe->amt = $request->hopsAmt1;
		$recipe->measure = $request->hopsMeasure1;
		$recipe->ingredient_id = $request->hops1;
		$recipe->save();
		
		// Hops 2
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 2;
		$recipe->order = "hops2";
		$recipe->amt = $request->hopsAmt2;
		$recipe->measure = $request->hopsMeasure2;
		$recipe->ingredient_id = $request->hops2;
		$recipe->save();
			
		// Hops 3
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 2;
		$recipe->order = "hops3";
		$recipe->amt = $request->hopsAmt3;
		$recipe->measure = $request->hopsMeasure3;
		$recipe->ingredient_id = $request->hops3;
		$recipe->save();
		
		// Hops 4
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 2;
		$recipe->order = "hops4";
		$recipe->amt = $request->hopsAmt4;
		$recipe->measure = $request->hopsMeasure4;
		$recipe->ingredient_id = $request->hops4;
		$recipe->save();
		
		// Hops 5
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 2;
		$recipe->order = "hops5";
		$recipe->amt = $request->hopsAmt5;
		$recipe->ingredient_id = $request->hops5;
		$recipe->measure = $request->hopsMeasure5;
		$recipe->save();
		
		// Yeast		
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 3;
		$recipe->order = "yeast";
		$recipe->amt = $request->yeastAmt;
		$recipe->measure = $request->yeastMeasure;
		$recipe->ingredient_id = $request->yeast;
		$recipe->save();

		// Sugar 1
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 4;
		$recipe->order = "sugar1";
		$recipe->amt = $request->sugarAmt1;
		$recipe->measure = $request->sugarMeasure1;
		$recipe->ingredient_id = $request->sugar1;
		$recipe->save();
		
		// Sugar 2
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 4;
		$recipe->order = "sugar2";
		$recipe->amt = $request->sugarAmt2;
		$recipe->measure = $request->sugarMeasure2;
		$recipe->ingredient_id = $request->sugar2;
		$recipe->save();
		
		// Sugar 3
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 4;
		$recipe->order = "sugar3";
		$recipe->amt = $request->sugarAmt3;
		$recipe->measure = $request->sugarMeasure3;
		$recipe->ingredient_id = $request->sugar3;
		$recipe->save();
		
		// Sugar 4
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 4;
		$recipe->order = "sugar4";
		$recipe->amt = $request->sugarAmt4;
		$recipe->measure = $request->sugarMeasure4;
		$recipe->ingredient_id = $request->sugar4;
		$recipe->save();
		
		// Sugar 5
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 4;
		$recipe->order = "sugar5";
		$recipe->amt = $request->sugarAmt5;
		$recipe->measure = $request->sugarMeasure5;
		$recipe->ingredient_id = $request->sugar5;
		$recipe->save();
			
		// Additive 1
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 5;
		$recipe->order = "additive1";
		$recipe->amt = $request->additiveAmt1;
		$recipe->measure = $request->additiveMeasure1;
		$recipe->ingredient_id = $request->additive1;
		$recipe->save();
		
		// Additive 2
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 5;
		$recipe->order = "additive2";
		$recipe->amt = $request->additiveAmt2;
		$recipe->measure = $request->additiveMeasure2;
		$recipe->ingredient_id = $request->additive2;
		$recipe->save();
			
		// Additive 3
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 5;
		$recipe->order = "additive3";
		$recipe->amt = $request->additiveAmt3;
		$recipe->measure = $request->additiveMeasure3;
		$recipe->ingredient_id = $request->additive3;
		$recipe->save();
			
		// Additive 4
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 5;
		$recipe->order = "additive4";
		$recipe->amt = $request->additiveAmt4;
		$recipe->measure = $request->additiveMeasure4;
		$recipe->ingredient_id = $request->additive4;
		$recipe->save();
			
		// Additive 5
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 5;
		$recipe->order = "additive5";
		$recipe->amt = $request->additiveAmt5;
		$recipe->measure = $request->additiveMeasure5;
		$recipe->ingredient_id = $request->additive5;
		$recipe->save();
			
		return redirect('/beer');
	}

	# Returns a view of a recipe
	public function getRecipe($id = null)
	{
		$beer = \App\Beer::with('recipe')->where('id', $id)->first();
		$ingredients = \App\Ingredient::get();
		$hidden = "";
		
		if ($beer->user_id == Auth::id()) {
			$hidden = "show";
			}
		else {
			$hidden = "hidden"	;
		}


		return view('beer.recipe')->with(['beer' => $beer, 'ingredients' => $ingredients])
									->with('hidden', $hidden);
	}

	# returns a view of the new recipe form
	public function getCreate()
	{	
		$ingredients = \App\Ingredient::get();
		
		return view('beer.create')
			->with('ingredients', $ingredients);
	}
	
	# returns a view to edit an existing recipe
	public function getEdit($id = null)
	{
        $beer = \App\Beer::find($id);
		$recipe = \App\Recipe::where('beer_id', $id)->get();
		$ingredients = \App\Ingredient::get();
			
        if(is_null($beer)) {
            \Session::flash('flash_message','Beer not found.');
            return redirect('\beer');
        }
		
		# array to populate a drop down on edit blade
		$measures = ['oz', 'lb', 'tsp', 'tbsp', 'package'];
		
        return view('beer.edit')
			->with('beer', $beer)
			->with('recipe', $recipe)			
			->with('ingredients', $ingredients)
			->with('measures', $measures);			
	}
	
	# iterates through a request after a user has edited an existing recipe
	public function postEdit(Request $request)
	{
        //dump($request);
		$beer = \App\Beer::find($request->id);
        $beer->beer_name = $request->beer_name;
		$beer->personal = $request->personal;
		$beer->directions = $request->directions;
		$beer->user_id = Auth::id();
		$beer->save();
		
		// Grain 1
		$recipe = \App\Recipe::find($request->grainID1);
		$recipe->type = 1;
		$recipe->order = "grain1";
		$recipe->amt = $request->grainAmt1;
		$recipe->measure = $request->grainMeasure1;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->grain1;
		$recipe->save();

		// Grain 2
		$recipe = new \App\Recipe();
		$recipe->beer()->associate($beer);
		$recipe->type = 1;
		$recipe->order = "grain2";
		$recipe->amt = $request->grainAmt2;
		$recipe->measure = $request->grainMeasure2;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->grain2;
		$recipe->save();
		
		// Grain 3
		$recipe = \App\Recipe::find($request->grainID3);
		$recipe->type = 1;
		$recipe->order = "grain3";
		$recipe->amt = $request->grainAmt3;
		$recipe->measure = $request->grainMeasure3;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->grain3;
		$recipe->save();
		
		// Grain 4
		$recipe = \App\Recipe::find($request->grainID4);
		$recipe->type = 1;
		$recipe->order = "grain4";
		$recipe->amt = $request->grainAmt4;
		$recipe->measure = $request->grainMeasure4;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->grain4;
		$recipe->save();
		
		// Grain 5
		$recipe = \App\Recipe::find($request->grainID5);
		$recipe->type = 1;
		$recipe->order = "grain5";
		$recipe->amt = $request->grainAmt5;
		$recipe->measure = $request->grainMeasure5;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->grain5;
		$recipe->save();
		
		// Hops 1
		$recipe = \App\Recipe::find($request->hopsID1);
		$recipe->type = 2;
		$recipe->order = "hops1";
		$recipe->amt = $request->hopsAmt1;
		$recipe->measure = $request->hopsMeasure1;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->hops1;
		$recipe->save();
		
		// Hops 2
		$recipe = \App\Recipe::find($request->hopsID2);
		$recipe->type = 2;
		$recipe->order = "hops2";
		$recipe->amt = $request->hopsAmt2;
		$recipe->measure = $request->hopsMeasure2;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->hops2;
		$recipe->save();
		
		// Hops 3
		$recipe = \App\Recipe::find($request->hopsID3);
		$recipe->type = 2;
		$recipe->order = "hops3";
		$recipe->amt = $request->hopsAmt3;
		$recipe->measure = $request->hopsMeasure3;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->hops3;
		$recipe->save();
		
		// Hops 4
		$recipe = \App\Recipe::find($request->hopsID4);
		$recipe->type = 2;
		$recipe->order = "hops4";
		$recipe->amt = $request->hopsAmt4;
		$recipe->measure = $request->hopsMeasure4;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->hops4;
		$recipe->save();
		
		// Hops 5
		$recipe = \App\Recipe::find($request->hopsID5);
		$recipe->type = 2;
		$recipe->order = "hops5";
		$recipe->amt = $request->hopsAmt5;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->hops5;
		$recipe->measure = $request->hopsMeasure5;
		$recipe->save();
		
		// Yeast		
		$recipe = \App\Recipe::find($request->yeastID);
		$recipe->type = 3;
		$recipe->order = "yeast";
		$recipe->amt = $request->yeastAmt;
		$recipe->measure = $request->yeastMeasure;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->yeast;
		$recipe->save();
		
		// Sugar 1
		$recipe = \App\Recipe::find($request->sugarID1);
		$recipe->type = 4;
		$recipe->order = "sugar1";
		$recipe->amt = $request->sugarAmt1;
		$recipe->measure = $request->sugarMeasure1;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->sugar1;
		$recipe->save();
		
		// Sugar 2
		$recipe = \App\Recipe::find($request->sugarID2);
		$recipe->type = 4;
		$recipe->order = "sugar2";
		$recipe->amt = $request->sugarAmt2;
		$recipe->measure = $request->sugarMeasure2;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->sugar2;
		$recipe->save();
		
		// Sugar 3
		$recipe = \App\Recipe::find($request->sugarID3);
		$recipe->type = 4;
		$recipe->order = "sugar3";
		$recipe->amt = $request->sugarAmt3;
		$recipe->measure = $request->sugarMeasure3;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->sugar3;
		$recipe->save();
		
		// Sugar 4
		$recipe = \App\Recipe::find($request->sugarID4);
		$recipe->type = 4;
		$recipe->order = "sugar4";
		$recipe->amt = $request->sugarAmt4;
		$recipe->measure = $request->sugarMeasure4;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->sugar4;
		$recipe->save();
		
		// Sugar 5
		$recipe = \App\Recipe::find($request->sugarID5);
		$recipe->type = 4;
		$recipe->order = "sugar5";
		$recipe->amt = $request->sugarAmt5;
		$recipe->measure = $request->sugarMeasure5;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->sugar5;
		$recipe->save();
		
		// Additive 1
		$recipe = \App\Recipe::find($request->additiveID1);
		$recipe->type = 5;
		$recipe->order = "additive1";
		$recipe->amt = $request->additiveAmt1;
		$recipe->measure = $request->additiveMeasure1;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->additive1;
		$recipe->save();
		
		// Additive 2
		$recipe = \App\Recipe::find($request->additiveID2);
		$recipe->type = 5;
		$recipe->order = "additive2";
		$recipe->amt = $request->additiveAmt2;
		$recipe->measure = $request->additiveMeasure2;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->additive2;
		$recipe->save();
		
		// Additive 3
		$recipe = \App\Recipe::find($request->additiveID3);
		$recipe->type = 5;
		$recipe->order = "additive3";
		$recipe->amt = $request->additiveAmt3;
		$recipe->measure = $request->additiveMeasure3;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->additive3;
		$recipe->save();
		
		// Additive 4
		$recipe = \App\Recipe::find($request->additiveID4);
		$recipe->type = 5;
		$recipe->order = "additive4";
		$recipe->amt = $request->additiveAmt4;
		$recipe->measure = $request->additiveMeasure4;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->additive4;
		$recipe->save();
		
		// Additive 5
		$recipe = \App\Recipe::find($request->additiveID5);
		$recipe->type = 5;
		$recipe->order = "additive5";
		$recipe->amt = $request->additiveAmt5;
		$recipe->measure = $request->additiveMeasure5;
		$recipe->beer_id = $request->id;
		$recipe->ingredient_id = $request->additive5;
		$recipe->save();
		
		return redirect('/beer');	
	}
	
	public function getDelete($id)
	{
		$beer = \App\Beer::find($id);
		$recipe = \App\Recipe::where('beer_id', $id)->get();
					
		foreach($recipe as $item)
		{
			$item->delete();
		}
		
		$beer->delete();
		
		\Session::flash('flash_message', $beer->name.' was deleted.');
		return redirect('/beer');
	}
	
}
