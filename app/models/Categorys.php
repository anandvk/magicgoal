<?php
    class Categorys extends Eloquent
    {
		protected $table='category';
		protected $fillable = array('category');
		public $timestamps = false;

    }