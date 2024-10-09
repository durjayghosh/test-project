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

td,
th {
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Our Team</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Add Our Team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Add Our Team</h4>
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
                            <form method="post" action="{{ route('admin.ourteam.store') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>Full Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="John Doe" name="full_name"
                                            value="{{ old('full_name') }}">
                                        @if ($errors->has('full_name'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('full_name') }}
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Designation <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="CEO" name="designation"
                                            value="{{ old('designation') }}">
                                        @if ($errors->has('designation'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('designation') }}
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>About <span class="text-danger">*</span></label>
                                        <textarea name="about" id="" class="ckeditor" cols="30"
                                            rows="10">{{ old('about') }}</textarea>
                                        @if ($errors->has('about'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('about') }}
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Image </label>
                                        <input type="file" class="form-control" name="image" id="">
                                        @if ($errors->has('image'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('image') }}
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12 mt-5">
                                        <hr>
                                    </div>

                                </div>
                                <button type="submit" name="submit" id="submit"
                                    class="btn btn-primary float-right">Submit</button>
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


@endsection