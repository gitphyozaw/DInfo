@extends('layouts.admin')
@section('content')
<style type="text/css">
    .row{
        padding-bottom: 18px;
    }
    .text{text-align: left;}
    .form-control{
        height: 40px;
    }
    .header-title{
        text-align: center;
        font-family: Lucida Fax;
        color:#000000;
        font-size: 30px;
        font-weight: 600;
    }
    hr.colored {
  border: 0;   /* in order to override TWBS stylesheet */
  height: 2px;

  background: -webkit-linear-gradient(left, rgba(196,222,138,1) 12.5%, rgba(245,253,212,1) 12.5%, rgba(245,253,212,1) 25%, rgba(255,208,132,1) 25%, rgba(255,208,132,1) 37.5%, rgba(242,122,107,1) 37.5%, rgba(242,122,107,1) 50%, rgba(223,157,185,1) 50%, rgba(223,157,185,1) 62.5%, rgba(192,156,221,1) 62.5%, rgba(192,156,221,1) 75%, rgba(95,156,217,1) 75%, rgba(95,156,217,1) 87.5%, rgba(94,190,227,1) 87.5%, rgba(94,190,227,1) 87.5%, rgba(94,190,227,1) 100%); /* Chrome10+,Safari5.1+ */
}

  /***muitlple image upload***/
  .preview-images-zone {
    width: 100%;
    border: 3px solid #f1a418;
    min-height: 180px;
    /* display: flex; */
    padding: 5px 5px 0px 5px;
    position: relative;
    overflow:auto;
    background-color: aliceblue;

}
.preview-images-zone > .preview-image:first-child {
    height: 185px;
    width: 185px;
    position: relative;
    margin-right: 5px;
}
.preview-images-zone > .preview-image {
    height: 90px;
    width: 90px;
    position: relative;
    margin-right: 5px;
    float: left;
    margin-bottom: 5px;
}
.preview-images-zone > .preview-image > .image-zone {
    width: 100%;
    height: 100%;
}
.preview-images-zone > .preview-image > .image-zone > img {
    width: 100%;
    height: 100%;
}
.preview-images-zone > .preview-image > .tools-edit-image {
    position: absolute;
    z-index: 100;
    color: #fff;
    bottom: 0;
    width: 100%;
    text-align: center;
    margin-bottom: 10px;
    display: none;
}
.preview-images-zone > .preview-image > .image-cancel {
    font-size: 18px;
    position: absolute;
    top: 0;
    right: 0;
    font-weight: bold;
    margin-right: 10px;
    cursor: pointer;
    display: none;
    z-index: 100;
}
.preview-image:hover > .image-zone {
    cursor: move;
    opacity: .5;
}
.preview-image:hover > .tools-edit-image,
.preview-image:hover > .image-cancel {
    display: block;
}
.ui-sortable-helper {
    width: 90px !important;
    height: 90px !important;
}

.container {
    padding-top: 50px;
}
 

</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<div class="container shadow-lg p-3 mb-5 bg-white rounded">
     <div class="header-title">Menu Registration</div><hr class="colored" /> 
    <div class="row ">
        <div class="col-sm-3 text">  
            <label>Menu Title:</label>
        </div>
        <div class="col-sm-6">
           <input type="text" name="" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 text">  
            <label>Name:</label>
        </div>
        <div class="col-sm-6">
           <input type="text" name="" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 text">  
            <label>Image Upload:</label>
        </div>
        <div class="col-sm-8">
            <fieldset class="form-group">
                <a href="javascript:void(0)" onclick="$('#pro-image').click()"><span class="btn btn-primary">Upload</span></a>
                <input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control" multiple>
            </fieldset>
            <div class="preview-images-zone ui-sortable "></div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3 text">  
            <label>Address:</label>
        </div>
        <div class="col-sm-8">
          <textarea class="form-control" style="
    height: 114px;"></textarea>
        </div>
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
});



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

    
</script>

   

@endsection