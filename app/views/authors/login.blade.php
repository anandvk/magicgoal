@extends('layouts.default')


@section('abc')
<h1>login</h1>


{{ Form::open(array("URL::route('post_login')")) }}

      <p>
      	{{ Form::label('name','username :') }}
      	{{ Form::text('name') }}
      </p>

      <p>
      	{{ Form::label('pass','password :') }}
      	{{ Form::password('pass') }}
      </p>

      <p> {{ Form::submit('login') }} </p>

      {{ Form::close() }}



@stop

