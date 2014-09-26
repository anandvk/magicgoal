 @extends('layouts.default')



 

 @section('abc2')

      <h1>Register</h1>
     
     @if(Session::has('errors'))

      

            <ul>
                  {{ $errors->first('name') }}
                  {{ $errors->first('email' ) }}
                  {{ $errors->first('bio' ) }}
                  {{ $errors->first('pass') }}
            </ul>


      @endif

      {{ Form::open(array("URL::route('post_create')")) }}

      <p>
      	{{ Form::label('name','Name :') }}
      	{{ Form::text('name') }}
      </p>

      <p>
      	{{ Form::label('email','Email :') }}
      	{{ Form::text('email' ) }}
      </p>

      <p>
      	{{ Form::label('bio','Biodata :') }}
      	{{ Form::textarea('bio') }}
      </p>

      <p>
      	{{ Form::label('pass','password :') }}
      	{{ Form::password('pass') }}
      </p>

      <p> {{ Form::submit('Add users',array('class'=>'btn btn-primary')) }} </p>

      {{ Form::close() }}

 @stop