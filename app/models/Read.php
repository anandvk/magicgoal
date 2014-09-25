<?php 

class Read extends Eloquent{

		protected $table='users';
		 public $timestamps = false;
		protected $fillable = array('user','email','bio','pass');

		public static $rules=array(
			'name'=>'required|min:2',
			'email'=>'email|required|unique:users',
			'bio'=>'required',
			 'pass'=>'required|min:5'

			);
		public static function validate($data)
		{
			return Validator::make($data, static::$rules);
		}
		public function getRememberToken()
{
    return $this->remember_token;
}

public function setRememberToken($value)
{
    $this->remember_token = $value;
}

public function getRememberTokenName()
{
    return 'remember_token';
}
}

 ?>