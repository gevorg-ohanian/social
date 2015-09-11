<?php

class HomeController extends BaseController {

	
	public function home()
	{
		return View::make('home');
	}

	public function logout()
	{
		Auth::logout();

		
		return Redirect::to('/');
	}
      
}
