@extends('books/book')
@section('main')
<h1>Edit Book</h1>
{{ Form::model($book, array('method' => 'PATCH', 
'route' =>array('books.update', $book->id))) }}
 <div class="form-group">

    <div class="form-group">
        {{ Form::label('ISBN', 'ISBN:') }} <br>
        {{ Form::text('isbn',null,array('class'=>'form-control')) }}
    </div>
  
  <div class="form-group">
  
        {{ Form::label('Title', 'Title:') }} <br>
        {{ Form::text('title',null,array('class'=>'form-control')) }}
        </div>
  
  <div class="form-group">
        {{ Form::label('Author', 'Author:') }} <br>
        {{ Form::text('author',null,array('class'=>'form-control')) }}
        </div>
  
  <div class="form-group">
        {{ Form::label('Publisher', 'Publisher:') }} <br>
        {{ Form::text('publisher',null,array('class'=>'form-control')) }}
        </div>
  
  <div class="form-group">
        {{ Form::label('Language', 'Language') }} <br>
        {{ Form::select('language', array('0' => 
          'Select a Level', '1' => 'English', '2' => 'Spanish'), 
           null, array('class' => 'form-control')) }}
           </div>
           <br>
  <div class="form-group">
        {{ Form::submit('Update', array('class' =>  
                 'btn btn-warning'))}}
        {{ link_to_route('books.show', 'Cancel', $book->
                  id,array('class' => 'btn btn-danger')) }}
    </div>

</div>
    
{{ Form::close() }}
@if ($errors->any())
<ul>
    {{implode('',$errors->all('<li class="error">:message</li>'))}}
</ul>
@endif
@stop