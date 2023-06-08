@extends('layouts.layout')
@section('content')
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inspiration Spaces</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/inspiration.css')}}">
    </head>


    <body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">
				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Inspiration Spaces</h2>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- One -->
							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<a href="#" class="image"><img src="{{asset('images/inspiration/pic12.jpg')}}" alt="" /></a>
									<div class="content">
										<h2 class="major">kitchens</h2>
										<p>Create a stylish kitchen island with space for sitting and socialising with METOD cabinets. They come in different depths so you can customise your own dream kitchen island.</p>
									</div>
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a href="#" class="image"><img src="{{asset('images/inspiration/pic11.jpg')}}" alt="" /></a>
									<div class="content">
										<h2 class="major">Bedrooms</h2>
										<p>Style your bedroom with items that provide relaxation. Choose a bed that help you get fantastical dreams. To complete the beautiful room of your dreams and fit your life into it, add a matching commodes, dresser, wardrobe and nightstand.</p>
									</div>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a href="#" class="image"><img src="{{asset('images/inspiration/pic10.jpg')}}" alt="" /></a>
									<div class="content">
										<h2 class="major">Living Rooms</h2>
										<p>Are you starting afresh in a new house? Perhaps you’re preparing for a total house renovation? Finding new pieces for your house is exciting in any case! Choose from our wide selection of designs to enhance existing décor or entirely transform your living area.</p>
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major-header">Inspiration Furniture & More Lighting Units & Home Décor</h2>
									<p class="major-header">Explore a variety of luxurious home décor designs on our website.  You may get modern, classic, and contemporary styles . In addition to styles from other countries. The cottage, seaside, country, villa, and manor styles are just a few examples of styles that represent particular house architecture. You’ll find everything you’re looking for.</p>
									<section class="features">
										<article>
											<a href="#" class="image" id="zoom-in"><img src="{{asset('images/inspiration/pic8.webp')}}" alt="" /></a>
											<h3 class="major">Home Accessories</h3>
										</article>
										<article>
											<a href="#" class="image" id="zoom-in"><img src="{{asset('images/inspiration/pic7.webp')}}" alt="" /></a>
											<h3 class="major">Wall Decor</h3>
										</article>
										<article>
											<a href="#" class="image" id="zoom-in"><img src="{{asset('images/inspiration/pic5.webp')}}" alt="" /></a>
											<h3 class="major">Lighting</h3>
										</article>
										<article>
											<a href="#" class="image" id="zoom-in"><img src="{{asset('images/inspiration/pic6.webp')}}" alt="" /></a>
											<h3 class="major">Mirrors</h3>
										</article>
									</section>
								</div>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="{{asset('inspiration_js/jquery.min.js')}}"></script>
			<script src="{{asset('inspiration_js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('inspiration_js/browser.min.js')}}"></script>
			<script src="{{asset('inspiration_js/breakpoints.min.js')}}"></script>
			<script src="{{asset('inspiration_js/util.js')}}"></script>
			<script src="{{asset('inspiration_js/main.js')}}"></script>

	</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inspiration Spaces</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/inspiration.css')}}">
    </head>
    <body id="page-top">

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our </div>
                <div class="masthead-heading text-uppercase">Inspiration Spaces</div>
            </div>
        </header>
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">INSPIRATION FURNITURE & MORE LIGHTING UNITS & HOME DÉCOR</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('images/inspiration/pic8.webp')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading color">Home Accessories</div>
                                <!-- <div class="portfolio-caption-subheading text-muted">Illustration</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('images/inspiration/pic7.webp')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading color">Wall Decor</div>
                                <!-- <div class="portfolio-caption-subheading text-muted">Graphic Design</div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset('images/inspiration/pic5.webp')}}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading color">Lighting</div>
                                <!-- <div class="portfolio-caption-subheading text-muted"></div> -->
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase color">Home Styling</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid circle" src="{{asset('images/inspiration/pic12.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading color">kitchens</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="font_pragraph color-light">Create a stylish kitchen island with space for sitting and socialising with METOD cabinets. They come in different depths so you can customise your own dream kitchen island.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid circle" src="{{asset('images/inspiration/pic11.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading color">Bedrooms</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="font_pragraph color-light">Style your bedroom with items that provide relaxation. Choose a bed that help you get fantastical dreams. To complete the beautiful room of your dreams and fit your life into it, add a matching commodes, dresser, wardrobe and nightstand.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid circle" style="height:160px;" src="{{asset('images/inspiration/pic10.jpg')}}" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading color">Living Rooms</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="font_pragraph color-light">Are you starting afresh in a new house? Perhaps you’re preparing for a total house renovation? Finding new pieces for your house is exciting in any case! Choose from our wide selection of designs to enhance existing décor or entirely transform your living area.</p>
                            </div>
                        </div>
                    </li>
                
                </ul>
            </div>
        </section>
        <!-- Team-->
       
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}
        <script src="{{asset('inspiration_js/scripts.js')}}"></script>
        {{-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}
    </body>
</html>


@endsection