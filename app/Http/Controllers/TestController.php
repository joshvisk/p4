<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function getTest()
    {
		$ingredients = \App\Ingredient::orderBy('name')->get();
		return view('test')->with('ingredients', $ingredients);
	}
}
