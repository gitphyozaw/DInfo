@extends('layouts.app')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
    .gallery {
-webkit-column-count: 3;
-moz-column-count: 3;
column-count: 3;
-webkit-column-width: 33%;
-moz-column-width: 33%;
column-width: 33%; 
}
.gallery .pics {
-webkit-transition: all 350ms ease;
transition: all 350ms ease; }
.gallery .animation {
-webkit-transform: scale(1);
-ms-transform: scale(1);
transform: scale(1); }

@media (max-width: 450px) {
.gallery {
-webkit-column-count: 1;
-moz-column-count: 1;
column-count: 1;
-webkit-column-width: 100%;
-moz-column-width: 100%;
column-width: 100%;
}
}

@media (max-width: 400px) {
.btn.filter {
padding-left: 1.1rem;
padding-right: 1.1rem;
}
}

span img{ width: 51px; height: 50px;}
.icon_img{
    width: 106px;  
    margin: 4px;
    font-family: "Satisfy", sans-serif;
}
.gallery_row_header{ height: 146px;    margin-top: 24px;}
</style>
<script type="text/javascript">
    $(function() {
var selectedClass = "";
$(".filter").click(function(){
selectedClass = $(this).attr("data-rel");
$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});
</script>
<!-- Grid row -->
<div class="container ">
    <div class="gallery_row_header">
      <!-- Grid column -->
      <div class="col-md-12 d-flex justify-content-center mb-5">

        <div class="icon_img shadow-lg p-3 mb-5 bg-white rounded">
            <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all"><span><img src="https://www.psdgraphics.com/file/photo-gallery-icon.jpg"><br>Image</span></button>
        </div>
        <div class="icon_img shadow-lg p-3 mb-5 bg-white rounded">
            <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1"><span><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRntNKs52hoPWj_3Dnq9P8P2d_sN-al5az2kSWormdbJ5dCqOM4&usqp=CAU"><br>Video</span></button>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <!-- Grid row -->
    <div class="gallery shadow-lg p-3 mb-5 bg-white rounded" id="gallery">

      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" alt="Card image cap">
      </div>
      <!-- Grid column -->

    </div>
</div>
<!-- Grid row -->   
@endsection