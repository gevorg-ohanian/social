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
    protected $guarded = array(
        'users_id'
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

        public static function get_others($id)
        {
//            $users = DB::table('users')->select('name','surname','users_id')->where('users_id','!=',$id)->get();
//            foreach($users as $user){
//                dd($user->users_id);
//            }//->where('users_id',$id)->get();
            $users = User::where('users_id','<>',$id)->get(array('name','surname','users_id'));
            return $users;
        }

}
