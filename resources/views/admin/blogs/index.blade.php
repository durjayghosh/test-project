@extends('admin.layouts.app')
@section('title', 'Blogs')

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
                            <h4 class="card-title">Blogs</h4>
                            <a href="{{route('admin.blogs.create')}}" class="btn btn-primary ms-auto">Create Blog</a>
                        </div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset($blog->image) }}" alt="{{ $blog->name }}" width="50"></td>
                                        <td>{{ $blog->name }}</td>
                                        <td>{{ $blog->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
    <script>
        $(function () {
            var oTable = $('#agent').DataTable();
        });
    </script>
@endsection
