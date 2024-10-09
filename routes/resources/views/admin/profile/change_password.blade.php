@extends('admin.layouts.app')
@section('content')
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <!-- <div class="breadcrumb-range-picker">
                <span><i class="icon-calender"></i></span>
                <span class="ml-1">{{ date("M d, Y") }}</span>
            </div> -->
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Change Password</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Change Password</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Change Password</h4>
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
                        <form method="post" action="{{ route('admin.password.update') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Old Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" placeholder="Enter Old Password" name="old_password" value="{{ old('old_password') }}">
                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('old_password') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>New Password<span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" placeholder="Enter New Password" name="password" value="{{ old('password') }}">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Confirm Password" name="confirm_password" value="{{ old('confirm_password') }}">
                                    @if ($errors->has('confirm_password'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('confirm_password') }}
                                        </span>
                                    @endif
                                </div>


                            </div>
                            <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
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
