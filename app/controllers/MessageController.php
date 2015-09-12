<?php
class MessageController extends BaseController
{
    public function messageIndex()
    {
        $id = Auth::User()->users_id;
        //dd($id);
        $data = User::get_others($id);
        //dd($data);
        foreach($data as $data_items){
            var_dump($data_items->dob);
        }
        return View::make('message');
    }

    public function sendMessage()
    {

    }

    public function receiveMessage()
    {

    }
}