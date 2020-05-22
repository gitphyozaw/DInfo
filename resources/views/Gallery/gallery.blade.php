
@extends('layouts.app')
@section('content')
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

 <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> -->
 
  <link href="css/app.css" rel="stylesheet">
<link href="{{ asset('css/gallery.css') }}" rel="stylesheet"> 
<script type="text/javascript" src="{{ asset('js/gallery.js') }}"></script>
 <style type="text/css">


 </style>
    <!-- Page Content -->

   <div class="container page-top">
    <p class="gal_head"><i class="fa fa-list"></i> Gallery List</p><hr>
        <div class="row shadow-lg p-3 mb-5 bg-white rounded">

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               
                <h3 class="text-light"><span>Pagodas</span></h3>

                 <a href="{{url('/menu_pagoda')}}">
                    <img  src="https://live.staticflickr.com/4402/36696146701_b06cf42d92_b.jpg" class="zoom img-fluid "  alt="">
                </a>
             </div>
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               
                <h3 class="text-light"><span>Beaches</span></h3>

                 <a href="{{url('/gallery_beach')}}">
                    <img  src="https://i1.wp.com/southernmyanmarplus.com/wp-content/uploads/2018/02/dawei-myanmar-61.jpg?resize=825%2C350&ssl=1" class="zoom img-fluid "  alt="">
                </a>
             </div>
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               
                <h3 class="text-light"><span>Hotels</span></h3>

                 <a href="{{url('/gallery_hotel')}}">
                    <img  src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="zoom img-fluid "  alt="">
                </a>
             </div><br>
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               
                <h3 class="text-light"><span>Restaurants</span></h3>

                 <a href="{{url('/gallery_restaurant')}}">
                     <img  src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  alt="">
                </a>
             </div>
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               
                <h3 class="text-light"><span>Mountains</span></h3>

                 <a href="{{url('/gallery_mountain')}}">
                    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSVLwrSQczBoJdgrlISF1LMb8RQSz639lU0-bL6BgHfQxZce3xk&usqp=CAU" class="zoom img-fluid "  alt="">
                </a>
             </div>         
           
       </div>


    </div>


    <div class="container">
      <h2>Related Images</h2>
       <section class="customer-logos slider">
            <div class="slide">
                <a href="{{url('/gallery_mountain')}}">
                        <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSVLwrSQczBoJdgrlISF1LMb8RQSz639lU0-bL6BgHfQxZce3xk&usqp=CAU" class="zoom img-fluid "  alt="">
                </a>
            </div>
            <div class="slide">
              <a href="{{url('/gallery_restaurant')}}">
                     <img  src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  alt="">
                </a>
            </div>
            <div class="slide">
                <a href="{{url('/gallery_hotel')}}">
                        <img  src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" class="zoom img-fluid "  alt="">
                </a>
            </div>
            <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>

            <div class="slide">
                <a href="{{url('/gallery_beach')}}">
                        <img  src="https://i1.wp.com/southernmyanmarplus.com/wp-content/uploads/2018/02/dawei-myanmar-61.jpg?resize=825%2C350&ssl=1" class="zoom img-fluid "  alt="">
                </a>
            </div>
            <div class="slide">
                <a href="{{url('/gallery_beach')}}">
                        <img  src="https://i1.wp.com/southernmyanmarplus.com/wp-content/uploads/2018/02/dawei-myanmar-61.jpg?resize=825%2C350&ssl=1" class="zoom img-fluid "  alt="">
                </a>
            </div>
              <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
              <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
              <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
       </section>
       
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
@endsection