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
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Gallery</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Add Gallery</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Add Gallery</h4>
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
                        <form method="post" action="{{ route('admin.galleries.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="form-roow">
                                <div class="form-group col-md-6">
                                    <label>Category <span class="text-danger">*</span></label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($Categories as $Category)
                                            <option value="{{ $Category->id }}">{{ $Category->category }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('category_id') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Heading </label>
                                    <input type="text" class="form-control" name="heading" id="heading">

                                    @if ($errors->has('heading'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('heading') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Sub Heading <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="" name="sub_heading" id="sub_heading">

                                    @if ($errors->has('sub_heading'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('sub_heading') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group col-md-12">
                                        <label>Image <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="image" id="image">
                                        @if ($errors->has('image'))
                                            <span class="invalid-feedback">
                                            {{ $errors->first('image') }}
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Description </label>
                                        <textarea class="about" name="description" id="description" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group col-md-12">
                                        <label>Youtube <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="youtube" id="youtube">

                                        @if ($errors->has('youtube'))
                                            <span class="invalid-feedback">
                                            {{ $errors->first('youtube') }}
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Youtube Description</label>
                                       <textarea class="about" name="youtube_description" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>


                                <div class="form-group col-md-12 mt-5">
                                    <hr >
                                </div>

                            </div>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary float-right">Submit</button>
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
      selector: 'textarea.about',
      plugins: 'code',
      toolbar: 'code',
      height: 300,
      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script>

@endsection
