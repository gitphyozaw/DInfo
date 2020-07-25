@extends('layouts.app')
@section('content')

<body>
 <style type="text/css">
   .item-pck{
    padding-bottom: 15px !important;
   }
    
  

span img{ width: 51px; height: 50px;}
.icon_img{
    width: 106px;  
    margin: 4px;
    font-family: "Satisfy", sans-serif;
}
.gallery_row_header{ height: 146px;    margin-top: 24px;}
.waves-effect{width: 74px;}
.icon_img{height: 116px !important;}
.nav-link {
    padding: 0.5rem 2rem !important;
}
.nav-link.active {
    border-color: #1b91ef !important;
}
/*.nav-item{
  width: 148px !important;
}*/
.nav-item a{
   color: #000;
}
.nav-item :hover{
  background-color: #1b91ef !important;
}
.sks-pagoda{
  max-height: 600px;
  overflow-y: auto;
  margin-top: -35px;
}
.tab-content p{
   color: #000;
   word-spacing: 4px;
   text-align: justify;
   letter-spacing: 0.5px;
}
.tab-content img{
  float:left;
  width: 150px;
  width: 250px;
  padding: 10px 13px 0px 0px;

}
center{
  background-color: #1b91ef ;
  height: 70px;
  padding: 8px;
  color: black;
  font-size: 35px;
  font-family: initial;
  word-spacing: 3px;
}
.pag-end{
  font-size: 22px;
  height: 64px;

}
.sks-pagoda::-webkit-scrollbar-track {
  border: 1px solid #1b91ef;
  padding: 2px 0;
  background-color: #fff;
}

.sks-pagoda::-webkit-scrollbar {
  width: 16px;
}

.sks-pagoda::-webkit-scrollbar-thumb {
  box-shadow: inset 0 0 6px rgba(0,0,0,.3);
  border: 1px solid #000;
  background-image: -webkit-linear-gradient(60deg,#1b91ef 0%,#1b91ef);
}
/*image slider*/
 @import url(http://fonts.googleapis.com/css?family=Anaheim);

* {
    margin: 0;
    padding: 0;
    outline: none;
    border: none;
    box-sizing: border-box
}
  

#carousel {
    width: 100%;
    height: 10%;
    position: absolute;
    transform-style: preserve-3d;
    animation: rotation 90s infinite linear
}

#carousel:hover {
    animation-play-state: paused;
}

#carousel figure {
    display: block;
    position: absolute;
    width: 90%;
    height: 20%;
    left: 10px;
    top:  0px;
    /*background:#fff;*/
    background:rgba(255, 255, 255, -2);

    filter:blur(-1px);
    -o-filter:blur(-1px);
    -ms-filter:blur(-1px);
    -moz-filter:blur(-1px);
    -webkit-filter:blur(-1px);
    overflow: hidden;
    border: none;
}

#carousel figure:nth-child(1) {
    transform: rotateY(0deg) translateZ(188px)
}

#carousel figure:nth-child(2) {
    transform: rotateY(40deg) translateZ(188px)
}

#carousel figure:nth-child(3) {
    transform: rotateY(80deg) translateZ(188px)
}

#carousel figure:nth-child(4) {
    transform: rotateY(120deg) translateZ(188px)
}

#carousel figure:nth-child(5) {
    transform: rotateY(160deg) translateZ(188px)
}

#carousel figure:nth-child(6) {
    transform: rotateY(200deg) translateZ(188px)
}

#carousel figure:nth-child(7) {
    transform: rotateY(240deg) translateZ(188px)
}

#carousel figure:nth-child(8) {
    transform: rotateY(280deg) translateZ(188px)
}

#carousel figure:nth-child(9) {
    transform: rotateY(320deg) translateZ(188px)
}

#carousel img:hover {
    -webkit-filter: grayscale(0);
    transform: scale(1.2, 1.2)
}

