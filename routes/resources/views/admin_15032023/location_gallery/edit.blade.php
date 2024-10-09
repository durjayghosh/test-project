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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Location Gallery</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Edit Location Gallery</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Edit Location Gallery</h4>
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
                        <form method="post" action="{{ route('admin.location_gallery.update') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $Galleries->id }}">
                            <div class="form-roow">
                                <div class="form-group col-md-6">
                                    <label>Location <span class="text-danger">*</span></label>
                                    <select id="location" class="form-control" name="location">
                                        <option value="">Select Location</option>
                                        <option value="chennai" {{ $Galleries->location == 'chennai' ? 'selected' : '' }}>Chennai</option>
                                        <option value="hydrabad" {{ $Galleries->location == 'hydrabad' ? 'selected' : '' }}>Hydrabad</option>
                                    </select>
                                    @if ($errors->has('location'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('location') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Image </label>
                                    <input type="file" class="form-control" name="image" id="">
                                    @if($Galleries->image)
                                        <p><img src="{{ asset($Galleries->image) }}" alt="" width="100px;" class="mt-5"></p>
                                    @endif
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
                            <button type="submit" name="update" id="update" class="btn btn-primary float-right">Update</button>
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
