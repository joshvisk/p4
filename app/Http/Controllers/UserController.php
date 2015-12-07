<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class userController extends Controller
{
	public function __construct() {
			# Put anything here that should happen before any of the other actions
	}
	
    public function getUser()
    {
		$states = DB::table('states')->orderBy('state')->get();
		return view('user.user')->with('states', $states);
        //return 'This displays the user profile';

    }
   public function postUser(Request $request)
    {
        $user_data = $request->all();
		$user = new \App\User;
		$user->first_name = $user_data['first_name'];
		$user->last_name = $user_data['last_name'];
		$user->username = $user_data['username'];
		$user->save();		
		
		//dump($all);
		\Session::flash('flash_message', 'User was successfully added!');
		return 'This returns the user after they add/change profile attributes or login';

    }
	
   public function getCreate()
    {
        return 'This shows the new user form';

    }
	
   public function getModify()
    {
        return 'This shows the modify user form';

    }		
	
	public function getLogin()
    {
        return 'This shows user login form';

    }
}
