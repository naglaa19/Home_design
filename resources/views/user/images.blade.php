@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html> 
    <head> 
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/category.css')}}"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.css')}}"> --}}

        <link rel="stylesheet" type="text/css" href="{{asset('css/noscript.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/images.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
        <title>{{$category->name}}</title>
    </head>

    <body class="is-preload">
        <div id="main">
          @foreach($image as $img)
          <article class="thumb">
            <a href="{{asset('images/images/'.$img->image)}}" class="image"><img src="{{asset('images/images/'.$img->image)}}" alt="" /></a>
            <h2>{{$img->name}}</h2>
            <p>{{$img->discreption}}</p>
          </article>
          @endforeach
        </div>

    
  <!-- Scripts -->
    <script src="{{asset('js2/jquery.min.js')}}"></script>
    <script src="{{asset('js2/jquery.poptrox.min.js')}}"></script>
    <script src="{{asset('js2/browser.min.js')}}"></script>
    <script src="{{asset('js2/breakpoints.min.js')}}"></script>
    <script src="{{asset('js2/util.js')}}"></script>
    <script src="{{asset('js2/main.js')}}"></script>




  </body>
</html>
@endsection