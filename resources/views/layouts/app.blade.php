<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>D Info</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <!--  <link href="../public/assets/img/Dlogo.png" rel="icon">
  <link href="../public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
 -->
  <!-- Google Fonts -->
 <!--  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">


  <link href="../public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../public/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../public/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../public/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> -->



    <!-- Favicons -->
  
  <link rel="stylesheet" href="{{asset('assets/img/Dlogo.png')}}" rel="icon">
  <link rel="stylesheet" href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="icon">
   <link rel="stylesheet" href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="icon">
   <link rel="stylesheet" href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="icon">
   <link rel="stylesheet" href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="icon">
   <link rel="stylesheet" href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="icon">
   <link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="icon">

 
 



   
  <!-- Template Main CSS File -->
  <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
   <link rel="stylesheet" href="{{asset('css/app.css')}}" rel="icon">

  <!-- <link href="../public/css/app.css" rel="stylesheet">
 -->
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
.img_card{
  margin-top: -3px;
}
.sub-menu  a {
  color: black;
  display: none;
  padding: 0px;
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
  margin-left: -36em;
  margin-top: 22px;
}
.btn-menu{
  width:240px !important; 
  height: 60px !important;
  border-radius: 1px !important; 
  font-size: 16px !important;
  
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
  word-break: break-all;
}
 #snow {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
    z-index: 1000;
}

 

.rain {
  position: inherit;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
}
 

.drop {
  position: absolute;
  bottom: 80%;
  width: 20px;
  height: 120px;
  pointer-events: none;
  animation: drop 1s linear infinite;
}

@keyframes drop {

  0% {
    transform: translateY(0vh);
  }
  75% {
    transform: translateY(78vh);
  }
  100% {
    transform: translateY(72vh);
  }
}

.stem {
  width: 7px;
  height: 78%;
  margin-left: 7px;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.25));
  animation: stem 0.5s linear infinite;
  
}

@keyframes stem {
  0% {
    opacity: 1;
  }
  45% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}

.splat {
  width: 15px;
  height: 10px;
  border-top: 2px dotted rgba(255, 255, 255, 0.5);
  border-radius: 70%;
  opacity: 1;
  transform: scale(0);
  animation: splat 1s linear infinite;
  display: none;
  background-color: #8d87e052;

}

body.splat-toggle .splat {
  display: block;
}

@keyframes splat {
  0% {
    opacity: 1;
    transform: scale(0);
  }
  80% {
    opacity: 1;
    transform: scale(0);
  }
  90% {
    opacity: 0.5;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: scale(1.5);
  }
}

/*autocomplete */
#search{ 
  width:650px;
  height: 70px;
  margin-bottom: -4px;
  cursor:pointer;  
   }
#submenu_list{
  background-color: white;  
  margin-left: 270px;
  border-radius: none;

}
#submenu_list >ul{
  width: 650px;
  height: 700px;
  overflow-y: auto;
}
 .complete_li{
  border-bottom: 1px solid #fff34322;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
 }
 .complete_desc{
  float: right;
 }
#hero #submenu_list h3{
  color:#000000;
  font-family: Lucida Fax;
}
#hero #submenu_list img{
  margin-top: 29px;
}
 #hero #submenu_list p {
    width: 100%;
    color: rebeccapurple;
    word-spacing: 4px;
}
 .address-row{
  margin-top: -22px;
 }
 .address-img{
  margin-top: -30px;
 }
address{
  color: #000;
  
  float: right; 
  }
.address_img {
  width: 30px !important;
  height: 30px;
  
}
.zoom {
  width: 290px;
  height: 194px;
}
.logo-img{
  width: 120px;
  height: 114px;
}
  </style>



</head>

