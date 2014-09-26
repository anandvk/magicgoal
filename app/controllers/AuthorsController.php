 <?php 

// class AuthorsController extends BaseController {
// 	public $restful=true;
//     // public $layout='layouts.default';


// 	public function index()
// 	{
// 	     return View::make('authors.index')
// 	     ->with('title','authors page')
// 	     ->with('users',Read::all());
// 		// $view=View::make('authors.index',array('name'=>'Anand varghese k'))

// 		// ->with('age',28)
// 	 //    ->with('gender','M');
// 		// $view->location='guruvayoor';
// 		// $view['ph']='487-557121';
// 		// $this->layout->title="authors";
// 		// $this->layout->abc=$view;


// 	}
// 	// public function samp()
// 	// {
// 	// 	 return View::make('login');
// 	// }
// 	 public function view($id)
// 	 {
// 	 	return View::make('authors.view')
// 	 	->with('title','details')
// 	 	->with('detail',Read::find($id));
// 	 }


// 	 public function newuser()
// 	 {
// 	 	return View::make('authors.new')
// 	 	->with('title','New user');
// 	 }

// 	 public function login()
// 	 {
// 	 	return View::make('authors.login')
// 	 	->with('title','login');
// 	 }
// 	 public function logout()
// 	 {
// 	 	Auth::logout();

// 	 	return Redirect::route('login');
// 	 }


// 	 public function auth()
// 	 {
	 
//         $logindata=array(
//              'username'=>Input::get('name'),
//              'password'=>Input::get('pass')
//         	);
//         if(Auth::attempt($logindata))
//         {
//               return Redirect::route('books.index')
// 			 	->with('message','the login code successfully');
//         }
//         else
//         {
//         	return Redirect::route('login')
// 			 	->with('message','user name or password is incorrect');

//         }


// 	 }

// 	 public function create()
// 	 {
// 	 	// Read::create(array(
//    //          'username'=>Input::get('name'),
//    //          'email'=>Input::get('email'),
//    //          'bio'=>Input::get('bio'),       
//    //          'password'=>Input::get('pass')       

// 	 	// 	));
// 	 	$validation=Read::validate(Input::all());

// 	 	if($validation->fails())
// 	 	{
//               return Redirect::route('new_author')->WithErrors($validation)->WithInput();
// 	 	}else{

// 			 	$author = new Read;
// 		        $author->username=Input::get('name');
// 		        $author->email=Input::get('email');
		        
// 		        $author->password=Hash::make(Input::get('pass'));
// 		        $author->bio=Input::get('bio');
// 		        $author->save();
// 			 	 return Redirect::route('print_author')
// 			 	->with('message','the user was created successfully');
// 	 		}
// 	 }
// }


 

class AuthorsController extends BaseController {
	public $restful=true;
    


	public function index()
	{
          if(Auth::check())
          { 
          	$log1='Logout';
          } else
          {
             $log1='Sign up /login';
          }    
              
	     return View::make('authors.index')
	     ->with('title','authors page')
	     ->with('log',$log1);
		// $view=View::make('authors.index',array('name'=>'Anand varghese k'))

		// ->with('age',28)
	 //    ->with('gender','M');
		// $view->location='guruvayoor';
		// $view['ph']='487-557121';
		// $this->layout->title="authors";
		// $this->layout->abc=$view;


	}
	// public function samp()
	// {
	// 	 return View::make('login');
	// }
	 public function view($id)
	 {
	 	// if(Auth::check())
   //        { 
   //        	$log1='Logout';
   //        } else
   //        {
   //           $log1='Sign up /login';
   //        }
	 	// return View::make('authors.view')
	 	// ->with('title','details')
	 	// ->with('detail',Read::find($id))
	 	// ->with('log',$log1);

	     

	 }


	 public function newuser()
	 {

	 	return View::make('authors.new')
	 	->with('title','New user')
	 	->with('log','Sign up.../Login');


	 }

	 public function login()
	 {
	 	if(Auth::check())
          { 
                $u= DB::table('users')->where('username', '=',Auth::user()->username)->get();

			 	return View::make('books.index')
	 	           ->with('title','details')
	 	           ->with('detail',$u)
	 	           ->with('log','Logout');
                
          } else
          {

	         return View::make('authors.login')
		 	 ->with('title','login')
		 	 ->with('log','loging....');
	 	  }
	 }
	  public function logout()
	 {
	 	Auth::logout();

	 	return Redirect::route('login');
	 }


	 public function auth()
	 {
	 
        $logindata=array(
             'username'=>Input::get('name'),
             'password'=>Input::get('pass')
        	);
        if(Auth::attempt($logindata))
        {
     //          return Redirect::route('print_author')
			 	// ->with('message','the login code successfully');
                 $u= DB::table('users')->where('username', '=',Auth::user()->username)->get();
                 
                 foreach ($u as $user) 
				   { 
				    $r=$user->role;  
				    }
                 if($r=='master')
                 {
                   return Redirect::route('books.index');
                 }else
                 {
                 
			 	return Redirect::route('books.index');
			 	  }
	 	           
	 	           //->with('detail',$u)
	 	           
        }
        else
        {
        	return Redirect::route('login')
			 	->with('message','user name or password is incorrect');

        }


	 }

	 public function create()
	 {
	 	// Read::create(array(
   //          'username'=>Input::get('name'),
   //          'email'=>Input::get('email'),
   //          'bio'=>Input::get('bio'),       
   //          'password'=>Input::get('pass')       

	 	// 	));
	 	$validation=Read::validate(Input::all());

	 	if($validation->fails())
	 	{
              return Redirect::route('new_author')->WithErrors($validation)->WithInput();
	 	}else{

			 	$author = new Read;
		        $author->username=Input::get('name');
		        $author->email=Input::get('email');
		        
		        $author->password=Hash::make(Input::get('pass'));
		        $author->bio=Input::get('bio');
		        $author->save();
			 	 return Redirect::route('print_author')
			 	->with('message','the user was created successfully');
	 		}
	 }
}

 ?>

