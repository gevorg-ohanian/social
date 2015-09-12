<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
class Message extends  Eloquent implements UserInterface, RemindableInterface
{
    use UserTrait, RemindableTrait;

    protected $table = 'messages';
    protected $primaryKey = 'messages_id';


    protected $fillable = array(
        'message',
        'sender_id',
        'receiver_id'
    );


}