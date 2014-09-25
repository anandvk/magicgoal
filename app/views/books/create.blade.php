@extends('books/book')
@section('main')
<h1>Create Book</h1>

{{ Form::open(array('route' => 'books.store')) }}

<div class="container">
<div class="row" style="background-color: #dedef8;">

   <div class="col-md-6">
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
                {{ Form::label('category', 'Category:') }} <br>
                {{ Form::select('category', $cate_options , Input::old('category'),array('class'=>'form-control')) }}
            </div>
           
            <div class="form-group">
                {{ Form::label('Language', 'Language') }} <br>
                {{ Form::select('language', array('0' => 'Select a Level', 
                   '1' => 'English', '2' => 'Hindhi','3' => 'Malayalam'), Input::old('language'),array('class'=>'form-control')) }}

            </div>
            {{ Form::submit('Save',array('class' => 'btn btn-danger')) }}

             {{ Form::close() }}
    </div>
    <div class="col-md-6">
    {{ HTML::image('img/a.jpg',null,array('class'=>'img-circle')) }}
    </div>
</div>
</div>
    
    
        
@if ($errors->any())
<ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif
@stop