@extends('admin.layouts.app')
@section('title')
    Edit Category
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
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Blog Category</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-between mb-3">
                <div class="col-12">
                    <h2 class="page-heading">Edit Blog Category</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Edit Category</h4>
                            <a href="{{route('admin.blog-category.index')}}" class="btn btn-primary ms-auto">Category List</a>
                        </div>

                        <div class="card-body">
                            @if(Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @elseif(Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif

                            <form action="{{ route('admin.blog-category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input type="text" name="name" value="{{ old('name', $category->name) }}" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="slug">Slug (Optional)</label>
                                    <input type="text" name="slug" value="{{ old('slug', $category->slug) }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control">{{ old('description', $category->description) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" {{ $category->status == '1' ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $category->status == '0' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="image">Category Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @if($category->image)
                                        <img src="{{ asset($category->image) }}" alt="{{ $category->name }}" width="100" class="mt-2">
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="seo_description">SEO Description (Optional)</label>
                                    <textarea name="seo_description" class="form-control">{{ old('seo_description', $category->seo_description) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="seo_tags">SEO Tags (Optional)</label>
                                    <input type="text" name="seo_tags" value="{{ old('seo_tags', $category->seo_tags) }}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="seo_keywords">SEO Keywords (Optional)</label>
                                    <input type="text" name="seo_keywords" value="{{ old('seo_keywords', $category->seo_keywords) }}" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
