@extends('admin.layouts.app')
@section('title', 'Create Blog')

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
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Blog</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-between mb-3">
                <div class="col-12 ">
                    <h2 class="page-heading">Manage Blog</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Create Blog</h4>
                            <a href="{{route('admin.blogs.index')}}" class="btn btn-primary ms-auto">Blog List</a>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Blog Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category_id" class="form-control" required>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control-file">
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <!-- SEO Fields -->
                                <div class="form-group">
                                    <label>SEO Description</label>
                                    <textarea name="seo_description" class="form-control">{{ old('seo_description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>SEO Tags</label>
                                    <textarea name="seo_tags" class="form-control">{{ old('seo_tags') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>SEO Keywords</label>
                                    <textarea name="seo_keywords" class="form-control">{{ old('seo_keywords') }}</textarea>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
