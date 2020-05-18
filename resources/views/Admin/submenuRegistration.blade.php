@extends('layouts.admin')
@section('content')
 
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
      
</style>
<form action="{{url('/submenu_registration')}}" method="post">
    {{ csrf_field() }}
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">
        <div class="up jumbotron">

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
                   <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 text">  
                    <label >Submenu Name<span class="required">*</span>:</label>
                </div>
                <div class="col-sm-6">
                   <input type="text" name="submenu" class="form-control">
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
                        <a href="javascript:void(0)" onclick="$('#pro-image').click()"><span class="btn btn-primary">Upload</span></a>
                        <input type="file" id="pro-image" name="pro-image[]" style="display: none;" class="form-control" multiple>
                    </fieldset>
                    <div class="preview-images-zone ui-sortable "></div>
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
            height: 150px;" name="address">{{Request::old('address')}}</textarea>
                </div>
            </div>
             <div class="row">
                <div class="col-sm-3 text">  
                    <label>Description:</label>
                </div>
                <div class="col-sm-8">
                  <textarea class="form-control" style="
            height: 150px;" name="description">{{Request::old('description')}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-4">
                  <input type="submit" class="btn btn-warning" value="Register">
                </div>
            </div>

    </div>

    <!-- for table start -->
    <h3><i class="fa fa-bars" style="color: red;"></i>  <b> Submenu List</b></h3>
        <hr>
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

    </div>

</form>


<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

 -->
 <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


<div class="clearfix"></div>
                
            </div>
            
        </div>
    </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
      


</div>

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





var num = 4;
function readImage() {  

    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                            '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}
$('div.alert').not('.alert-important').delay(3000).slideUp(300);
</script>

   

@endsection