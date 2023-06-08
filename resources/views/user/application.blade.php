@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- SITE TITTLE -->
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Application</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="{{asset('css/app/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <!-- themify icon -->
  <link rel="stylesheet" href="{{asset('css/app/icons.css')}}" type="text/css">
  <!-- Slick Carousel -->
  <link href="{{asset('css/app/slick.css')}}" rel="stylesheet" type="text/css">
  <!-- Slick Carousel Theme -->
  <link href="{{asset('css/app/slick-theme.css')}}" rel="stylesheet" type="text/css">
  
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">
<!--=====================================
=            Homepage Banner            =
======================================-->

<section class="banner bg-1" id="home" style="background-image:url(images/application/banner-bg.jpg)">
	<div class="container">
		<div class="row">
			<div class="col-md-8 align-self-center">
				<!-- Contents -->
				<div class="content-block">
					<h1>Amazing App Best for Designs</h1>
					<h5>Let you track everything in your life with a simple way</h5>
					<h5>Show Your Imagination With AR</h5>
				</div>
			</div>
			<div class="col-md-4">
				<!-- App Image -->
				<div class="image-block">
					<img class="img-fluid phone-thumb" src="{{asset('images/application/LaCasa.png')}}" alt="iphone-banner">
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Homepage Banner  ====-->

<!--===========================
=            About            =
============================-->

<section class="about section bg-2" id="about" style="background-image:url(images/application/elipse-bg.png)">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>App Features</h2>
					<p class="font_pragraph">Experience the future of digital interaction with our feature-rich application, empowering you to unleash your creativity, make informed decisions, and simplify complex tasks with ease.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 align-self-center text-center">
				<!-- Image Content -->
				<div class="image-block">
					<img class="phone-thumb-md" src="{{asset('images/application/DragNoB.png')}}" alt="iphone-feature" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6 col-md-10 m-md-auto align-self-center ml-auto">
				<div class="about-block">
					<!-- About 01 -->
					<div class="about-item">
						<div class="icon">
							<i class="custom_icon" style="background-image:url(images/application/drag_and_drop.png)"></i>
						</div>
						<div class="content">
							<h5>Drag And Drop</h5>
							<p class="font_pragraph">Experience the future of augmented reality with our groundbreaking feature in the application. Seamlessly select any item within the app and witness it come to life in stunning 3D through the power of augmented reality. With just a few taps, you can transform your surroundings into an interactive playground, allowing you to visualize and interact with virtual objects as if they were right in front of you.</p>
						</div>
					</div>
					<!-- About 02 -->
					<div class="about-item active">
						<div class="icon">
							<i class="custom_icon2" style="background-image:url(images/application/scan.png)"></i>
						</div>
						<div class="content">
							<h5>Amazing Scanning</h5>
							<p class="font_pragraph">With our advanced scanning technology, you can now effortlessly convert any 2D image into a stunning 3D representation. By simply scanning the image using your device's camera, our app intelligently analyzes the visual data and reconstructs it into a lifelike three-dimensional model.</p>
						</div>
					</div>
					<!-- About 03 -->
					<div class="about-item">
						<div class="icon">
							<i class="custom_icon" style="background-image:url(images/application/scale.png)"></i>
						</div>
						<div class="content">
							<h5>Measuring</h5>
							<p class="font_pragraph">the power of augmented reality to accurately measure any space within our application. Say goodbye to manual measurements and guesswork, and welcome a new era of precise spatial understanding.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of About  ====-->

<!--==============================
=            Features            =
===============================-->

