
@extends('layouts.app')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="{{ asset('css/gallery.css') }}" rel="stylesheet">



    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 listing-block">
         
       
        <div class="media">
            <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
            </div>
            <a href="{{url('/menu_mountain_detail')}}">
                <img class="d-flex align-self-start" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQXKN-FNGA89WCBOj06OYfjrC-v3ZGG8QMBmigyRIEATOcRv3mU&usqp=CAU" alt="Generic placeholder image">
            </a>
              <div class="media-body pl-3">
                <div class="price"> Mountain name</div>
                <div class="stats">
                    <span><i class="fa fa-arrows-alt"></i>1678 Sq ft</span>
                    <span><i class="fa fa-bath"></i>2 Beadrooms</span>
                </div>
                <div class="address">4062 Walnut Hill Drive
            Cincinnati</div>
              </div>
            </div>
        <div class="media">
            
            <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
</div>
              <img class="d-flex align-self-start" src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Generic placeholder image">
              <div class="media-body pl-3">
                <div class="price">$506,400<small>New York</small></div>
                <div class="stats">
                    <span><i class="fa fa-arrows-alt"></i>1678 Sq ft</span>
                    <span><i class="fa fa-bath"></i>2 Beadrooms</span>
                </div>
                <div class="address">4062 Walnut Hill Drive
            Cincinnati</div>
              </div>
            </div>
        <div class="media">
            <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
</div>
              <img class="d-flex align-self-start" src="https://images.pexels.com/photos/358636/pexels-photo-358636.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Generic placeholder image">
              <div class="media-body pl-3">
                <div class="price">$506,400<small>New York</small></div>
                <div class="stats">
                    <span><i class="fa fa-arrows-alt"></i>1678 Sq ft</span>
                    <span><i class="fa fa-bath"></i>2 Beadrooms</span>
                </div>
                <div class="address">4062 Walnut Hill Drive
            Cincinnati</div>
              </div>
            </div>
        </div>
        <!-- <div class="col-md-7 map-box mx-0 px-0">
            <iframe width="100%" height="495" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
        </div> -->
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
<script>
    $(function(){
    $('.listing-block').slimScroll({
        height: '500px'
    });
});
</script>
@endsection 