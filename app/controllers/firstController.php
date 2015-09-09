<?php

/**
 * Created by PhpStorm.
 * User: Grigor
 * Date: 08.09.2015
 * Time: 16:26
 */
class firstController extends BaseController
{
    public function firstShow()
    {
        return View::make('main.first');
    }
    public function showId($id)
    {
        return View::make('main.first')->with('id',$id);
    }
    public function addUser()
    {
        $input = Input::only('email','pass');
        $data = array('username'=>$input['email'],'password'=>$input['pass']);
        DB::table('users')->insert($data);
        $users = User::all();
        return View::make('main.first')->with(array('names'=>$users));
    }
}