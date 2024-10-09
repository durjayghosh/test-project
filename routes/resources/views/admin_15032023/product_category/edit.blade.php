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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Product Category</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Edit Product Category</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Edit Product Category</h4>
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
                        <form method="post" action="{{ route('admin.product_category.update') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $result->id }}">
                            <div class="form-roow">

                                <div class="form-group col-md-6">
                                    <label>Category Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="John Doe" name="category_name" value="{{ $result->category_name }}">
                                    @if ($errors->has('category_name'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('category_name') }}
                                        </span>
                                    @endif
                                </div>


{{--
                                <div class="form-group col-md-12 mt-5">
                                    <label>Product Details </label>
                                    <hr>
                                </div>  --}}

                                <div class="form-group col-md-6">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="John Doe" name="title" value="{{ $result->title }}">
                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('title') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Product Description <span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control description" id="" cols="30" rows="10">{{ $result->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                        </span>
                                    @endif
                                </div>



                                <div class="form-group col-md-6">
                                    <label>Image </label>
                                    <input type="file" class="form-control" name="image" id="">
                                    @if($result->image)
                                        <p><img src="{{ asset($result->image) }}" alt="" width="100px;" class="mt-5"></p>
                                    @endif
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('image') }}
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group col-md-6">
                                    <label>Product Sub Image </label>
                                    <input type="file" class="form-control" name="sub_image" id="">
                                    @if($result->sub_image)
                                        <p><img src="{{ asset($result->sub_image) }}" alt="" width="100px;" class="mt-5"></p>
                                    @endif
                                    @if ($errors->has('sub_image'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('sub_image') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-12 mt-5">
                                    <hr>
                                </div>
                            </div>

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

@endsection