<section class="section feature" id="feature">
	<div class="container">
		<div class="row bg-elipse" style="background-image: url(images/application/elipse-bg-three.png)">
			<div class="col-lg-4 align-self-center text-center text-lg-right">
				<!-- Feature Item -->
				<div class="feature-item">
					<!-- Icon -->
					<div class="icon">
						<i class="ti-brush-alt"></i>
					</div>
					<!-- Content -->
					<div class="content">
						<h5>Scan-to-3D</h5>
						<p class="font_pragraph">Explore images from various angles and immerse yourself in a new dimension of visual storytelling.</p>
					</div>
				</div>
				<!-- Feature Item -->
				<div class="feature-item">
					<!-- Icon -->
					<div class="icon">
						<i class="ti-gift"></i>
					</div>
					<!-- Content -->
					<div class="content">
						<h5>AR Visualization</h5>
						<p class="font_pragraph">Step into the world of augmented reality and bring virtual objects to life in your surroundings.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 text-center">
				<!-- Feature Item -->
				<div class="feature-item mb-0">
					<!-- Icon -->
					<div class="icon">
						<i class="ti-comments"></i>
					</div>
					<!-- Content -->
					<div class="content">
						<h5>AR Measurement</h5>
						<p class="font_pragraph"> Utilize our AR measuring tool to accurately measure objects and spaces in real-time, revolutionizing the way you plan, design, and fit items within your environment.</p>
					</div>
				</div>
				<div class="app-screen">
					<img class="img-fluid" src="{{asset('images/application/ScanNoB.png')}}" alt="app-screen">
				</div>
				<!-- Feature Item -->
				<div class="feature-item">
					<!-- Icon -->
					<div class="icon">
						<i class="ti-support"></i>
					</div>
					<!-- Content -->
					<div class="content">
						<h5>Customization Options</h5>
						<p class="font_pragraph">Personalize your app experience by applying custom styles, colors, and effects to icons and other elements, allowing you to create a unique and visually stunning user interface</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 text-center text-lg-left align-self-center">
				<!-- Feature Item -->
				<div class="feature-item">
					<!-- Icon -->
					<div class="icon">
						<i class="ti-image"></i>
					</div>
					<!-- Content -->
					<div class="content">
						<h5>User-Friendly Interface</h5>
						<p class="font_pragraph">Our app boasts an intuitive and user-friendly interface, ensuring a seamless and enjoyable experience for users of all levels of expertise.</p>
					</div>
				</div>
				<!-- Feature Item -->
				<div class="feature-item">
					<!-- Icon -->
					<div class="icon">
						<i class="ti-pie-chart"></i>
					</div>
					<!-- Content -->
					<div class="content">
						<h5>Icon Library</h5>
						<p class="font_pragraph"> Access a comprehensive collection of icons that  enabling you to easily incorporate visually appealing graphics into your projects.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Features  ====-->

<!--=============================================
=                Images gallary                 =
==============================================-->
<section class="Gallary_sec">
	<div class="container">
		<div class="row">
		  <h1 style="margin-bottom: 50px;">2D Images to Scan-to-3D</h1>
	      <div class="gallery" id="gallery">
			@foreach($design as $design)
			<div class="gallery-item">
				
				<div class="content" >
					
					<img src="{{asset('images/scan/'.$design->image)}}" alt="">
						
				</div>
				
			</div>
			@endforeach
		</div>
	 </div>
	</div>
</section>

<!--====  End of Images  ====-->

<!--=============================================
=            Call to Action Download            =
==============================================-->

<section class="cta-download bg-3 overlay" style="background-image:url(images/application/desk-bg.jpg)" >
	<div class="container">
		<div class="row">
			<div class="col-lg-5 text-center">
				<div class="image-block"><img class="phone-thumb img-fluid" src="{{asset('images/application/LaCasa.png')}}" alt=""></div>
			</div>
			<div class="col-lg-7">
				<div class="content-block">
					<!-- Title -->
					<h2>Free Download Now</h2>
					<!-- Desctcription -->
					<p class="font_pragraph"> Take charge of your digital experience and unlock a world of possibilities. Get the app today!</p>
					<div >
						<button class="DwnBtn" ><a href="{{asset('LaCasa.apk')}}">Download Now</a> </button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Call to Action Download  ====-->

  <!-- JAVASCRIPTS -->
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA" async defer></script>

  <script src="{{asset('app_js/jquery.js')}}"></script>
  <script src="{{asset('app_js/bootstrap.min.js')}}"></script>
  <script src="{{asset('app_js/slick.min.js')}}"></script>
  <script src="{{asset('app_js/custom.js')}}"></script>
  
</body>

</html>

@endsection