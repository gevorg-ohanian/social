<?php

class RegisterController extends BaseController {

	
	public function index()
	{
            return View::make('register');
	}
        
        public function store()
        {
            $data = Input::all();
            $data['password'] = md5($data['password']);
            User::create($data);
            return Redirect::to('register'); 
        }
} 
