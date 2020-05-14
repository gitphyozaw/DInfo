@extends('layouts.admin')
@section('content')
<style type="text/css">
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

<!-- update model -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 <!-- delete comfirm --> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<form action="{{url('/menu_registration')}}" method="post">
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
                    <div class="col-sm-2">
                        <input type="submit" class="btn btn-warning " value="Register">
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
            <!-- <div class="row">
                <div class="col-sm-2 text">  
                    <label>Image Upload:</label>
                </div>
                <div class="col-sm-8">
                    <fieldset class="form-group">
                        <a href="javascript:void(0)" onclick="$('#pro-image').click()"><span class="btn btn-primary">Upload</span></a>
                        <input type="file" id="pro-image" name="menu_image[]" style="display: none;" class="form-control" multiple>
                    </fieldset>
                    <div class="preview-images-zone ui-sortable "></div>
                </div>
            </div>

            <div class="row">
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
                                <th><input type="text" class="form-control" placeholder="#" disabled></th>
                                <th><input type="text" class="form-control" placeholder="Menu Name" disabled></th>
                                <th width='50px;'><label>Action</label></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Menu as $menu) 
                              <tr>
                                <td></td>
                                <td>{{$menu->id}}</td>
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