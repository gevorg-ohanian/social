<?php

class LoginController extends BaseController {

	
	public function index()
	{
		return View::make('login');
	}
        
        public function store()
        {
            $inputs = Input::all();

            if(Auth::attempt(
                array('login'=>$inputs['login'],'password'=>$inputs['password']))){

                return Redirect::to('home');
            }

            else
            {
                return Redirect::to('/');
            }


        }
}
