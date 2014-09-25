@extends('layouts.default')

@section('abc')
	<h1>Authors</h1>

<ul>
    @foreach ($users as $user) 
    	<li> {{ HTML::linkRoute('show',$user->username,array($user->id))}} </li>
    @endforeach
</ul>
<p> {{ HTML::linkRoute('new_author','New User') }} </p>
<p> {{ HTML::linkRoute('login','Login') }} </p>

@stop



 




