
@extends('layouts.app')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
<style type="text/css">
    .pag{
        margin-left: 18em;
        font-size: 32px;
    }
    .pagination>li>a, .pagination>li>span {
        border-radius: 2em;
        margin-left: 8px;
        width: 35px;
    }
</style>
<div class="container-fluid">
    <div class="row shadow-lg p-3 mb-5 bg-white rounded">
        <div class="col-md-12 listing-block">

            @if(!empty($Pagoda))
                @foreach($Pagoda as $pagoda)
                <div class="media">
                    <div class="fav-box"><i class="fa fa-heart-o" aria-hidden="true"></i>
                    </div>
                    <a href="{{url('/menu_pagoda_detail')}}">
                        <img class="d-flex align-self-start" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRmwHCH6kB8aMr_gRcw7VTO7nKI67iINpOB4N07m7uF0sczuRTn&usqp=CAU" alt="Generic placeholder image">
                    </a>
                    <div class="media-body pl-3">
                        <div class="price">{{$pagoda->name}}</div>
                        <div class="stats">
                            <span><i class="fa fa-arrows-alt"></i>1678 Sq ft</span>
                            <span><i class="fa fa-bath"></i>2 Beadrooms</span>
                        </div>
                        <div class="address">4062 Walnut Hill Drive</div>
                  </div>
                </div>
                @endforeach
            <div class=" pag"> {{ $Pagoda->links() }}</div>
            @endif
       
             
        </div>
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