@keyframes rotation {
    from {
        transform: rotateY(0deg)
    }

    to {
        transform: rotateY(360deg)
    }
}
.slider{
  padding: 3px 0;
  height: 150px;
}
 </style>

  <main id="main">
    <section id="slider" class="slider">
      <div id="carousel">
        <figure><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562470009/BBBootstrap/Gallary/img-1.jpg"></figure>
        <figure><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562470009/BBBootstrap/Gallary/img-5.jpg"></figure>
        <figure><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562470010/BBBootstrap/Gallary/img-4.jpg"></figure>
        <figure><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562470010/BBBootstrap/Gallary/img-3.jpg"></figure>
        <figure><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562470010/BBBootstrap/Gallary/img-2.jpg"></figure>
        <figure><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562470010/BBBootstrap/Gallary/img-6.jpg"></figure>
        <figure><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562470010/BBBootstrap/Gallary/img-8.jpg"></figure>
        <figure><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562470010/BBBootstrap/Gallary/img-7.jpg"></figure>
        <figure><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562470011/BBBootstrap/Gallary/img-9.jpg"></figure>
    </div>
    </section>
    <!-- ======= Whu Us Section ======= -->
    <form   method="POST"  >
    {{ csrf_field() }}

    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row col-sm-10 row-pck">

          <div class="col-lg-4 item-pck">
            <div class="box card " style="width: 18rem;">
              <img src="https://live.staticflickr.com/4402/36696146701_b06cf42d92_b.jpg" class="zoom img-fluid " style="width: 288px;  height: 194px;">

              <div class="card-body">
                <span>0 Days</span>
                <p class="card-text">Some quick example text to build on the card title  </p>
                <a href="{{url('/pack')}}" class="btn btn-primary">Package</a>
                 
              </div>
            </div>
            
          </div>
          <div class="col-lg-4 item-pck">
            <div class="box card " style="width: 18rem;">
              <img src="https://live.staticflickr.com/4402/36696146701_b06cf42d92_b.jpg" class="zoom img-fluid " style="width: 288px;  height: 194px;">

              <div class="card-body">
                <span>00 Days</span>
                <p class="card-text">Some quick example text to build on the card title  </p>
                <a href="#" class="btn btn-primary">Package</a>
              </div>
            </div>
            
          </div>
          <div class="col-lg-4">
            <div class="box card " style="width: 18rem;">
              <img src="https://live.staticflickr.com/4402/36696146701_b06cf42d92_b.jpg" class="zoom img-fluid " style="width: 288px;  height: 194px;">

              <div class="card-body">
                <span>00 Days</span>
                <p class="card-text">Some quick example text to build on the card title  </p>
                <a href="#" class="btn btn-primary">Package</a>
              </div>
            </div>
            
          </div>

          

        </div>

      </div>
    </section><!-- End Whu Us Section -->
  </form>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          <!-- <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/about.jpg");'> -->
          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url(" https://i1.wp.com/southernmyanmarplus.com/wp-content/uploads/2018/02/dawei-myanmar-61.jpg?resize=825%2C350&ssl=1");'>

            <a href="https://www.youtube.com/watch?v=kytH0TV7LQk" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Dawei Beautiful Place<strong> velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->
    <section>  
 
      <div class="container">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            @if(count($Arr['Menu'])>0)
              @foreach($Arr['Menu'] as $menu)
                @if($menu->name == "Pagodas")
                  <li class="nav-item">
                    @if($menu->type == "logo")
                      <a href="{{url('/show_menu', $menu->menu_id)}}" class="nav-link active"    >
                              <button type="button" class="btn btn-outline-black waves-effect "  >
                                <span><img src="../public/uploadedimages/menu/{{$menu->image}}"></span>
                              </button><br>{{$menu->name}}</a>
                    @endif  
                  </li>
                @else
                  <li class="nav-item">
                    @if($menu->type == "logo")
                    <a href="{{url('/show_menu', $menu->menu_id)}}" class="nav-link"   href="#{{$menu->name}}">
                              <button type="button" class="btn btn-outline-black waves-effect "  >
                                <span><img src="../public/uploadedimages/menu/{{$menu->image}}"></span>
                              </button><br>{{$menu->name}}</a>
                    @endif
                  </li>
                @endif

              @endforeach
            @endif
             
          </ul>
 
      <!-- Tab panes -->
      <div class="sks tab-content "  >
          @if(count($Arr['Sks'])>0)
              <h2><center>Shin Koe Shin Pagodas In Dawei</center></h2><br> 
              <div class="sks-pagoda jumbotron card"> 
              @foreach($Arr['Sks'] as $key => $sks)
                 <div class=" container tab-pane active">
                       
                      <h3><a href="">{{$sks->name}}</a></h3><hr>
                      <div class="col-sm-12">
                        <div class="left  ">
                          <img class="venobox"  class="img-fluid"   src="../public/uploadedimages/submenu/{{$sks->image}} " alt="img" > 
                           <p>{{$sks->description}}</p>
                        </div>
                      </div><br>
                    </div>
              @endforeach
            </div>
          @endif

      </div>

      @if(count($Arr['Showmenu'])>0)
        <div class="tab-content" >

          @foreach($Arr['Showmenu'] as $key => $sub)
              @if($sub->menu_type == "Pagodas")
                @if($sub->title != "Shin Koe Shin Pagodas" )
                  <div id="Pagodas" class="container tab-pane active" ><br>
                    <div class="other-pagoda">
                      <h3><a class="venobox" href="">{{$sub->name}}</a></h3>
                       <img  class="img-fluid" src="../public/uploadedimages/submenu/{{$sks->image}} " alt="img" > 
                       <p>{{$sub->description}}</p>
                    </div>
                  </div>
                @endif
              @endif

              @if($sub->menu_type == "Hotels")
                <div id="pagoda" class="container tab-pane fade "><br>
                      
                  <div class="">
                    <h3>{{$sub->name}}</h3>
                     <img  class="img-fluid" src="../public/uploadedimages/submenu/{{$sks->image}} " alt="img" > 
                     <p>{{$sub->description}}</p>
                  </div>
                  
                </div>

              @endif
          @endforeach
        </div>
        <br>
        <center class="pag-end">
          <div class="col-sm-offset-5" >{{ $Arr['Showmenu']->links() }}</div>
        </center>


      @endif

      </div>
    </section>

    <section id="events" class="events">
      <div class="container">
        <div class="section-title">
          <h2>Some beatuiful photos from <span>Dawei</span></h2>
        </div>
      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <!-- <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>Book a <span>Table</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
             
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section> --><!-- End Book A Table Section -->
        <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
 
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->


    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container">

        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <div class="stars">
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
              <i class="icofont-star"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">

        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>Beauty Dawei Place</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>phyoacon1995@gmail.com<br>phyozawoo600@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>09 2540 986 08<br>+959 2540 986 08</p>
            </div>
          </div>
        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <label>You can write any message.</label>
          
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>

@endsection