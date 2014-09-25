<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdduserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		DB::table('users')->insert(array(
             'username'=> 'anand',
             'password'=>'12345',
             'bio'=>'kuttikattu  house po puthanpalli',
              'email'=>'anand@google.com'
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		//DB::table('users')->delete(1);
	}

}
	