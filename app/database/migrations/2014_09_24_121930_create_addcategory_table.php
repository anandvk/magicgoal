<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddcategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
          DB::table('category')->insert(array(
             'category_name'=> 'Adventure'
			));
        DB::table('category')->insert(array(
             'category_name'=> 'Fantasy'
			));
        DB::table('category')->insert(array(
             'category_name'=> 'Classic'
			));
        DB::table('category')->insert(array(
             'category_name'=> 'Kids'
			));
        DB::table('category')->insert(array(
             'category_name'=> 'Novel'
			));
        DB::table('category')->insert(array(
             'category_name'=> 'History'
			));
        DB::table('category')->insert(array(
             'category_name'=> 'Comady'
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
	}

}
