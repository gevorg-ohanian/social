<?php

class RegisterController extends BaseController {

	
	public function index()
	{
            return View::make('register');
	}
        
        public function store()
        {
            $users= new User;
            $user->save();
        }
}
