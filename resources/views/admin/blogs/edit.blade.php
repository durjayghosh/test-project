@extends('admin.layouts.app')
@section('title')
    Edit Blog -
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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Blog</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-between mb-3">
                <div class="col-12">
                    <h2 class="page-heading">Edit Blog</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Edit Blog</h4>
                            <a href="{{route('admin.blogs.index')}}" class="btn btn-primary ms-auto">Blog List</a>
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
                                <form method="post" action="{{ route('admin.blogs.update', $blog->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label>Blog Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name', $blog->name) }}" required>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" class="form-control" name="slug" value="{{ old('slug', $blog->slug) }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" rows="3">{{ old('description', $blog->description) }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Main Content</label>
                                        <textarea class="form-control" name="main_content" rows="5">{{ old('main_content', $blog->main_content) }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $blog->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control-file" name="image">
                                        @if($blog->image)
                                            <img src="{{ asset($blog->image) }}" alt="" class="img-fluid mt-2" width="150">
                                        @endif
                                    </div>

                                    <!-- SEO Fields -->
                                    <div class="form-group">
                                        <label>SEO Description</label>
                                        <textarea class="form-control" name="seo_description" rows="3">{{ old('seo_description', $blog->seo_description) }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>SEO Tags</label>
                                        <textarea class="form-control" name="seo_tags" rows="2">{{ old('seo_tags', $blog->seo_tags) }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>SEO Keywords</label>
                                        <textarea class="form-control" name="seo_keywords" rows="2">{{ old('seo_keywords', $blog->seo_keywords) }}</textarea>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
