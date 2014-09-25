@extends('layouts.default')

@section('abc')
   <h2> {{ $detail->username }} </h2>

   <p> {{ $detail->bio }} </p>
@stop