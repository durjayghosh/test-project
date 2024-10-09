@extends('admin.layouts.app')
@section('title')
    Custom Link -
@endsection
@section('content')

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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Blog Category</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-between mb-3">
                <div class="col-12 ">
                    <h2 class="page-heading">Add Blog Category</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">

                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Create Category</h4>
                                <a href="{{route('admin.blog-category.index')}}" class="btn btn-primary ms-auto">Category List</a>
                            </div>
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

                        <div class="card-body">
                            <div class="basic-form">
                                <form method="post" action="{{ route('admin.blog-category.store') }}" autocomplete="off" enctype="multipart/form-data">
                                    @csrf

                                        <div class="form-group">
                                            <label>Custom Link Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </span>
                                            @endif
                                        </div>

                                        <div class="form-group ">
                                            <label>Url</label>
                                            <textarea class="form-control" name="seo_tags" rows="2">{{ old('seo_tags') }}</textarea>
                                        </div>

                                        <div class="form-group ">
                                            <label>Position</label>
                                            <select class="form-control" name="status">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>

                                        <div class="form-group ">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>



                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
