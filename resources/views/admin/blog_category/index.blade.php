@extends('admin.layouts.app')
@section('title')
    Category List -
@endsection
@section('content')
    <!--**********************************
    Content body start
    ***********************************-->
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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Blog Category</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-between mb-3">
                <div class="col-12 ">
                    <h2 class="page-heading">Manage Blog Category</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Category</h4>
                            <a href="{{route('admin.blog-category.create')}}" class="btn btn-primary ms-auto">Create Category</a>
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
                            <div class="table-responsive">
                                <table id="agent" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $row)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td width="150"><img src="{{asset($row->image)}}" alt="" class="img-fluid"></td>
                                            <td>{{$row->name}}</td>
                                            <td>{{\Illuminate\Support\Str::limit($row->description,30)}}</td>
                                            <td>
                                                @if($row->status == 1)
                                                    <div class="badge badge-success">Active</div>
                                                @elseif($row->status == 0)
                                                    <div class="badge badge-danger">Inactive</div>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('admin.blog-category.edit',$row->id)}}" class="btn btn-primary">Edit</a>
                                                <form action="{{ route('admin.blog-category.destroy', $row->id) }}" method="POST" style="display:inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger delete-btn" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
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
    <script>
        $(function () {
            var oTable = $('#agent').DataTable();
        });
    </script>
@endsection
