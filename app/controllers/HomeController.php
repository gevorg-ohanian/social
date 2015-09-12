<?php

class HomeController extends BaseController {

	
	public function home()
	{
		$id = Auth::User()->users_id;
		$users = User::get_user($id);
		return View::make('home')->with('users',$users);

	}

	public function logout()
	{
		Auth::logout();

		return Redirect::to('/');
	}
      
}
