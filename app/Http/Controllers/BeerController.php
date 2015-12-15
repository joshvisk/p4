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
		$beer = new \App\Beer();
        $beer->beer_name = $request->beer_name;
		$beer->public = true;
		$beer->user_id = Auth::id();
		$beer->save();
		
		dump($request);
		
/*		foreach($request as $item) {
			$ingredient = new \App\Ingredient();
			switch($item) {
				case $item->grain_amt > 0:
					$ingredient->type = 1;
					$ingredient->grain = $item->grain;
					$ingredient->grain_amt = $item->grain_amt;
					$ingredient->beer_id = $beer->id;
					$ingredient->save();
					break;
				case $item->hop_amt > 0:
					$ingredient->type = 2;
					$ingredient->hops = $item->hops;
					$ingredient->hops_amt = $item->hops_amt;
					$ingredient->hops_type = $item->hops_type;				
					$ingredient->beer_id = $beer->id;
					$ingredient->save();
					break;
				case $item->yeast_amt > 0:
					$ingredient->type = 3;
					$ingredient->yeast_amt = $item->yeast_amt;
					$ingredient->yeast = $item->yeast;
					$ingredient->beer_id = $beer->id;
					$ingredient->save();
					break;
				case $item->additive_amt > 0:
					$ingredient->type = 4;
					$ingredient->additive = $item->additive;
					$ingredient->additive_amt = $item->additive_amt;
					$ingredient->beer_id = $beer->id;
					$ingredient->save();
					break;
			}
		}*/
		return 'This is how you come back to the beer recipe page after posting a new one';
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

		return view('beer.create')->with('ingredients', $ingredients);
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
