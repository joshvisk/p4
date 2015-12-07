<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class BeerController extends Controller
{
	public function __construct()
	{
		# Put anything here that should happen before any of the other actions
	}
		
	public function getBeer()
	{
		$beers = \App\Beer::all();
	
		//$beers = DB::table('beers')->get();	
		return view('beer.beer')->with('beers', $beers);

	}
	
	

	public function postBeer()
	{
		return 'This is how you come back to the beer recipe page after posting a new one';
	}

	public function getRecipe()
	{
		
		return 'This is where you view a selected recipe';
	}

	public function getCreate()
	{
		return 'This is where the new recipe form will be';
	}
}
