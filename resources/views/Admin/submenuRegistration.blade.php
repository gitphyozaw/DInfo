@extends('layouts.admin')
@section('content')
 
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link href="../css/admin.css" rel="stylesheet">

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../js/admin.js"></script>
<style type="text/css">
    .cor-head{
       width: 288px;
    margin-top: 2px;}
    .required{
        color: red;
        font-size: 24px;
    }
    .error_msg{
        color:red;
    }
    .desc{
        width: 600px;
        max-height: 400px;
        overflow-y: auto;
    }
    .table>thead>tr>th {
    border-bottom: 2px solid #100d0d;
    }
    .left{
        margin-left: -2em !important;
        border: 2px solid #d9efe6;

    }
    .right{
        margin-left: 16px !important;
        border: 2px solid #d9efe6;
        width: 
    }
    .chk{
        width: 18px !important;    
        height: 18px !important;    
    }
    .test {
    position: relative;
    float: left;
}
a.remImage img {

    box-shadow: none;
    position: absolute;
    right: 7px;
    top: -5px;
    margin-top: 4px;
    opacity: 0;
    display: block;
    transition: all .5s ease-in-out;
}
.test:hover a.remImage img {
    opacity: 1;
    z-index: 99;
    position: absolute;
    top: 20px;
    right: 40px;
}
 
