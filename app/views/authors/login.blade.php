@extends('layouts.default')


@section('abc')
      <h1>Authors</h1>

<ul class="list-unstyled">
   
</ul>
<p> {{ HTML::linkRoute('new_author','New User') }} </p>
<p> {{ HTML::linkRoute('login','Login') }} </p>

@stop




@section('abc2')
<h1>login</h1>


{{ Form::open(array("URL::route('post_login')")) }}

      <ul class="list-unstyled">
      	<li>{{ Form::label('name','username :') }}
      	{{ Form::text('name') }}</li>
      

      
      	<li>{{ Form::label('pass','password :') }}
      	{{ Form::password('pass') }}</li>
      

            <li>{{ Form::submit('login',array('class'=>'btn btn-danger')) }}</li>


       </ul>
      {{ Form::close() }}



@stop

