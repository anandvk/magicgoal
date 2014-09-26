<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title}} </title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-theme.min.css') }}
</head>
<body>
	@section('master')
    <nav class="navbar navbar-default" role="navigation" style="background:#777;text-color:#fff">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"
data-target="#example-navbar-collapse">
<span class="sr-only" >Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand text-primary" href="#"  style="color:#abcdef;">Online Library</a>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
<ul class="nav navbar-nav">
<li>{{ HTML::linkRoute('print_author','Home',null,array('style'=>'color:#abcdef','class'=>'navbar-brand')) }}</li>


</li>
<li>
<div>
<form class="navbar-form navbar-left" role="search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search">
</div>
<button type="submit" class="btn btn-default" style="color:#abcdef;">Submit Button</button>
</form>
</li>
</ul>

<ul class="nav navbar-nav navbar-right">
                
   <li><a class="navbar-brand" href="#" style="color:#abcdef;"> 
   	@if($log<>'Logout')
   	{{ HTML::linkRoute('login',$log,null,array('class'=>'navbar-brand','style'=>'color:#abcdef')) }}</a>  </li>
   	@else
   	<li>
     {{ HTML::linkRoute('logout',$log,null,array('class'=>'navbar-brand','style'=>'color:#abcdef')) }} </li>
   	@endif
                              
</ul>
</div>
</nav> 
	@show
   
   @if(Session::has('message'))
    <p style="color:green;"> {{ Session::get('message') }}  </p>
   @endif 


   <div class="container">
<h1>Library!!!</h1>
<div class="row" style="background-color: #dedef8;">
                     <frame>
                     <div class="col-md-4" >
                       @yield('abc2') 
                     </div>
                     </frame>
                     <frame>
					<div class="col-md-4" >
					 
					</div>
					</frame>
					<div class="col-md-4" >
							
					</div>
</div>

	




<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../libs/demo-assets/bootstrap/js/bootstrap.min.js"></script>

<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="../jquery.smartmenus.js"></script>

<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="../addons/bootstrap/jquery.smartmenus.bootstrap.js"></script>




</body>
</html>