<body id="app-layout" class="back-row-toggle splat-toggle">
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
        <h1 class="text-light"><a href="{{url('/')}}"><span><img src="assets/img/Dlogo.png" alt=""   class="logo-img">D Info</span></a></h1>
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
                @if(count($Arr['Menu'])>0)
                  @foreach($Arr['Menu'] as $menu)
                    @if($menu->type != "logo")
                      <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="img_card" >
                          <a href="{{url('/show_menu', $menu->menu_id)}}">
                            <img  src="../public/uploadedimages/menu/{{$menu->image}}" class="zoom">
                          </a>
                          <div class="card-block">
                            <h4 class="card-title"> {{$menu->name}} In Dawei</h4>
                              <a href="#">
                                <div class="rating">
                                  <span>☆☆☆☆☆</span>
                                </div>
                              </a>
                            <div class="card-text">
                              Tawshif is a web designer 
                            </div>
                          </div>
                          <div class="card-footer">
                            <span><i class="fas fa-eye"></i>{{$menu->views}} Views</span>
                          </div>
                        </div>
                      </div>
                    @endif

                  @endforeach
                @endif

                <!-- <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                      <div class="img_card" >
                        <a href="{{url('/show_menu', 1)}}">
                          <img  src="https://live.staticflickr.com/4402/36696146701_b06cf42d92_b.jpg" class="zoom">
                        </a>
                        <div class="card-block">
                          <h4 class="card-title">Pagodas In Dawei</h4>
                            <a href="#">
                              <div class="rating">
                                <span>☆☆☆☆☆</span>
                              </div>
                            </a>
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
                    <div class="img_card" >
                      <a href="{{url('/show_menu', 2)}}">
                        <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRKQz-lu4yIeF2PSIkE8z4LqcZyAmO8UySRiKfPiVLf8WItlWrN&usqp=CAU" class="zoom"  style="width: 290px;  height: 194px;">
                      </a>
                      <div class="card-block">
                        <h4 class="card-title">Hotels In Dawei</h4>
                          <a href="#">
                            <div class="rating">
                              <span>☆☆☆☆☆</span>
                            </div>  
                          </a>
                             
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
                    <div class="img_card" >
                    <a href="{{url('/show_menu', 3)}}">
                       <img  src="../img/mountain.jpg" class="zoom"  style="width: 290px;  height: 194px;">
                    </a>
                    <div class="card-block">
                      <h4 class="card-title">Mountains In Dawei</h4>
                        <a href="#">
                          <div class="rating">
                            <span>☆☆☆☆☆</span>
                          </div>  
                        </a>
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
                  <div class="img_card" >
                    <a href="{{url('/show_menu',4)}}">
                        <img  src="../img/beache.jpg" class="zoom "  style="width: 290px;  height: 194px;">
                    </a>
                    <div class="card-block">
                      <h4 class="card-title">Beaches In Dawei</h4>
                        <a href="#">
                          <div class="rating"><span>☆☆☆☆☆</span>
                          </div>  
                        </a>
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
                  <div class="img_card" >
                    <a href="{{url('/show_menu', 5  )}}">
                       <img  src="../img/restaurant.jpg" class="zoom"  style="width: 290px;  height: 194px;">
                    </a>
                    <div class="card-block">
                      <h4 class="card-title">Restaurants In Dawei</h4>
                        <a href="#">
                          <div class="rating">
                            <span>☆☆☆☆☆</span>
                          </div> 
                        </a>
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
                  <div class="img_card" >
                    <a href="{{url('/show_menu', 8  )}}">
                       <img  src="../img/waterfall.jpg" class="zoom"  style="width: 290px;  height: 194px;">
                    </a>
                    <div class="card-block">
                      <h4 class="card-title">Waterfalls In Dawei</h4>
                        <a href="#">
                          <div class="rating">
                            <span>☆☆☆☆☆</span>
                          </div> 
                        </a>
                      <div class="card-text">
                          Tawshif is a web designer 
                      </div>
                    </div>
                    <div class="card-footer">
                      <span><i class="fas fa-eye"></i>2 Views</span>
                    </div>
                  </div>
                </div>
 -->
                

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
<div id="snow"></div>
<div class="rain front-row"></div>
  
 
  <!-- ======= Hero Section ======= -->
  <section id="hero" >
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
                    <div id="submenu_list"> </div>
                  </div>
                  <!-- <a href="#menu" id="search" class="btn-menu animated fadeInDown scrollto"><span class="fa fa-search search__icon"></span></a><br><br> -->

                  <a href="#menu" class="btn-menu  text-center" >Book A Package</a>

                 
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

  <script src="asset('assets/vendor/jquery/jquery.min.js')"></script>
  <script src="asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')"></script>
  <script src="asset('assets/vendor/jquery.easing/jquery.easing.min.js')"></script>
  <script src="asset('assets/vendor/php-email-form/validate.js')"></script>
  <script src="asset('assets/vendor/jquery-sticky/jquery.sticky.js')"></script>
  <script src="asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')"></script>
  <script src="asset('assets/vendor/venobox/venobox.min.js')"></script>
  <!-- <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 

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
          makeItRain();
      }else{
         $(".season3").css('color','#f1f1f1');
          fallingSnow(); 
      }
   


      $('#search').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
           var _token = $('input[name="_token"]').val();
           $.ajax({
            url:"{{ route('autocomplete') }}",
            method:"POST",
            data:{query:query, _token:_token},
            success:function(data){
             $('#submenu_list').fadeIn();  
             $('#submenu_list').html(data);
            },

           });
        }else{
          $('#submenu_list').fadeOut();
        }
      });

      $(document).on('click', 'li', function(){  
          //$('#search').val($(this).text());  
          $('#submenu_list').fadeOut();  
      });   

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

  function fallingSnow(){
    var script = document.createElement('script');
    script.src = 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js';
    script.onload = function(){
      
      $(".box").css("box-shadow", "0px 2px 5px rgba(236, 114, 9, 0.9)");
        particlesJS("snow", {
            "particles": {
                "number": {
                    "value": 80,
                    "density": {
                        "enable": true,
                        "value_area": 400
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false
                    }
                },
                "size": {
                    "value": 5,
                    "random": true,
                    "anim": {
                        "enable": false
                    }
                },
                "line_linked": {
                    "enable": false
                },
                "move": {
                    "enable": true,
                    "speed": 2,
                    "direction": "bottom",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": true,
                        "rotateX": 300,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "events": {
                    "onhover": {
                        "enable": false
                    },
                    "onclick": {
                        "enable": false
                    },
                    "resize": false
                }
            },
            "retina_detect": true
        });
    }
    document.head.append(script);
}
  

 var makeItRain = function() {

  $('.rain').empty();
  var increment = 0;
  var drops = "";
 
  while (increment < 100) {
    //couple random numbers to use for various randomizations
    //random number between 98 and 1
    var randoHundo = (Math.floor(Math.random() * (98 - 1 + 1) + 1));
    //random number between 5 and 2
    var randoFiver = (Math.floor(Math.random() * (5 - 2 + 1) + 2));
    increment += randoFiver;
    drops += '<div class="drop" style="left: ' + increment + '%; bottom: ' + (randoFiver + randoFiver - 1 + 100) + '%; animation-delay: 0.' + randoHundo + 's; animation-duration: 0.5' + randoHundo + 's;"><div class="stem" style="animation-delay: 0.' + randoHundo + 's; animation-duration: 0.5' + randoHundo + 's;"></div><div class="splat" style="animation-delay: 0.' + randoHundo + 's; animation-duration: 0.5' + randoHundo + 's;"></div></div>';
      }

  $('.rain.front-row').append(drops);
  //$('.rain.back-row').append(backDrops);
}

</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>