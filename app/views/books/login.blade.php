@extends('books/book')
@section('main')
<h1>login</h1>


{{ Form::open(array('route' => 'books.show')) }}

      <ul class="list-unstyled">
      	<li>{{ Form::label('name','username :') }}
      	{{ Form::text('name') }}</li>
      

      
      	<li>{{ Form::label('pass','password :') }}
      	{{ Form::password('pass') }}</li>
      

            <li>{{ Form::submit('login',array('class'=>'btn btn-danger')) }}</li>


       </ul>
      {{ Form::close() }}



@stop
