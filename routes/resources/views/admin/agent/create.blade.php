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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Add User</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Add User</h4>
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
                        <form method="post" action="{{ route('admin.agent.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter first name" name="first_name" value="{{ old('first_name') }}">
                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('first_name') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter last name" name="last_name" value="{{ old('last_name') }}">
                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('last_name') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone </label>
                                    <input type="text" class="form-control" placeholder="Enter phone" name="phone" value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('phone') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" placeholder="Enter password" name="password" autocomplete="new-password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                    <input type="confirm_password" class="form-control" placeholder="Enter confirm password" name="confirm_password"  value="{{ old('confirm_password') }}">
                                    @if ($errors->has('confirm_password'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('confirm_password') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Role <span class="text-danger">*</span></label>
                                    <select id="role" class="form-control" name="role">
                                        <option value="">Select Role</option>
                                        @foreach($Role as $roles)
                                        <option value="{{ $roles->id }}">{{ $roles->role }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('role'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('role') }}
                                        </span>
                                    @endif
                                </div>



                                <div class="form-group col-md-6">
                                    <label>Profile Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="profile_image" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if ($errors->has('profile_image'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('profile_image') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Status <span class="text-danger">*</span></label>
                                    <select id="status" class="form-control" name="status">
                                        <option selected value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('status') }}
                                        </span>
                                    @endif
                                </div>


                            </div>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>


    $(document).ready(function(){
        $('.js-example-basic-multiple').select2();
    });
</script>
<!--**********************************
    Content body end
***********************************-->
@endsection