.test:hover:after{
    opacity: 3;
}
.edit_img{
    padding-right: 4px;
}

      
</style>
<form action="{{url('/submenu_registration')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="col-sm-9 jumbotron left">

                <div class="header-title">Submenu Registration</div> <hr class="colored cor-head" /><br>
                @if (Session::has('alert-success'))
                    <div class="alert alert-success alert-block" id="alert-success">
                        <button type="button" class="close" id="close" data-dismiss="alert" aria-label="Close">×</button> 
                            <strong>{{ Session::get('alert-success') }}</strong>
                    </div>
                @endif

                <p><b class="required">*</b> <i>You must be fill this field!</i></p>

                <div class="row">
                    <div class="col-sm-3 text">  
                        <label>Select Menu:</label>
                    </div>
                    <div class="col-sm-4">
                      	<select class="form-control" name="menu">
                      		<option value="0">---please select menu---</option>
                            @foreach($Menu as $menu)
                                <option value="{{$menu->id}},{{$menu->name}}" >{{$menu->name}}</option>
                            @endforeach
                      	</select>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-sm-3 text">  
                        <label>Title:</label>
                    </div>
                    <div class="col-sm-6">
                       <input type="text" name="title" class="form-control" value="{{old('title')}}<?php 
                       if(!empty($Upd_data)) echo $Upd_data->title; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 text">  
                        <label >Submenu Name<span class="required">*</span>:</label>
                    </div>
                    <div class="col-sm-6">
                       <input type="text" name="submenu" class="form-control" value="{{old('submenu')}}<?php 
                       if(!empty($Upd_data)) echo $Upd_data->name; ?>">
                    </div>
                </div>
                 @if ($errors->any())
                        <div class="col-sm-offset-3 error_msg">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="row">
                    <div class="col-sm-3 text">  
                        <label>Image Upload:</label>
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
                                           <img src="../uploadedimages/submenu/{{$val->image}}" alt="img"  width="120px" height="90px" class="edit_img" >
                                            <a class="remImage" href="{{url('/deleteImage', $val->id)}}"  id="delete">
                                                <img src="..\assets\img\del_icon.svg" style="width:40px;height:40px;">
                                            </a>   
                                        </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 text">  
                        <label>Video:</label>
                    </div>
                    <div class="col-sm-8">
                        <fieldset class="form-group">
                            <a href="javascript:void(0)" onclick="$('#pro-image').click()"><span class="btn btn-primary">Video</span></a>
                            <input type="file" id="video" name="video" style="display: none;" class="form-control" multiple>
                        </fieldset>
                        <div class="preview-videos-zone ui-sortable "></div>
                    </div>
                </div>

               
                <div class="row">
                    <div class="col-sm-3 text">  
                        <label>Address:</label>
                    </div>
                    <div class="col-sm-8">
                      <textarea class="form-control" style="
                height: 150px;" name="address" ><?php 
                       if(!empty($Upd_data)) echo $Upd_data->address; ?>{{Request::old('address')}}</textarea>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-sm-3 text">  
                        <label>Description:</label>
                    </div>
                    <div class="col-sm-8">
                      <textarea class="form-control" style="
                height: 250px;" name="description" ><?php 
                       if(!empty($Upd_data)) echo $Upd_data->description; ?>{{Request::old('description')}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-4">
                        @if(!empty($Upd_data))
                          <input type="hidden" name="ID" value="{{$Upd_data->id}}">
                          <input type="hidden" name="flag" value="update">
                          <input type="submit" class="btn btn-warning" value="Update">
                          @else
                          <input type="submit" class="btn btn-warning" value="Register">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-3 right">
                <h3>Weather Item </h3><hr>
                    @if(!empty($Upd_data))
                        <input type="checkbox" class="chk"  name="chk[]" value="summer"
                        <?php if($Season0 == "summer" || $Season1 == "summer") echo "checked" ?> >
                        <label>Summer</label><br>
                    
                        <input type="checkbox"  class="chk" name="chk[]" value="rainy"
                        <?php if($Season0 == "rainy" || $Season1 == "rainy") echo "checked"?> >

                        <label>Rainy</label>   <br>
                    
                        <input type="checkbox"  class="chk" name="chk[]" value="winnter"
                        <?php if($Season0 == "winnter" || $Season1 == "winnter") echo "checked"?> >

                        <label>Winnter</label>
                    @else
                         <input type="checkbox" class="chk"  name="chk[]" value="summer" >
                        <label>Summer</label><br>
                    
                        <input type="checkbox"  class="chk" name="chk[]" value="rainy">

                        <label>Rainy</label>   <br>
                    
                        <input type="checkbox"  class="chk" name="chk[]" value="winnter"> 
                        <label>Winnter</label>
                        @endif
                    <hr>
                    <i> <b>Note</b>:<br> Please checked if you show season item </i>
                    <br><br>
            </div>
        </div>
    </div>

    <!-- for table start -->
    <h3><i class="fa fa-bars" style="color: red;"></i>  <b> Submenu List</b></h3>
        <hr>
    @if(!empty($Submenu))

    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Submenus</h3>

            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Menu" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Submenu" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Address" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Description" disabled></th>
                       
                        <th width="10%;" colspan="2"><label>Action</label></th>
                    </tr>
                </thead>

                <tbody>
                    <?php  $i = 1; ?>
                    @foreach ($Submenu as $submenu)

                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{$submenu->menu_type}}</td>
                        <td>{{$submenu->name}}</td>
                        <td>{{$submenu->address}}</td>
                        <td class="desc">{{$submenu->description}}</td>
                        <td>
                            <a href="{{url('/submenu_edit', $submenu->id)}}" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-pencil" style="font-size: 18px;"></span> </a>
                        </td>
                        <td>
                             <a href="{{url('/submenu_delete', $submenu->id)}}" class="delete-confirm"><span class="glyphicon glyphicon-trash" style="font-size: 18px; color:red;" ></span></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
             {{ $Submenu->links() }}
        @endif

    </div>

</form>

  
<script type="text/javascript">
    
    
$(document).ready(function() {
   document.getElementById('pro-image').addEventListener('change', readImage, false);
    
    $( ".preview-images-zone" ).sortable();
    
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });


/*FOR Toggle */
   $("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();


}); 
    

/***END Toggle***/
 
var num = 6;
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
                url:"{{ URL::to('storeImage') }}",

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

$('div.alert').not('.alert-important').delay(3000).slideUp(300);
</script>

   

@endsection