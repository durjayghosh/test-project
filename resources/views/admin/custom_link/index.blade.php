@extends('admin.layouts.app')
@section('title')
    Custom Link List -
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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Custom Links</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-between mb-3">
                <div class="col-12 ">
                    <h2 class="page-heading">Manage Custom Links</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Custom Links</h4>
                            <a href="{{ route('admin.custom-link.create') }}" class="btn btn-primary ms-auto">Create Link</a>
                        </div>

                        <div class="server-messages">
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @elseif(Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="custom_links" class="display" style="min-width: 845px">
                                    <thead>
                                    <tr>
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">URL</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($customs as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->url }}</td>
                                            <td>
                                                @if($row->position == 1)
                                                    <div class="badge badge-info">Header</div>
                                                @elseif($row->position == 2)
                                                    <div class="badge badge-warning">Sidebar</div>
                                                @endif
                                            </td>
                                            <td>
                                                @if($row->status == 1)
                                                    <div class="badge badge-success">Active</div>
                                                @else
                                                    <div class="badge badge-danger">Inactive</div>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.custom-link.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                                                <form action="{{ route('admin.custom-link.destroy', $row->id) }}" method="POST" style="display:inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger delete-btn" onclick="return confirm('Are you sure you want to delete this link?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">URL</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Status</th>
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
            var oTable = $('#custom_links').DataTable();
        });
    </script>
@endsection
