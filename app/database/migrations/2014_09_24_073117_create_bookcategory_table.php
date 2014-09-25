// <?php

// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Database\Migrations\Migration;

// class CreateBookcategoryTable extends Migration {

// 	/**
// 	 * Run the migrations.
// 	 *
// 	 * @return void
// 	 */
// 	public function up()
// 	{
// 		//
// 		Schema::create('bookcategory',function(Blueprint $table)
//         {
//             $table->increments("id");
//             $table->integer('category_id')->unsigned();
//             $table->integer('book_id')->unsigned();

// 	        $table->foreign('category_id')
// 			      ->references('id')->on('category')
// 			      ->onDelete('cascade');

// 			$table->foreign('book_id')
// 			      ->references('id')->on('books')
// 			      ->onDelete('cascade');
            
//         });
// 	}

// 	/**
// 	 * Reverse the migrations.
// 	 *
// 	 * @return void
// 	 */
// 	public function down()
// 	{
// 		//
// 		Schema::table('bookcategory',function(Blueprint $table)
//         {
//             $table->dropForeign('bookcategory_category_id_foreign');
//             $table->dropForeign('bookcategory_book_id_foreign');
//         });
// 		Schema::drop('bookcategory');
// 	}

// }
