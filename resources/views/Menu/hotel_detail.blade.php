

@extends('layouts.app')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="{{ asset('css/gallery.css') }}" rel="stylesheet">

<style type="text/css">
    .detail {
      width: 40%;
    }
</style>

    <div class="row">
        <div class="col-md-6 listing-block">
            <div class="detail">
                 
                <a href="{{url('/menu_hotel_detail')}}">
                    <img class="d-flex align-self-start" src="https://image.shutterstock.com/image-photo/luxury-hotel-infinity-pool-palms-260nw-648165631.jpg" alt="Generic placeholder image">
                </a>
                  <div class="about">
                    Hotel Name<br>
                     
                    4062 Walnut Hill Drive
                    Cincinnati
                  </div>
            </div>
        </div>
              
            <div class="col-md-6 map-box mx-0 px-0">
                <iframe width="100%" height="495" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/place/Myanmar+(Burma)/@18.7807572,87.6372642,5z/data=!3m1!4b1!4m5!3m4!1s0x305652a7714e2907:0xba7b0ee41c622b11!8m2!3d21.916221!4d95.955974"></iframe>
            </div>
        </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>

@endsection 