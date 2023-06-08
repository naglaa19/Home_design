@extends('layouts.layout')
@section('content')

    {{-- <body>
        <section class="contain">
            <div class="first_section">
                <img class="first_section_img" src="{{asset('images/3d_ar/ar.jpeg')}}" alt="">
                <div class="first_section_header">
                    <h1>3D Model Viewer & Augmented Reality</h1>
                    <h3>Do more than imagine. Let you see your products in every variation and angle.</h3>
                </div>
            </div>

            <div class="second_section">
                <div class="second_section_header">
                    <h1>Why Using AR?</h1>
                </div>
                <div class="icons">
                    <div class="icon_hand">
                        <img src="{{asset('images/3d_ar/icon-hand.png')}}">
                        <p>Increase in customer engagement with AR</p>
                    </div>
                    <div class="icon_chart">
                        <img src="{{asset('images/3d_ar/icon_chart.png')}}">
                        <p>Increase in conversion rate when viewing 3D models in AR</p>
                    </div>
                </div>
            </div>

            <div class="third_section">
                <div class="third_section_video">
                    <video autoplay loop muted plays-inline class="backVideo">
                        <source src="{{asset("images/3d_ar/AR.mp4")}}" type="video/mp4">
                    </video>
                </div>
                <div class="third_section_description">
                    <h2>Augmented Reality</h2>
                    <p>Augmented Reality function brings products to life and enhances Customer Experience. Just a click to see a 3D live preview of your products in real life, increasing conversion and confidence.</p>
                </div>
            </div>

            <div class="fourth_section">
                <div class="fourth_section_description">
                    <h2>View, customize & configure, all in one place</h2>
                    <p>Turn your viewer into a powerful 3D product configurator with our Professional Suite and add a revolutionary offer to your clients. </p>
                </div>
                <img class="fourth_section_img" src="{{asset("images/3d_ar/AR_color.png")}}">
                <div class="content">
                    <video autoplay loop muted plays-inline class="video">
                        <source src="{{asset("images/3d_ar/color.mp4")}}" type="video/mp4">
                    </video> 
                </div> 
            </div>



            <div class="fifth_section">
                <img src="{{asset("images/3d_ar/room.png")}}">
                <div class="fifth_section_description">
                    <h2>3D Viewer</h2>
                    <p>Augmented Reality function brings products to life and enhances Customer Experience. Just a click to see a 3D live preview of your products in real life, increasing conversion and confidence.</p>
                </div>
            </div>

        </section>
    </body> --}}


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>3D viewer & AR</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"/>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/ar.css')}}">
    </head>
    <body>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">3D Model Viewer & Augmented Reality</h1>
                            <h3>Do more than imagine. Let you see your products in every variation and angle.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <video class="col-lg-6 order-lg-2 text-white showcase-img" autoplay muted loop><source src="{{asset("images/3d_ar/AR.mp4")}}" type="video/mp4"></video>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2  class="color">AUGMENTED REALITY</h2>
                        <p class="lead mb-0 color font_pragraph">Augmented Reality function brings products to life and enhances Customer Experience. Just a click to see a 3D live preview of your products in real life, increasing conversion and confidence.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('images/3d_ar/2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2 class="color">VIEW, CUSTOMIZE & CONFIGURE, ALL IN ONE PLACE</h2>
                        <p class="lead mb-0 color font_pragraph">Turn your viewer into a powerful 3D product configurator with our Professional Suite and add a revolutionary offer to your clients.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/3d_ar/ar.jpeg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2  class="color">3D VIEWER</h2>
                        <p class="lead mb-0 color font_pragraph">Augmented Reality function brings products to life and enhances Customer Experience. Just a click to see a 3D live preview of your products in real life, increasing conversion and confidence.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Why Using AR...?</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3 " src="{{asset('images/3d_ar/icon_chart.png')}}" alt="..." />
                            <p class="font-weight-light mb-0 color font_pragraph">increase in conversion rate when viewing 3d modeling in AR.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{asset('images/3d_ar/icon-hand.png')}}" alt="..." />
                            <p class="font-weight-light mb-0 color font_pragraph">Increase in customer engagment with AR.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{asset('images/3d_ar/icon-10.png')}}" alt="..." />
                            <p class="font-weight-light mb-0 color font_pragraph">The modification of a real-life environment by the addition of visual elements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <!-- Bootstrap core JS-->
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}
        <!-- Core theme JS-->
        <script src="{{asset('js2/scripts.js')}}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

@endsection