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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Review</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Add Review</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Add Review</h4>
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
                        <form method="post" action="{{ route('admin.review.store') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="form-roow">
                                <div class="form-group col-md-6">
                                    <label>Product Category <span class="text-danger">*</span></label>
                                    <select name="product" id="" class="form-control">
                                        <option value="">Select Product</option>
                                        @if(count($products) > 0)
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ ucwords(strtolower($product->category_name)) }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @if ($errors->has('product'))
                                        <span class="invalid-feedback">
                                            {{ $errors->first('product') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="John Doe" name="name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>

                                 <div class="form-group col-md-6">
                                    <label>Review Date <span class="text-danger">*</span></label>
                                    <input type="datetime-local" class="form-control" name="review_date" value="{{ old('review_date') }}">
                                    @if ($errors->has('review_date'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('review_date') }}
                                        </span>
                                    @endif
                                </div> 

                                <div class="form-group col-md-6">
                                    <label>Rating <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" placeholder="5" name="rating"  value="{{ old('rating') }}">
                                    @if ($errors->has('rating'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('rating') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Description <span class="text-danger">*</span></label>
                                   <textarea class="form-control" name="description" id="" cols="30" rows="5"value="{{ old('description') }}"></textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                        </span>
                                    @endif
                                </div>

                                {{-- <div class="form-group col-md-6">
                                    <label>Description <span class="text-danger">*</span></label>
                                   <textarea class="ckeditor" name="description" id="" cols="30" rows="5"></textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                        </span>
                                    @endif
                                </div> --}}

                                <div class="form-group col-md-6">
                                    <input type="checkbox" id="is_verified" name="is_verified" value="1" class="check-i">
                                    <label for="is_verified" class="form-new-p">Show on Product</label>
                                    <input type="checkbox" id="home_page" name="home_page" value="1"  class="check-i">
                                    <label for="home_page" class="form-new-p">Show on Home Page</label>
                                   
                                </div>


                                <div class="form-group col-md-12 mt-5">
                                    <hr >
                                </div>

                            </div>
                            <button type="submit" name="submit" id="submit" class="btn btn-primary float-right">Submit</button>
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
