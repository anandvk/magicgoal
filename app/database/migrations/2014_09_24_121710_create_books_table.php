<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('books',function(Blueprint $table)
        {
            $table->increments("id");
            $table->string('isbn');
            $table->string('title');
            $table->string('author');
            $table->string('publisher');
            $table->integer('language');
            $table->integer('category_id')->unsigned();

            $table->foreign('category_id')
			      ->references('id')->on('category')
			      ->onDelete('cascade');
            
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
		//
		// Schema::table('books',function(Blueprint $table)
  //       {
  //           $table->dropForeign('books_category_id_foreign');
            
  //       });
		// Schema::drop('books');
	}

}
