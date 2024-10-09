@extends('admin.layouts.app')
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Partner Opportunity</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Manage Partner Opportunity</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Partner Opportunity</h4>
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
                        <div class="">
                            <table id="agent" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">Opportunity</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">Opportunity</th>
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
      var oTable = $('#agent').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        searching: true,
        autoWidth:false,
        "order": [[0, "desc"]],
        lengthMenu: [[25, 50, 100, -1], [25, 50, 100, "All"]],
        "pageLength":25,
	    ajax: {
          url: '{!! route('admin.opportunity.indexList') !!}',
        },
		columns: [
          {data: 'DT_RowIndex', name: 'id'},
          {data: 'opportunity', name: 'opportunity'},
          {data: 'created_at', name: 'created_at', searchable: false},
          {data: 'action', name: 'action', searchable: false}
        ],
        dom: 'lBfrtip'
      });
  });
</script>
@endsection
