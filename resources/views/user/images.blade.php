@extends('layouts.layout')
@section('content')
<!DOCTYPE HTML>
<html>
	<head>
		<title>{{$category->name}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('css/images.css')}}" />
		<noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
	</head>
	<body class="is-preload">

				<!-- Main -->
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
    <script src="{{asset('images_js/jquery.min.js')}}"></script>
    <script src="{{asset('images_js/jquery.poptrox.min.js')}}"></script>
    <script src="{{asset('images_js/browser.min.js')}}"></script>
    <script src="{{asset('images_js/breakpoints.min.js')}}"></script>
    <script src="{{asset('images_js/util.js')}}"></script>
    <script src="{{asset('images_js/main.js')}}"></script>

	</body>
</html>
@endsection