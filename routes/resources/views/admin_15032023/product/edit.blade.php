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
</style>
{{--  {{ dd($menu->groupBy('group_title')) }}  --}}
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
                        <form method="post" action="{{ route('admin.product.update') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            {{--  {{ dd($Product, $ProductCategory) }}  --}}
                            <input type="hidden" name="id" value="{{ $Product->id }}">
                            <div class="form-roow">
                                <div class="form-group col-md-6">
                                    <label>Select Category <span class="text-danger">*</span></label>
                                    <select name="category_id" class="form-control" id="">
                                        <option value="">Select Category</option>
                                        @foreach($ProductCategory as $category)
                                            <option value="{{ $category->id }}" {{ $Product->category_id == $category->id ? 'selected' : '' }}>{{ ucwords($category->category_name) }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('category_id') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Product Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="John Doe" name="product_name" value="{{ $Product->product_name }}">
                                    @if ($errors->has('product_name'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('product_name') }}
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group col-md-6">
                                    <label>Product Description <span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control description" id="" cols="30" rows="10">{{ $Product->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            @if(isset($Product->galleries) && count($Product->galleries) > 0)
                                <div class="form-group col-md-12">
                                    <hr>
                                </div>
                                @foreach($Product->galleries as $key => $gallery)
                                    <div class="form-row sliderAddShow_{{ $key }}">
                                        <div class="form-group col-md-6">
                                            <label>Image </label>
                                            <input type="file" class="form-control" name="gallery[]" id="">
                                            @if(isset($gallery->gallery))
                                                <p class="mt-3"><img src="{{ asset($gallery->gallery) }}" alt="" width="200"></p>
                                            @endif
                                        </div>
                                        <input type="hidden" name="gallery_id[]" value="{{ $gallery->id }}">

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
                                        <label>Gallery Image </label>
                                        <input type="file" class="form-control" name="gallery[]" id="">
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
                    <label>Gallery Image </label>
                    <input type="file" class="form-control" name="gallery[]" id="">
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
            url:"{{ route('admin.product.delete.gallery') }}",
            data:{
                '_token' : '<?php echo csrf_token() ?>',
                'deleteId' : deleteId
            },
            success:function(data) {
                $(classId).animate({padding: "0px", 'margin-left':'-10px', 'font-size': "0px"}, 300, function() {
                    $(classId).remove();
                });
            }
        });
    });
</script>
@endsection
