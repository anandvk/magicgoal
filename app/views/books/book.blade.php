<!doctype html>
<html>
<head>
    <title>ANAND's BooK SHOP:INDIA</title>
    <meta charset="utf-8">
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-theme.min.css') }}
    
    {{ Html::style('css/bootstrap-theme.css')}}
    {{ Html::style('css/bootstrap-theme.css.map')}}
    {{ Html::style('css/bootstrap.css')}}
    {{ Html::style('css/bootstrap.css.map')}} 

   <style>
        table form { margin-bottom: 0; }
        form ul { margin-left: 0; list-style: none; }
        .error { color: red; font-style: italic; }
        body { padding-top: 20px; }
    </style>
</head>
<body>
<div>
@include('layouts.default')
</div>
<BR>&nbsp;<BR> 
<BR>&nbsp;<BR> 
  
<div class="container">
    @if (Session::has('message'))
    <div class="flash alert">
        <p>{{ Session::get('message') }}</p>
    </div>
    @endif

    @yield('main')
</div>

{{ Html::script('js/bootstrap.js')}}
{{ Html::script('js/bootstrap.min.js')}}
{{ Html::script('https://code.jquery.com/jquery-1.10.2.min.js')}}

</body>
</html>

 