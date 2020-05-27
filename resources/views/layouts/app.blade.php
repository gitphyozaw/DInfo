<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>D Info</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Dlogo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

   
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/app.css" rel="stylesheet">

 <!--  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 --><!------ Include the above in your HEAD tag ---------->

  <style type="text/css">


.menu {
  position: relative;
  display: inline-block;
} 
.menu a:hover::after{background-color: red !important;}
.sub-menu {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;

}

.sub-menu  a {
  color: black;
  display: none;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
  .sub-menu{display: none;} 

.sub-menu a:hover {background-color: #ddd;}

.menu:hover .sub-menu {
  display: block;
  width: 1160px;
  height: auto;
  max-height: auto;
  margin-left: -50em;
  margin-top: 22px;
}
.book-a-table{background: #ffb03b;
}
#search{ 
  width:650px;
  height: 70px;
  margin-bottom: 1em;
  cursor:pointer;  
   }
.weather{
  font-size: 22px;
  color: #fff;
}
.fas{
  font-size: 22px;
  color: #7b93a3;
  padding: 20px;
}
a:active {
  background-color: blue; 
  border-radius: 6px;
}
.img-fluid{
  
}
.hov-img{
  
  margin:-1em;
}
.mt-4{
  /*margin:-1em;*/
  width: 300px;
}
.menu-header{
 margin-top: -22px;
}
.card-footer>span{
  color:#980a0afa;;
  font-weight: bold;
}
.card-title{
  text-decoration: underline;
}
 

  </style>

</head>

<body id="app-layout">
   <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container text-right">
      <i class="icofont-phone"></i> +959 254098608
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    {{ csrf_field() }}
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{url('/')}}"><span>D Info</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">

        <ul >
         <!--  <li class="active">
            <a href="ondex.html">Home</a></li> -->
          <li><a href="{{url('/')}}">Home</a></li>
          <li class="menu"><a href="#menu">Menu</a>
            <div class="sub-menu">
 

                <div class="row menu-header">
                  <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                      <div class="card">
                        <a href="{{url('/menu_pagoda')}}">
                          <img  src="https://live.staticflickr.com/4402/36696146701_b06cf42d92_b.jpg" class="zoom img-fluid "  style="width: 270px;  height: 194px;">
                        </a>
                          <div class="card-block">
                              <h4 class="card-title">Pagodas In Dawei</h4>
                              <div class="meta">
                                  <a href="#">Friends</a>
                              </div>
                              <div class="card-text">
                                  Tawshif is a web designer 
                              </div>
                          </div>
                          <div class="card-footer">

                              <span><i class="fas fa-eye"></i>2 Views</span>
                          </div>
                      </div>
                  </div>
           <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                  <a href="{{url('/gallery_beach')}}">
                    <img  src="https://i1.wp.com/southernmyanmarplus.com/wp-content/uploads/2018/02/dawei-myanmar-61.jpg?resize=825%2C350&ssl=1" class="zoom img-fluid "  style="width: 250px;  height: 194px;">
                  </a>
                    <div class="card-block">
                        <h4 class="card-title">Beaches In Dawei</h4>
                        <div class="meta">
                            <a href="#">Friends</a>
                        </div>
                        <div class="card-text">
                            Tawshif is a web designer 
                        </div>
                    </div>
                    <div class="card-footer">
                        

                        <span><i class="fas fa-eye"></i>2 Views</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                  <a href="{{url('/gallery_hotel')}}">
                    <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRKQz-lu4yIeF2PSIkE8z4LqcZyAmO8UySRiKfPiVLf8WItlWrN&usqp=CAU" class="zoom img-fluid "  style="width: 250px;  height: 194px;">
                  </a>
                    <div class="card-block">
                        <h4 class="card-title">Hotels In Dawei</h4>
                        <div class="meta">
                            <a href="#">Friends</a>
                        </div>
                        <div class="card-text">
                            Tawshif is a web designer 
                        </div>
                    </div>
                    <div class="card-footer">
                        

                        <span><i class="fas fa-eye"></i>2 Views</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                  <a href="{{url('/gallery_restaurant')}}">
                     <img  src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  style="width: 250px;  height: 194px;">
                  </a>
                    <div class="card-block">
                        <h4 class="card-title">Restaurants and Shops In Dawei</h4>
                        <div class="meta">
                            <a href="#">Friends</a>
                        </div>
                        <div class="card-text">
                            Tawshif is a web designer 
                        </div>
                    </div>
                    <div class="card-footer">
                        

                        <span><i class="fas fa-eye"></i>2 Views</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                  <a href="{{url('/gallery_mountain')}}">
                     <img  src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" class="zoom img-fluid "  style="width: 250px;  height: 194px;">
                  </a>
                    <div class="card-block">
                        <h4 class="card-title">Mountains In Dawei</h4>
                        <div class="meta">
                            <a href="#">Friends</a>
                        </div>
                        <div class="card-text">
                            Tawshif is a web designer 
                        </div>
                    </div>
                    <div class="card-footer">
                        

                        <span><i class="fas fa-eye"></i>2 Views</span>
                    </div>
                </div>
            </div>
        </div>

            </div>
          </li>
          <li><a href="#events">Festivals</a></li>
          <li class="menu"><a href="{{url('/gallery')}}">Gallery</a>
          </li>
          <li><a href="#contact">Contact</a></li>
          <div id="google_translate_element"></div>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" >
            <video autoplay muted loop id="myVideo">
              <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
               <!--  <source src="public/video/pho-pho-kyaut-beach-dawei-myanmar.mp4" type="video/mp4"> -->
            </video>

            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown"><span>Dawei</span> Information</h2>
                <p class="animated fadeInUp">  Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <div class="weather">
                   <a href="#"><i class="fas fa-cloud-sun season1 "> Summer</i></a>
                   <a href="#"><i class="fas fa-cloud-rain season2"> Rainy</i></a>
                   <a href="#"><i class="fas fa-cloud-meatball season3"> Wintter</i></a>
                  </div>
                  <div class="input-field  ">
                    <input id="search" class="animated fadeInDown scrollto" type="text" placeholder="@please enter Keywords" aria-label="Search">
                  </div>
                  <!-- <a href="#menu" id="search" class="btn-menu animated fadeInDown scrollto"><span class="fa fa-search search__icon"></span></a><br><br> -->

                  <a href="#menu" class="btn-menu book-a-table text-center" >Book A Package</a>

                 
                </div>
              </div>
            </div>
          </div>


        </div>

       <!--  <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->

      </div>
    </div>
  </section><!-- End Hero -->

    @yield('content')

<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Dawei Infomation</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>D Info</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

    <!-- Vendor JS Files -->

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <!-- <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {
   
      var today = new Date();
      var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
      if(mm >= 03 || mm <= 06){
         $(".season1").css('color','#dd3524 ');
      }else if(mm <= 07 || mm <= 10){
         $(".season2").css('color','#1c5680');
      }else{
         $(".season3").css('color','#f1f1f1');

      }
   
  });
  $('.season1').on('click',function(){
            $(this).css('color','blue');
            $(".season2").css('color','#7b93a3');
            $(".season3").css('color','#7b93a3');
     });
  $('.season2').on('click',function(){
            $(this).css('color','blue');
            $(".season1").css('color','#7b93a3');
            $(".season3").css('color','#7b93a3');
     });
  $('.season3').on('click',function(){
            $(this).css('color','blue');
            $(".season1").css('color','#7b93a3');
            $(".season2").css('color','#7b93a3');
     });
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en,my',includedLanguages: 'en,my'}, 'google_translate_element');
  }

    

</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>