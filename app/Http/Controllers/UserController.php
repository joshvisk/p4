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
	
    public function getUser()
    {
        return 'This displays the user profile';

    }
   public function postUser()
    {
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
