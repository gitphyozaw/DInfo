@extends('layouts.admin')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
 
 
.table-wrapper {
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    min-width: 1000px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
    padding-bottom: 15px;
    background: #435d7d;
    color: #fff;
    padding: 16px 30px;
    min-width: 100%;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title .btn-group {
    float: right;
}
      
/* Custom checkbox */
.custom-checkbox {
    position: relative;
}
.custom-checkbox input[type="checkbox"] {    
    opacity: 0;
    position: absolute;
    margin: 5px 0 0 3px;
    z-index: 9;
}
.custom-checkbox label:before{
    width: 18px;
    height: 18px;
}
.custom-checkbox label:before {
    content: '';
    margin-right: 10px;
    display: inline-block;
    vertical-align: text-top;
    background: white;
    border: 1px solid #bbb;
    border-radius: 2px;
    box-sizing: border-box;
    z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
    content: '';
    position: absolute;
    left: 6px;
    top: 3px;
    width: 6px;
    height: 11px;
    border: solid #000;
    border-width: 0 3px 3px 0;
    transform: inherit;
    z-index: 3;
    transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
    border-color: #03A9F4;
    background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
    border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
    color: #b8b8b8;
    cursor: auto;
    box-shadow: none;
    background: #ddd;
}

</style>
  
  
    <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Trash List</b></h2>
                    </div>
                    <div class="col-sm-6">
                         
                        <a href="" class="btn btn-danger"> <span class="glyphicon glyphicon-trash" style="font-size: 18px; color:#fff;" ></span> Delete All</a>                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($Arr['Menu'])>0)
                         @foreach($Arr['Menu'] as $menu)
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td>{{$menu->id}}</td>
                                <td>{{$menu->name}}</td>
                                <td>menu</td>
                                <td width="60px;">
                                
                                    <a href="# " class="delete-confirm"><span class="glyphicon glyphicon-trash" style="font-size: 18px; color:red;" ></span></a>
                                </td>
                                <td>
                                    <a href="#"> <span><i class="glyphicon glyphicon-eye-open"></i></a>
         
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    @if(count($Arr['Submenu'])>0)
                         @foreach($Arr['Submenu'] as $submenu)
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td>{{$submenu->id}}</td>
                                <td>{{$submenu->name}}</td>
                                <td>submenu</td>
                                <td width="60px;">
                                    <a href="# " class="delete-confirm"><span class="glyphicon glyphicon-trash" style="font-size: 18px; color:red;" ></span></a>
                                </td>
                                <td>
                                    <a href="#"> <span><i class="glyphicon glyphicon-eye-open"></i></a>
        
                                </td>
                            </tr>
                        @endforeach
                    @endif
                   
                     
                </tbody>
            </table>
             
        </div>
    </div>        
</div>
  

   
  <script>
$(document).ready(function(){
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();
    
    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function(){
        if(this.checked){
            checkbox.each(function(){
                this.checked = true;                        
            });
        } else{
            checkbox.each(function(){
                this.checked = false;                        
            });
        } 
    });
    checkbox.click(function(){
        if(!this.checked){
            $("#selectAll").prop("checked", false);
        }
    });
});
</script>
@endsection