<?php

class LoginController extends BaseController {

	
	public function index()
	{
		return View::make('login');
	}
        
        public function store()
        {    
            $data = Input::all();
            $user = DB::table('users')->where('login', $data['login'])->first();
            if( $user->password == md5($data['password']))
            {
                Session::put('id', $user->users_id); 
                
                return Redirect::to('home'); 
            
            }else
            {
                return Redirect::to('login'); 
            }
////          
           
//            echo '<pre>';
//              var_dump($user);exit;
//               echo '</pre>';
        }
}
?>
