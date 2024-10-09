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
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">General Setting Section</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">General Setting Section</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">General Setting Section</h4>
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
                        <form method="post" action="{{ route('admin.general.setting') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ isset($result->id) ? $result->id : '' }}">

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <hr>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Website Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="" name="website_name" value="{{ isset($result->website_name) ? $result->website_name : old('website_name') }}">
                                    @if ($errors->has('website_name'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('website_name') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Footer Website Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="" name="footer_website_name" value="{{ isset($result->footer_website_name) ? $result->footer_website_name : old('footer_website_name') }}">
                                    @if ($errors->has('footer_website_name'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('footer_website_name') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control" placeholder="" name="contact_number" value="{{ isset($result->contact_number) ? $result->contact_number : old('contact_number') }}">
                                    @if ($errors->has('contact_number'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('contact_number') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Alternate Contact Number</label>
                                    <input type="text" class="form-control" placeholder="" name="alternate_contact_number" value="{{ isset($result->alternate_contact_number) ? $result->alternate_contact_number : old('alternate_contact_number') }}">
                                    @if ($errors->has('alternate_contact_number'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('alternate_contact_number') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Copyright</label>
                                    <input type="text" class="form-control" placeholder="" name="copyright" value="{{ isset($result->copyright) ? $result->copyright : old('copyright') }}">
                                    @if ($errors->has('copyright'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('copyright') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Email </label>
                                    <input type="text" class="form-control" placeholder="example@email.com" name="email" value="{{ isset($result->email) ? $result->email : old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Coupon Discount </label>
                                    <input type="text" class="form-control" placeholder="example@email.com" name="coupon_discount" value="{{ isset($result->coupon_discount) ? $result->coupon_discount : old('coupon_discount') }}">
                                    @if ($errors->has('coupon_discount'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('coupon_discount') }}
                                        </span>
                                    @endif
                                </div>



                                <div class="form-group col-md-12">
                                    <label>Other Details </label>
                                    <hr>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Youtube Link </label>
                                    <input type="text" class="form-control" placeholder="https://www.youtube.com/@isynbus" name="youtube" value="{{ isset($result->youtube) ? $result->youtube : '' }}">
                                    @if ($errors->has('youtube'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('youtube') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Facebook Link </label>
                                    <input type="text" class="form-control" placeholder="https://www.facebook.com/" name="facebook" value="{{ isset($result->facebook) ? $result->facebook : '' }}">
                                    @if ($errors->has('facebook'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('facebook') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Instagram Link </label>
                                    <input type="text" class="form-control" placeholder="https://www.instagram.com/" name="instagram" value="{{ isset($result->instagram) ? $result->instagram : '' }}">
                                    @if ($errors->has('facebook'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('facebook') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Twitter Link </label>
                                    <input type="text" class="form-control" placeholder="https://twitter.com/" name="twitter" value="{{ isset($result->twitter) ? $result->twitter : '' }}">
                                    @if ($errors->has('twitter'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('twitter') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Wordpress Link </label>
                                    <input type="text" class="form-control " placeholder="https://twitter.com/" name="wordpress" value="{{ isset($result->wordpress) ? $result->wordpress : '' }}">
                                    @if ($errors->has('wordpress'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('wordpress') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Logo </label>
                                    <input type="file" class="form-control" name="logo" id="" accept="image/png, image/jpeg, image/webp">
                                    @if($result->logo)
                                        <p><img src="{{ isset($result->logo) ? asset($result->logo) : '' }}" alt="" width="100px;" class="mt-5"></p>
                                    @endif
                                    @if ($errors->has('logo'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('logo') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-12">
                                    <hr>
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
