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
		
	public function getBeer()
	{
		$beers = \App\Beer::with('user')->get();
		
		return view('beer.beer')
			->with('beers', $beers)
			->with('user', Auth::user());

	}
	

	public function postBeer(Request $request)
	{
		dump($request);
		$beer = new \App\Beer();
		$recipe = new \App\Recipe();
        $beer->beer_name = $request->beer_name;
		$beer->public = $request->personal;
		$beer->user_id = Auth::id();
		$beer->save();
		// Grain 1
		if($request->input("grain1")) {
			$recipe->type = 1;
			$recipe->order = $request->input;
		};
		$recipe->amt = $request->grainAmt1;
		$recipe->measure = $request->grainMeasure1;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->grain1;
		$recipe->save();
		// Grain 2
		if($request->input("grain2")) {
			$recipe->type = 1;
		};
		$recipe->amt = $request->grainAmt2;
		$recipe->measure = $request->grainMeasure2;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->grain2;
		$recipe->save();		
		// Grain 3
		if($request->input("grain3")) {
			$recipe->type = 1;
		};
		$recipe->amt = $request->grainAmt3;
		$recipe->measure = $request->grainMeasure3;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->grain3;
		$recipe->save();	
		// Grain 4
		if($request->input("grain4")) {
			$recipe->type = 1;
		};
		$recipe->amt = $request->grainAmt4;
		$recipe->measure = $request->grainMeasure4;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->grain4;
		$recipe->save();	
		// Grain 5
		if($request->input("grain5")) {
			$recipe->type = 1;
		};
		$recipe->amt = $request->grainAmt5;
		$recipe->measure = $request->grainMeasure5;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->grain5;
		$recipe->save();

		// Hops 1
		if($request->input("hops1")) {
			$recipe->type = 2;
		};
		$recipe->amt = $request->hopsAmt1;
		$recipe->measure = $request->hopsMeasure1;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->hops1;
		$recipe->save();
		// Hops 2
		if($request->input("hops2")) {
			$recipe->type = 2;
		};
		$recipe->amt = $request->hopsAmt2;
		$recipe->measure = $request->hopsMeasure2;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->hops2;
		$recipe->save();		
		// Hops 3
		if($request->input("hops3")) {
			$recipe->type = 2;
		};
		$recipe->amt = $request->hopsAmt3;
		$recipe->measure = $request->hopsMeasure3;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->hops3;
		$recipe->save();	
		// Hops 4
		if($request->input("hops4")) {
			$recipe->type = 2;
		};
		$recipe->amt = $request->hopsAmt4;
		$recipe->measure = $request->hopsMeasure4;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->hops4;
		$recipe->save();	
		// Hops 5
		if($request->input("hops5")) {
			$recipe->type = 2;
		};
		$recipe->amt = $request->hopsAmt5;
		$recipe->measure = $request->hopsMeasure5;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->hops5;
		$recipe->save();
				
		// Yeast
		if($request->input("yeast")) {
			$recipe->type = 3;
		};
		$recipe->amt = $request->yeastAmt;
		$recipe->measure = $request->yeastMeasure;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->yeast;
		$recipe->save();

		// Sugar 1
		if($request->input("Sugar1")) {
			$recipe->type = 4;
		};
		$recipe->amt = $request->SugarAmt1;
		$recipe->measure = $request->SugarMeasure1;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->Sugar1;
		$recipe->save();
		// Sugar 2
		if($request->input("Sugar2")) {
			$recipe->type = 4;
		};
		$recipe->amt = $request->SugarAmt2;
		$recipe->measure = $request->SugarMeasure2;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->Sugar2;
		$recipe->save();		
		// Sugar 3
		if($request->input("Sugar3")) {
			$recipe->type = 4;
		};
		$recipe->amt = $request->SugarAmt3;
		$recipe->measure = $request->SugarMeasure3;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->Sugar3;
		$recipe->save();	
		// Sugar 4
		if($request->input("Sugar4")) {
			$recipe->type = 4;
		};
		$recipe->amt = $request->SugarAmt4;
		$recipe->measure = $request->SugarMeasure4;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->Sugar4;
		$recipe->save();	
		// Sugar 5
		if($request->input("Sugar5")) {
			$recipe->type = 4;
		};
		$recipe->amt = $request->SugarAmt5;
		$recipe->measure = $request->SugarMeasure5;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->Sugar5;
		$recipe->save();
			
		// Additive 1
		if($request->input("Additive1")) {
			$recipe->type = 5;
		};
		$recipe->amt = $request->AdditiveAmt1;
		$recipe->measure = $request->AdditiveMeasure1;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->Additive1;
		$recipe->save();
		// Additive 2
		if($request->input("Additive2")) {
			$recipe->type = 5;
		};
		$recipe->amt = $request->AdditiveAmt2;
		$recipe->measure = $request->AdditiveMeasure2;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->Additive2;
		$recipe->save();		
		// Additive 3
		if($request->input("Additive3")) {
			$recipe->type = 5;
		};
		$recipe->amt = $request->AdditiveAmt3;
		$recipe->measure = $request->AdditiveMeasure3;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->Additive3;
		$recipe->save();	
		// Additive 4
		if($request->input("Additive4")) {
			$recipe->type = 5;
		};
		$recipe->amt = $request->AdditiveAmt4;
		$recipe->measure = $request->AdditiveMeasure4;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->Additive4;
		$recipe->save();	
		// Additive 5
		if($request->input("Additive5")) {
			$recipe->type = 5;
		};
		$recipe->amt = $request->AdditiveAmt5;
		$recipe->measure = $request->AdditiveMeasure5;
		$recipe->beer()->associate($beer);
		$recipe->ingredient_id = $request->Additive5;
		$recipe->save();
			
		return redirect('/beer');
	}

	public function getRecipe($id = null)
	{
		$beer = \App\Beer::with('recipes')->where('id', $id)->first();
		$ingredients = \App\Ingredient::get();

		//dump($beer->toArray());
		return view('beer.recipe')->with(['beer' => $beer, 'ingredients' => $ingredients]);
	}

	public function getCreate()
	{	
		$ingredients = \App\Ingredient::get();
        $ingredients_for_dropdown = $ingredients->getIngredientsForDropdown();
		
		return view('beer.create')
			->with('ingredients', $ingredients)
			->with('ingredients_for_dropdown', $ingredients_for_dropdown);
	}

	public function getEdit($id = null)
	{
        $beer = \App\Beer::find($id);
		$recipe = \App\Recipe::where('beer_id', $id)->get();
		$ingredients = \App\Ingredient::get();
        //$ingredients_for_dropdown = $ingredients->getIngredientsForDropdown();
			
        if(is_null($beer)) {
            \Session::flash('flash_message','Beer not found.');
            return redirect('\beer');
        }
		$ingredients_for_this_recipe = [];
        foreach($beer->recipe as $ingredient) {
            $ingredients_for_this_recipe[] = $ingredient;
        }
		

		//dump($ingredients_for_this_recipe);
		
        return view('beer.edit')
			->with('beer', $beer)
			->with('recipe', $recipe)			
			->with('ingredients', $ingredients)
			//->with('ingredients_for_dropdown', $ingredients_for_dropdown)
			->with('ingredients_for_this_recipe', $ingredients_for_this_recipe);			
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
