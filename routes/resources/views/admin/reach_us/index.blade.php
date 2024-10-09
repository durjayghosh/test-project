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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Reach Us</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Manage Reach Us</h2>
            </div>
        </div>


        {{--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>  --}}


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Reach Us</h4>
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
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">email</th>
                                         <th scope="col">Coupon Code</th>
                                        <th scope="col">Ip Address</th>
                                        <th scope="col">Purpose Of Enquery</th>
                                        <th scope="col">Request Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col">Sr.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">email</th>
                                         <th scope="col">Coupon Code</th>
                                        <th scope="col">Ip Address</th>
                                        <th scope="col">Purpose Of Enquery</th>
                                        <th scope="col">Request Date</th>
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
                  <h5 class="modal-title">Request Detail</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body" id="modalBody">
                  {{--  <div class="col-md-6 float-left">
                       <p><span><strong>Name : </strong> Pawan Mishra</span></p>
                  </div>
                  <div class="col-md-6 float-left">
                       <p><span><strong>Email : </strong> Pawan Mishra</span></p>
                  </div>

                  <div class="col-md-6 float-left">
                       <p><span><strong>Contact Number : </strong> Pawan Mishra</span></p>
                  </div>
                  <div class="col-md-6 float-left">
                       <p><span><strong>Qualification : </strong> Pawan Mishra</span></p>
                  </div>

                  <div class="col-md-12 float-left">
                       <p><span><strong>Management Experirnce : </strong>  is .</span></p>
                  </div>
                  <div class="col-md-12 float-left">
                       <p><span><strong>Achivements : </strong>  is </span></p>
                  </div>
                  <div class="col-md-12 float-left">
                      <p><span><strong>Why Wigomania : </strong>  is</span></p>
                  </div>
                  <div class="col-md-12 float-left">
                       <p><span><strong>Do You Belve You Have What It Takes : </strong>  is </span></p>
                  </div>  --}}

              </div>
              <div class="modal-footer">

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
          url: '{!! route('admin.reachUs.indexList') !!}',
        },
		columns: [
          {data: 'DT_RowIndex', name: 'id'},
          {data: 'full_name', name: 'full_name'},
          {data: 'mobile_number', name: 'mobile_number'},
          {data: 'email', name: 'email'},
          {data: 'coupon_code', name: 'coupon_code'},
          {data: 'ip_address', name: 'ip_address'},
          {data: 'purpose_of_enquery', name: 'purpose_of_enquery'},
          {data: 'created_at', name: 'created_at', searchable: false},
          {data: 'action', name: 'action', searchable: false}
        ],
        dom: 'lBfrtip'
      });
  });


  var detailurl = "{{ route('admin.reachUs.show', ':id') }}";
  $(document).ready(function(){
    $( ".details" ).click(function( event ) {
        event.preventDefault();
        $.ajax({
            url: "",
            type: "GET",
            data: {
                "_token": "{{ csrf_token() }}",
            },
            success: function(response) {
                console.log(response);
                if(response.error){
                    $.each(response.error_message, function( index, value ) {
                        $('.'+index+'_error').text(value);
                        $('.'+index+'_error').show('active');
                        {{--  alert( index + ": " + value );  --}}
                    });
                }else{
                    toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 1500; // 1.5s
                    toastr.success(response.success_message);
                    setTimeout(function(){ location.reload(); }, 2000);
                }

            },
        });
    });
})

$(document).on("click",".details",function() {
    var url = detailurl.replace(':id', $(this).attr('data-id'));
    $.ajax({
        url,
        type: "GET",
        data: {
            "_token": "{{ csrf_token() }}",
        },
        success: function(response) {
            console.log(response);
            $('#modalBody').html(response);
            $('#myModal').modal('show')
        },
    });
});
</script>
@endsection
