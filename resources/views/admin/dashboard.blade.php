@extends('admin.layouts.app')
@section('content')
<!--**********************************
    Content body start
***********************************-->
{{--  {{ dd(session('menuPermission')) }}  --}}
<div class="content-body">
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
@php
    $permission = 0;
    if(Auth::user()->role == 1){
        $permission = 1;
    }elseif(session('menuPermission') !== null && in_array('admin.dashboard', session('menuPermission'))){
        $permission = 1;
    }
@endphp

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="breadcrumb-range-picker">
                <span><i class="icon-calender"></i></span>
                <span class="ml-1">{{ date("M d, Y") }}</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-4">
            <div class="col-xl-3 col-lg-4">
                <h2 class="page-heading">Hi,Welcome Back!</h2>
                <p class="mb-0">Your Wig-O-Mania admin pannel</p>
            </div>

        </div>

        <div class="card-header pb-0">
            <h4 class="card-title">Dashboard</h4>
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
        @if($permission)
        {{--  <div class="row">
            <div class="col-xl-6 col-xxl-12">
                <div class="row">
                    <div class="col-sm-6 col-xxl-6 col-xl-6">
                        <div class="card bg-primary">
                            <div class="card-body pb-0">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <h4 class="text-white mb-3">Total Positive Review</h4>
                                    </div>
                                    <div class="col-auto">
                                        <h2 class="text-white">{{ '1' }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="home_chart_widget_1" class="home_chart_widget chart-one"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xxl-6 col-xl-6">
                        <div class="card bg-secondary">
                            <div class="card-body pb-0">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <h4 class="text-white mb-3">Total Negative Review</h4>
                                    </div>
                                    <div class="col-auto">
                                        <h2 class="text-white">{{ '2' }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="home_chart_widget_2" class="home_chart_widget chart-two"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xxl-6 col-xl-6">
                        <div class="card bg-success">
                            <div class="card-body pb-0">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <h4 class="text-white mb-3">Total Open Review</h4>
                                    </div>
                                    <div class="col-auto">
                                        <h2 class="text-white">{{ '3' }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="home_chart_widget_3" class="home_chart_widget chart-three"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xxl-6 col-xl-6">
                        <div class="card bg-warning">
                            <div class="card-body pb-0">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <h4 class="text-white mb-3">Total Close Review</h4>
                                    </div>
                                    <div class="col-auto">
                                        <h2 class="text-white">{{ '4' }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="home_chart_widget_4" class="home_chart_widget chart-four"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xxl-6 col-xl-6">
                        <div class="card bg-danger">
                            <div class="card-body pb-0">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <h4 class="text-white mb-3">Total Open Time</h4>
                                    </div>
                                    <div class="col-auto">
                                        <h2 class="text-white">{{ '5' }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="home_chart_widget_4" class="home_chart_widget chart-four"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xxl-6 col-xl-6">
                        <div class="card bg-info">
                            <div class="card-body pb-0">
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <h4 class="text-white mb-3">Total Close Time</h4>
                                    </div>
                                    <div class="col-auto">
                                        <h2 class="text-white">{{ '6' }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <div id="home_chart_widget_4" class="home_chart_widget chart-four"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <div class="col-xl-6 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                            <h4 class="card-title mb-4">Review By Month</h4>
                            <canvas id="myChart" ></canvas>
                    </div>
                </div>
            </div>
        </div>  --}}

        <div class="row">


            {{--  <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Request List</h4>
                        <div class="table-responsive">
                                <table id="agent" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr.No</th>
                                            <th scope="col">Tracking No</th>
                                            <th scope="col">Request Date</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">ship</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Files On</th>
                                            <th scope="col">Returns</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">Sr.No</th>
                                            <th scope="col">Tracking No</th>
                                            <th scope="col">Request Date</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">ship</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Files On</th>
                                            <th scope="col">Returns</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                        </div>
                    </div>
                </div>
            </div>  --}}
        </div>
        @endif
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->

<script>
    $(function () {
        {{--  var oTable = $('#agent').DataTable({
          processing: true,
          serverSide: true,
          stateSave: true,
          searching: true,
          autoWidth:false,
          paging:false,
          "order": [[0, "desc"]],
          lengthMenu: [[5], [5]],
          "pageLength":25,
          ajax: {
            url: '{!! route('admin.userrequest.indexList') !!}',
            data: function (d) {
              d.filterType = 'requested';
           }
          },
          columns: [
            {data: 'DT_RowIndex', name: 'id'},
            {data: 'tracking_number', name: 'tracking_number'},
            {data: 'created_at', name: 'created_at'},
            {data: 'name', name: 'name'},
            {data: 'ship', name: 'ship'},
            {data: 'status', name: 'status'},
            {data: 'departure_date', name: 'departure_date'},
            {data: 'Return_date', name: 'Return_date'},

            {data: 'action', name: 'action', searchable: false}
          ],
          dom: 'lBfrtip'
        });  --}}

        $('#dateFilter').on('click', function (e) {
          oTable.draw();
          e.preventDefault();
          return false;
       });
    });

const monthData = '{!! json_encode($months) !!}';

    const monthValue = [];
    $.each($.parseJSON(monthData), function( index, value ) {
        monthValue.push(value);
    });
    const dataSetup = {
        labels: ["Januay", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: [{
          label: 'Request By Month',
          data: monthValue,
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1
        }]
      };

    {{--  const labels = Utils.months({count: 7});  --}}

    new Chart("myChart", {
    type: "bar",
    data: dataSetup,
    options: {
        legend: {display: false},
        title: {
        display: false,
        text: "World Wine Production 2018"
        }
    }
    });


</script>
@endsection
