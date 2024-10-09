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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Custom Link</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-between mb-3">
                <div class="col-12">
                    <h2 class="page-heading">Add Custom Link</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Create Custom Link</h4>
                            <a href="{{ route('admin.custom-link.index') }}" class="btn btn-primary ms-auto">Link List</a>
                        </div>
                        <div class="server-messages">
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @elseif (Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                        </div>

                        <div class="card-body">
                            <div class="basic-form">
                                <form method="post" action="{{ route('admin.custom-link.store') }}" autocomplete="off" enctype="multipart/form-data">
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

                                    <div class="form-group">
                                        <label>URL <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="url" value="{{ old('url') }}" required>
                                        @if ($errors->has('url'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('url') }}
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Position <span class="text-danger">*</span></label>
                                        <select class="form-control" name="position" required>
                                            <option value="">Select Position</option>
                                            <option value="1" {{ old('position') == '1' ? 'selected' : '' }}>Header</option>
                                            <option value="2" {{ old('position') == '2' ? 'selected' : '' }}>Sidebar</option>
                                        </select>
                                        @if ($errors->has('position'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('position') }}
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Status <span class="text-danger">*</span></label>
                                        <select class="form-control" name="status" required>
                                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('status') }}
                                            </span>
                                        @endif
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
