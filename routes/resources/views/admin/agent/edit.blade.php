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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Edit User</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Edit User</h4>
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
                        <form method="post" action="{{ route('admin.agent.update') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $agent->id }}">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter first name" name="first_name" value="{{ $agent->first_name }}">
                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('first_name') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter last name" name="last_name" value="{{ $agent->last_name }}">
                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('last_name') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ $agent->email }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter phone" name="phone" value="{{ $agent->phone }}">
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('phone') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" placeholder="Enter password" autocomplete="new-password" name="password" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Confirm Password <span class="text-danger">*</span></label>
                                    <input type="confirm_password" class="form-control" placeholder="Enter confirm password" name="confirm_password"  value="">
                                </div>

                                @if($agent->role != 1)
                                    <div class="form-group col-md-6">
                                        <label>Role <span class="text-danger">*</span></label>
                                        <select id="role" class="form-control" name="role">
                                            <option value="">Select Role</option>
                                            @foreach($Role as $roles)
                                            <option value="{{ $roles->id }}" {{ $agent->role ==  $roles->id ? 'selected' : ''}}>{{ $roles->role }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('role'))
                                            <span class="invalid-feedback">
                                            {{ $errors->first('role') }}
                                            </span>
                                        @endif
                                    </div>
                                @endif


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
                                        <option @php echo ($agent->status=='1') ? 'selected' : '' @endphp value="1">Active</option>
                                        <option @php echo ($agent->status=='0') ? 'selected' : '' @endphp value="0">Inactive</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('status') }}
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

<script>


    $(document).ready(function(){
        $('.js-example-basic-multiple').select2();
    });

</script>
<!--**********************************
    Content body end
***********************************-->
@endsection
