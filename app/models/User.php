<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

    protected $primaryKey = 'users_id';
        
        protected $fillable = array(
          'name',
          'surname',
          'dob',
          'email',
          'login',
          'password'
           
        );

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
        
        public static function get_user($id)
        {
            $users = DB::table('users')->select('name','surname','dob')->where('users_id',$id)->first();
            return $users;
        } 

}
