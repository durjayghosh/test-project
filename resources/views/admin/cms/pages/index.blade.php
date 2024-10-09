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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Pages</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Manage Pages</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Pages</h4>
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
                                        <th scope="col">Page</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">Page</th>
                                        <th scope="col">Created At</th>
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

    <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Meta Tags</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formSubmits" action="#"  enctype="multipart/form-data">
                    <div class="modal-body" id="modalBody">
                        <input type="hidden" name="id" id="id" value="">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="col-form-label"> Title:</label>
                            <input type="text" name="title" class="form-control title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="meta_title" class="col-form-label">Meta Title:</label>
                            <input type="text" name="meta_title" class="form-control meta_title" id="meta_title">
                        </div>
                        <div class="form-group">
                            <label for="meta_description" class="col-form-label">Meta Description:</label>
                            <textarea class="form-control meta_description" name="meta_description" id="meta_description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_keyword" class="col-form-label">Meta Keywords:</label>
                            <textarea class="form-control meta_keyword" name="meta_keyword" id="meta_keyword"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
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
          url: '{!! route('admin.page.indexList') !!}',
        },
		columns: [
          {data: 'DT_RowIndex', name: 'id'},
          {data: 'page', name: 'page'},
          {data: 'created_at', name: 'created_at', searchable: false},
          {data: 'action', name: 'action', searchable: false}
        ],
        dom: 'lBfrtip'
      });
  });

  var detailurl = "{!! route('admin.page.metaTag', ':id') !!}";
  $(document).on("click",".addMetaTag",function() {
    $("form").trigger('reset');
    $('#formSubmits').attr('data-id', $(this).attr('data-id'));
    $('#id').val($(this).attr('data-id'));

    var url = detailurl.replace(':id', $(this).attr('data-id'));
    $.ajax({
        url,
        type: "GET",
        success: function(response) {
            $('#title').val(response.data.title);
            $('#meta_title').val(response.data.meta_title);
            $('#meta_keyword').val(response.data.meta_keyword);
            $('#meta_description').val(response.data.meta_description);
            $('#myModal').modal('show')
        },
    });
});

$(document).ready(function(){
    $( "#formSubmits" ).submit(function( event ) {
        var url = detailurl.replace(':id', $(this).attr('data-id'));
        var form = document.getElementById('formSubmits');
        var formData = new FormData(form);
        event.preventDefault();
        $.ajax({
            url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                 {{--  toastr.options.positionClass = 'toast-bottom-right';  --}}
                    toastr.options.timeOut = 3000;
                    toastr.success(response.message);
                    $('#myModal').modal('hide');

                if(response.error){
                    $.each(response.error_message, function( index, value ) {
                        $('.'+index+'_errorss').text(value);
                        $('.'+index+'_errorss').show('active');
                      });
                }
            },
        });
    });
});

</script>
@endsection
