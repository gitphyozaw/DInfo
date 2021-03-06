@extends('layouts.admin')
@section('content')
<style type="text/css">

@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700,300);
body {
    font: 12px 'Open Sans';
}
.input-group {
width: 494px;
}
/* File Upload */
 
.fileUpload {
    position: relative;
    overflow: hidden;
}
.fileUpload #logo-id {

    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 33px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.img-preview {
    height: 200px;  
    width:  280px;  
}

.cor-head{
   width: 236px;
margin-top: 2px;}
.btn{   
 margin: 0px 0 0 -12px;
 height: 36px; }
 .error_msg{
    color: red;
 }
 .swal-text {
font-size: 18px !important;
}
</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link href="../css/admin.css" rel="stylesheet">

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<form action="{{url('/menu_registration')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="container ">
        <div class="up jumbotron">
            <div class="header-title">Menu Registration <hr class="colored cor-head" /></div> 
             @if (Session::has('alert-success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button> 
                        <strong>{{ Session::get('alert-success') }}</strong>
                </div>
            @endif

                <div class="row">
                    <div class="col-sm-2 text">  
                        <label>Menu Name:</label>
                    </div>
                    <div class="col-sm-6">
                       <input type="text" name="menu" class="form-control" value="{{old('menu')}}<?php 
                       if(!empty($Upd_data)) echo $Upd_data->name; ?>">
                    </div>
                    
                </div>
                @if ($errors->any())
                    <div class="col-sm-offset-2 error_msg">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-2 text">  
                        <label>Upload Image:</label>
                    </div>  
                    <div class="col-sm-8">
                        <fieldset class="form-group">
                            <input type="hidden" name="img_hd[]" id="img_hd">
                            <input type="file" id="pro-image" name="pro-image[]"   class="form-control" multiple onclick="$('#pro-image').click()" value="">
                        </fieldset>
                        <div class="preview-images-zone ui-sortable ">
                             @if(!empty($Edit_img))
                                @foreach($Edit_img as $val)
                                      
                                            <div class="test" id="test">
                                           <img src="../uploadedimages/menu/{{$val->image}}" alt="img"  width="120px" height="90px" class="edit_img" >
                                            <a class="remImage" href="{{url('/deleteMenuImage', $val->id)}}"  id="delete">
                                                <img src="..\assets\img\del_icon.svg" style="width:40px;height:40px;">
                                            </a>   
                                        </div>
                                @endforeach
                            @endif
                        </div>
                    </div>  
                     
                 
                </div>
                <div class="col-sm-offset-5">
                    @if(!empty($Upd_data))
                        <input type="hidden" name="ID" value="{{$Upd_data->id}}">
                        <input type="hidden" name="flag" value="update">
                        <input type="submit" class="btn btn-warning " value="Update">
                    @else
                        <input type="submit" class="btn btn-warning " value="Register">
                    @endif
                </div>
            <!-- <div class="row">
                <div class="col-sm-2 text">  
                    <label>Address:</label>
                </div>
                <div class="col-sm-8">
                  <textarea class="form-control" style="height: 150px;"></textarea>
                </div>
            </div> -->
            
        </div>

            <!-- for table start -->
        @if(!empty($Menu))
            <h3><i class="fa fa-bars" style="color: red;"></i>  <b> Menu List</b></h3>
            <hr>
            <div class="row">
                <div class="panel panel-primary filterable">
                    <div class="panel-heading">
                        <h3 class="panel-title">Menus</h3>
                         
                    </div>
                    <table class="table">
                        <thead>
                            <tr class="filters">
                                <th></th>
                                <th><input type="text" class="form-control" placeholder="Image" disabled></th>
                                <th><input type="text" class="form-control" placeholder="Menu Name" disabled></th>
                                <th width='50px;'><label>Action</label></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Menu as $menu) 
                              <tr>
                                <td></td>
                                <td><img src="../public/uploadedimages/menu/{{$menu->image}}" alt="img" style="width:80px; height: 40px;"></td>
                                <td>{{$menu->name}}</td>
                                <td>
                                     
                                    <a href="{{url('/menu_edit', $menu->menu_id)}}"   ><span class="glyphicon glyphicon-pencil" style="font-size: 18px;"></span> </a>
                                </td>
                                <td>
                                     <a href="{{url('/menu_delete', $menu->menu_id)}}" class="delete-confirm"><span class="glyphicon glyphicon-trash" style="font-size: 18px; color:red;" ></span></a>
                                </td>
          
                            </tr>


                            @endforeach
                            
                           
                           
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div><!-- end container -->
</form>

 <!-- for delete comfirm box -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div class="clearfix"></div>

            </div>
            
        </div>
    </div>
</div>
 


</div>

<script type="text/javascript">

$(document).ready(function() {
    /*var brand = document.getElementById('logo-id');
    brand.className = 'attachment_upload';
    brand.onchange = function() {
        document.getElementById('fakeUploadLogo').value = this.value.substring(12);
    };

    // Source: http://stackoverflow.com/a/4459419/6396981
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo-id").change(function() {
        readURL(this);
    });*/
    document.getElementById('pro-image').addEventListener('change', readImage, false);
    
    $( ".preview-images-zone" ).sortable();
    
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });
});

$('div.alert').not('.alert-important').delay(3000).slideUp(300);
 /****for delete confirm****/ 

$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This menu and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});

/***Image Upload***/
var num = 2;
var imgArr      = [];
var fileName    ="";
         
function readImage() {   
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        var processed_file_names = [];
        var form = document.querySelector('form');
        var data = new FormData(form);// Create an FormData object 
        $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });
            $.ajax({
                type: "POST",
                async: false,
                enctype: 'multipart/form-data',
                url:"{{ URL::to('storeMenuImage') }}",

                data:data, processData: false, contentType: false, cache: false, dataType: 'json',
                success: function (data) {                  
                    $.each(data, function ($k, $v) {
                        processed_file_names[$k] = $v;
                    });                 
                },
                error: function (r) { console.log(r); }
            });

            for (let i = 0; i < files.length; i++) {
                var file = files[i];
                if (!file.type.match('image')) continue;
     
                data.append('pro-image[]', file, file.name);
                var picReader = new FileReader();
                
                picReader.addEventListener('load', function (event) {
                    var picFile = event.target;
                    var html =  '<div class="preview-image preview-show-' + num + '">' +
                                /*'<div class="image-cancel" id="img_del"  data-no="' + num + '">x</div>' +*/
                                '<div class="image-zone"><img  id="pro-img-' + num + '" src="' + picFile.result + '"></div>' ;


                    output.append(html);
                    num = num + 1;
                });

                picReader.readAsDataURL(file);
            }
            
            for(var i=0;i<files.length;i++)
            {
                var fileName = processed_file_names[i];
                imgArr.push(fileName) ;
                document.getElementById('img_hd').value = imgArr; 
            }

        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}





</script>
   

@endsection