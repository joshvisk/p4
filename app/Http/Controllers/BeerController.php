<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Beer;

class BeerController extends Controller
{
	public function __construct()
	{
		# Put anything here that should happen before any of the other actions
	}
		
	public function getBeer()
	{
		$beers = \App\Beer::all();
	
		return view('beer.beer')->with('beers', $beers);

	}
	
	

	public function postBeer()
	{
		return 'This is how you come back to the beer recipe page after posting a new one';
	}

	public function getRecipe($id = null)
	{
		$beer = \App\Beer::with('ingredient')->where('id', $id)->first();
		dump($beer->toArray());
		$ingredient = $beer->first(function ('ingredient', 'grain') {
			return $item > 2; });
		dump($ingredient);
		
		return view('beer.recipe')->with('beer', $beer);
	}

	public function getCreate()
	{
		return 'This is where the new recipe form will be';
	}
}
