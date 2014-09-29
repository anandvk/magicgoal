@extends('layouts.default')

@section('abc')
	<h1>Authors</h1>

<p> {{ HTML::linkRoute('new_author','New User') }} </p>
<p> {{ HTML::linkRoute('login','Login') }} </p>

@stop

@section('abc2')

@foreach ($detail as $user) 
   <h2> {{ $user->username }} </h2>

   <p> {{ $user->bio }} </p>
    @endforeach
@stop