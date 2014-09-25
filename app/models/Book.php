<?php
    class Book extends Eloquent
    {
		protected $table='books';
		protected $fillable = array('isbn', 'title','author','publisher','language','category_id');

		

		// public static fuction totable()
		// {
		// 	$isbn=Input::get('isbn');
		// 	$title=Input::get('title');
		// 	$author=Input::get('author');
		// 	$publisher=Input::get('publisher');
		// 	$language=Input::get('language');

		// }

    }