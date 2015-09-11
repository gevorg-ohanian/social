<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::create('users',function($table)
        {
                    $table->increments('users_id');
                    $table->string('name',150);
                    $table->string('surname',150);
                    $table->string('dob',150);
                    $table->string('email',150);
                    $table->string('login',150);
                    $table->string('password',250);
                    $table->rememberToken();
                    $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
