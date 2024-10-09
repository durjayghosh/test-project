@extends('admin.layouts.app')
@section('content')
<!--**********************************
    Content body start
***********************************-->
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
</style>
{{--  {{ dd($menu->groupBy('group_title')) }}  --}}
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Role</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Edit Role</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Edit Role</h4>
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
                        <div class="basic-form">
                        <form method="post" action="{{ route('admin.role.update') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $role->id }}">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Role <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Role" name="role" value="{{ $role->role }}">
                                    @if ($errors->has('role'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('role') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Status <span class="text-danger">*</span></label>
                                    <select id="status" class="form-control" name="status">
                                        <option selected value="">Select Status</option>
                                        <option @php echo ($role->status=='1') ? 'selected' : '' @endphp value="1">Active</option>
                                        <option @php echo ($role->status=='0') ? 'selected' : '' @endphp value="0">Inactive</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('status') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-12 mt-5">
                                    <label>Menu Permission</label>
                                    <hr class="bg-warning">
                                </div>

                                @foreach($menu->groupBy('group_title') as $key => $menuList)

                                <div class="form-group col-md-3">
                                    <table>
                                        <tr>
                                            <th colspan="2">{{ $key }}</th>
                                          </tr>
                                        <tr>
                                          <th></th>
                                          <th>Menu</th>
                                        </tr>
                                        @foreach($menuList as $list)
                                        <tr>
                                            <td><input type="checkbox" name="menu_id[]" value="{{ $list->id }}"
                                                @foreach($menu_permission as $permission)
                                               {{--  {{  dd() }}  --}}
                                                    @if($permission->menu_id ==  $list->id) checked @endif
                                                @endforeach
                                                ></td>
                                            <td>{{ $list->menu_name }}</td>
                                            {{--  <td>Germany</td>  --}}
                                        </tr>
                                        @endforeach

                                      </table>
                                </div>
                                @endforeach
                            </div>
                            <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
                        </form>
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
@endsection
