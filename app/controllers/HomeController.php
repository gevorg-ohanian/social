<?php

class HomeController extends BaseController {

	
	public function index()
	{
             
	    $user = User::get_user();	
          
            return View::make('home')->with('user',$user);
	}
        
      
}
