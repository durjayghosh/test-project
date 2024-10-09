@extends('admin.layouts.app')
@section('content')
<!--**********************************
    Content body start
***********************************-->
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    .invalid-feedback{
        display: none;
    }
</style>
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="breadcrumb-range-picker">
                <span><i class="icon-calender"></i></span>
                <span class="ml-1">{{ date("M d, Y") }}</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Product</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Edit Product</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Edit Product</h4>
                        <div class="server-messages">
                        @if( Session::has( 'success' ))
                        <div class="alert alert-success">
                            {{ Session::get( 'success' ) }}
                        </div>
                        @elseif( Session::has( 'error' ))
                        <div class="alert alert-danger">
                            {{ Session::get( 'error' ) }}
                        </div>
                        @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                        <form method="post" action="{{ route('admin.product.addon', $id) }}" id="formSubmits" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            @if(isset($result) && count($result) > 0)
                                @foreach($result as $key => $gallery)
                                    <div class="form-row sliderAddShow_{{ $key }}">
                                        <div class="form-group col-md-6">
                                            <label>Image </label>
                                            <input type="file" class="form-control" name="image[]" id="">
                                            <span class="invalid-feedback image_{{ $key }}"></span>
                                            @if(isset($gallery->image))
                                                <p class="mt-3"><img src="{{ asset($gallery->image) }}" alt="" width="200"></p>
                                            @endif
                                        </div>
                                        <input type="hidden" name="gallery_id[]" value="{{ $gallery->id }}">
                                        <div class="form-group col-md-6">
                                            <label>Image </label>
                                            <input type="text" class="form-control" name="youtube[]" value="{{ $gallery->youtube }}" id="">
                                             <span class="invalid-feedback youtube_{{ $key }}"></span>
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="text-right col-md-12">
                                            <button  type="button" data-classId="sliderAddShow_{{ $key }}" data-delete="{{ $gallery->id }}"  class="btn btn-danger deleteSlider">Delete</button>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <hr>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Image </label>
                                        <input type="file" class="form-control" name="image[]" id="">
                                        <span class="invalid-feedback image_0"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Youtube</label>
                                        <input type="text" class="form-control" name="youtube[]" id="">
                                        <span class="invalid-feedback youtube_0"></span>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <hr>
                                    </div>
                                </div>
                            @endif

                            <div id="addSliderDiv"></div>
                            <div class="text-right">
                                <button id="addSlider" type="button"  class="btn btn-secondary">Add Image</button>
                                <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
                                {{--  <button type="submit" name="update" id="update" class="btn btn-primary float-right">Update</button>  --}}
                            </div>

                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->
<script>
    tinymce.init({
      selector: 'textarea.description',
      plugins: 'code',
      toolbar: 'code',
      height: 300,
      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>
<script>
    tinymce.init({
      selector: 'textarea.product_sub_description',
      plugins: 'code',
      toolbar: 'code',
      height: 300,
      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>

<script>
    {{--  CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'product_sub_description' );  --}}



    var sliderAddShowId = "{{ isset($key) ? $key +1 : 1 }}";
    $(document).ready(function(){
        $("#addSlider").click(function(){
            var html = `
            <div class="form-row sliderAddShow_${sliderAddShowId}" style="display:none;">
                <div class="form-group col-md-6">
                    <label>Image </label>
                    <input type="file" class="form-control" name="image[]" id="">
                    <span class="invalid-feedback image_${sliderAddShowId}"></span>
                </div>
                <div class="form-group col-md-6">
                    <label>Youtube </label>
                    <input type="text" class="form-control" name="youtube[]" id="">
                    <span class="invalid-feedback youtube_${sliderAddShowId}"></span>
                </div>
                <div class="clearfix"></div>
                <div class="text-right col-md-12">
                    <button  type="button" data-classId="sliderAddShow_${sliderAddShowId}"  class="btn btn-danger deleteSlider">Delete</button>
                </div>
                <div class="form-group col-md-12">
                    <hr>
                </div>
            </div>
            `;
            $('#addSliderDiv').append(html);
            $(".sliderAddShow_"+sliderAddShowId).show('pawan');
            sliderAddShowId++
        });
    });



    $(document).on('click','.deleteSlider',function(){
        var classId = '.'+$(this).attr('data-classId');
        var deleteId = $(this).attr('data-delete');
         $.ajax({
            type:'POST',
            url:"{{ route('admin.product.addonDelete') }}",
            data:{
                '_token' : '<?php echo csrf_token() ?>',
                'deleteId' : deleteId
            },
            success:function(response) {
                toastr.options.positionClass = 'toast-bottom-right';
                toastr.options.timeOut = 1500; // 1.5s
                toastr.success(response.success);
                $(classId).animate({padding: "0px", 'margin-left':'-10px', 'font-size': "0px"}, 300, function() {
                    $(classId).remove();
                });
            }
        });


    });

    $(document).ready(function(){
        $( "#formSubmits" ).submit(function( event ) {
            var url = $(this).attr('action');
            var form = document.getElementById('formSubmits');
            var formData = new FormData(form);

            event.preventDefault();
             $.ajax({
                url,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if(response.status == 'error'){
                        $.each(response.message, function( index, value ) {
                            $('.'+index.replace('.', '_')).text(value[0]);
                            $('.'+index.replace('.', '_')).show('active');
                          });
                    }else{
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr.options.timeOut = 1500; // 1.5s
                        toastr.success(response.success);
                        setTimeout(function(){ location.reload(); }, 2000);
                    }

                },
            });
        });
    })

</script>
@endsection
