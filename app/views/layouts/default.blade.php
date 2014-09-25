<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title}} </title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-theme.min.css') }}
</head>
<body>
	@include('layouts.head')
   
   @if(Session::has('message'))
    <p style="color:green;"> {{ Session::get('message') }}  </p>
   @endif 

	@yield('abc')




<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="../libs/demo-assets/bootstrap/js/bootstrap.min.js"></script>

<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="../jquery.smartmenus.js"></script>

<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="../addons/bootstrap/jquery.smartmenus.bootstrap.js"></script>




</body>
</html>