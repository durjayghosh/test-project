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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Partner Opportunity</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Add Partner Opportunity</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Add Partner Opportunity</h4>
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
                            <form method="post" action="{{ route('admin.opportunity.store') }}" autocomplete="off"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">

                                    <div class="form-group col-md-12">
                                        <label>Opportunity<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="" name="opportunity"
                                            value="{{ old('opportunity') }}">
                                        @if ($errors->has('opportunity'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('opportunity') }}
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>About <span class="text-danger">*</span></label>
                                        <textarea class="ckeditor" name="about" id="" cols="30"
                                            rows="10">{{ old('about') }}</textarea>
                                        @if ($errors->has('about'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('about') }}
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

{{--
<script>
    tinymce.init({
        selector: 'textarea.about',
        plugins: 'code',
        toolbar: 'code',
        height: 600,
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });
</script> --}}
@endsection