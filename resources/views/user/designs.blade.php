@extends('layouts.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Designs</title>
      <link rel="stylesheet" type="text/css" href="{{asset('css/design.css')}}">
   </head>
   <body>

<div id="wrapper">
   <!-- Banner -->
     <section id="banner" class="major" >
       <div class="inner" >
         <header class="major">
           <h1>DESIGNS</h1>
         </header>
         <div class="content">
           <p class="font_pragraph">pepole upload our designs, 
             you can show them and get some ideas to make own design</p>
           <ul class="actions">
           </ul>
         </div>
       </div>
     </section>

   <!-- Main -->
     <div id="main">

       <!-- One -->
         <section id="one" class="tiles">
          @foreach ($design as $design)
           <article>
             <span class="image">
               <img class="delete-icon" src="{{asset('images/designs/'.$design->image)}}" alt="" />
             </span>
             <header class="major">
               <h3><a href="{{route('comments',$design->id)}}" class="link">{{$design->name}}</a></h3>
               <p>{{$design->discreption}}</p>
             </header>
           </article>
           @endforeach
         </section>
       
     </div>

 </div>


      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
      <script src="{{asset('js/jquery.scrollex.min.js')}}"></script>
      <script src="{{asset('js/browser.min.js')}}"></script>
      <script src="{{asset('js/breakpoints.min.js')}}"></script>
      <script src="{{asset('js/util.js')}}"></script>
      <script src="{{asset('js/main.js')}}"></script>

   </body>
</html>

@endsection