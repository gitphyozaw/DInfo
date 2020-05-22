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
 margin: 2px 0 0 -12px;
 height: 36px; }
 .error_msg{
    color: red;
 }
 .swal-text {
font-size: 18px !important;
}
</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                       <input type="text" name="menu" class="form-control">
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
                        <div class="input-group">
                            <input id="fakeUploadLogo" type="file" 
                            class="form-control  " placeholder="Choose File"  name="image">
                             
                      </div><br>    
                      <div class="main-img-preview">
                        <img class="thumbnail img-preview"  title="Preview Logo" alt="preview image">
                      </div>
                    </div>
                 
                </div>
                <div class="col-sm-offset-5">
                        <input type="submit" class="btn btn-warning " value="Register">
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
                                <td>image</td>
                                <td>{{$menu->name}}</td>
                               <!--  <td>
                                    <a href="" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-pencil" style="font-size: 18px;"></span> </a>
                                </td> -->
                                <td>
                                     <a href="{{url('/menu_delete', $menu->id)}}" class="delete-confirm"><span class="glyphicon glyphicon-trash" style="font-size: 18px; color:red;" ></span></a>
                                </td>
          
                            </tr>


                            @endforeach
                            
                           
                           
                        </tbody>
                    </table>
                </div>
            </div>
    </div><!-- end container -->
</form>


<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->


 <!-- <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script> -->


<div class="clearfix"></div>

            </div>
            
        </div>
    </div>
</div>




 


</div>

<script type="text/javascript">

$(document).ready(function() {
    var brand = document.getElementById('logo-id');
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

function edit(data) {
//  var id = data.val();
// var name = $('#name').val();
console.log(data);
}





</script>
   

@endsection