<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;

class UserController extends Controller
{
    public function index(){

		return "Mi cuenta";
	}

	public function profile(){
		//Bring the profile using the id of the Logged user!
		$userdata = User::find(\Auth::user()->id);
		$moredata = $userdata->third;

		//profile page for registered users with data
		return view(('users.detail'))->with('user', $userdata)
					 				 ->with('more', $moredata);
	}
}
