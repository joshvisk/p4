<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
# Show login form
Route::get('/login', 'Auth\AuthController@getLogin');

# Process login form
Route::post('/login', 'Auth\AuthController@postLogin');

# Process logout
Route::get('/logout', 'Auth\AuthController@getLogout');

# Show registration form
Route::get('/register', 'Auth\AuthController@getRegister');

# Process registration form
Route::post('/register', 'Auth\AuthController@postRegister');



// Route uses the BeerController to direct the user to the beer page to view list of recipes 
Route::get('/beer', 'BeerController@getBeer');
Route::get('/beer/recipe/{id}', 'BeerController@getRecipe');

Route::group(['middleware' => 'auth'], function() {
	
	Route::post('/beer', 'BeerController@postBeer');
	Route::get('/beer/create', 'BeerController@getCreate');
	Route::get('/beer/delete/{id}', 'BeerController@getDelete');
});

// Route allows the developer to view logs from the \logs uri
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';
});

Route::get('/confirm-login-worked', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user) {
        echo 'You are logged in.';
        dump($user->toArray());
    } else {
        echo 'You are not logged in.';
    }

    return;
});

Route::get('/test', function() {
	$recipes = [
		'1' => ['2 Row Malt','Crystal Malt 40L','Munich Malt','Victory Malt','Columbus', 'Cascade', 'Wyeast 1056-Ale American', 'Amylase Enzyme'],
		'5' => ['2 Row Malt','Crystal Malt 80L','Cascade','Sterling','Wyeast 1007-Ale German']
	];

	# Now loop through the above array, creating a new pivot for each recipe to ingredient
	foreach($recipes as $id => $ingredients) {

		# First get the recipe
		$recipe = \App\Recipe::where('beer_id','LIKE',$id)->first();

		# Now loop through each ingredient for this recipe, adding the pivot
		foreach($ingredients as $ingredientName) {
			$ingredient = \App\Ingredient::where('name','LIKE',$ingredientName)->first();
			# Connect this ingredient to this recipe
			$recipe->ingredients()->save($ingredient);
		}

	}
});