<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BeerController extends Controller
{
	public function __construct() {
			# Put anything here that should happen before any of the other actions
	}
	
    public function getBeer()
    {
        return 'This is a the beer recipe page';

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
