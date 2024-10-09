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
@php
        $sections = count($result->sectionList) > 0 ? $result->sectionList : [];
        use App\Models\ {ProductCategory};
        $ProductCategory = ProductCategory::get();
       
    @endphp

<div class="content-body">
    @php
        $section = count($result->sectionList) > 0 ? $result->sectionList[0] : [];
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
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Section</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Edit Section</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Edit Section</h4>
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
                        <form method="post" action="{{ route('admin.page.update') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="section_id" value="{{ $id }}">
                            @if($section)
                                <input type="hidden" name="page_seting_id" value="{{ $section->id }}">
                            @endif

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <hr>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Heading <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Heading" name="heading" value="{{ isset($section->heading) ? $section->heading : old('heading') }}">
                                    @if ($errors->has('heading'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('heading') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Heading Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Heading Title " name="heading_title" value="{{ isset($section->heading_title) ? $section->heading_title : old('heading_title') }}">
                                    @if ($errors->has('heading_title'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('heading_title') }}
                                        </span>
                                    @endif
                                </div>
                                

                                <div class="form-group col-md-6">
                                    <label>Sub Heading</label>
                                    <input type="text" class="form-control" placeholder="Sub Heading" name="sub_heading" value="{{ isset($section->sub_heading) ? $section->sub_heading : old('sub_heading') }}">
                                    @if ($errors->has('sub_heading'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('sub_heading') }}
                                        </span>
                                    @endif
                                </div>
                                @if($id == 22 || $id == 23 || $id == 24 || $id == 25)
                                <div class="form-group col-md-6">
                                    <label>Select Category <span class="text-danger">*</span></label>
                                    <select name="product_id" class="form-control" id="">
                                        <option value="">Select Category</option>
                                        @foreach($ProductCategory as $category)
                                            <option value="{{ $category->id }}" {{ ( $category->id == $section->product_id) ? 'selected' : '' }}>{{ ucwords($category->category_name) }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('category_id') }}
                                        </span>
                                    @endif
                                </div>
                                 @endif

                                <div class="form-group col-md-6">
                                    <label>Button Link </label>
                                    <input type="text" class="form-control" placeholder="Link" name="link" value="{{ isset($section->link) ? $section->link : old('link') }}">
                                    @if ($errors->has('link'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('link') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Phone </label>
                                    <input type="text" class="form-control" placeholder="" name="phone" value="{{ isset($section->phone) ? $section->phone : old('phone') }}">
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('phone') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Email </label>
                                    <input type="text" class="form-control" placeholder="example@email.com" name="email" value="{{ isset($section->email) ? $section->email : old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Image </label>
                                    <input type="file" name="image" id="">
                                    @if(isset($section->image))
                                        <p class="mt-3"><img src="{{ asset($section->image) }}" alt="" width="200"></p>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Image Title</label>
                                    <input type="text" class="form-control" placeholder="Image Title" name="image_title" value="{{ isset($section->image_title) ? $section->image_title : old('image_title') }}">
                                    @if ($errors->has('image_title'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('image_title') }}
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <hr>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Description</label>
                                   <textarea name="description" id="" class="ckeditor" cols="30" rows="10">{{ isset($section->description) ? $section->description : old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Other Description</label>
                                   <textarea name="other_description" class="ckeditor" id="" cols="30" rows="10">{{ isset($section->other_description) ? $section->other_description : old('other_description') }}</textarea>
                                    @if ($errors->has('other_description'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('other_description') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Location</label>
                                    <textarea class="ckeditor" name="location" id="" cols="30" rows="2" placeholder="">{{ isset($section->location) ? $section->location : old('location') }}</textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Full Address</label>
                                    <textarea class="ckeditor" name="address" id="" cols="30" rows="2" placeholder="">{{ isset($section->address) ? $section->address : old('address') }}</textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Other Details </label>
                                    <hr>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Youtube Link </label>
                                    <input type="text" class="form-control" placeholder="https://www.youtube.com/@isynbus" name="youtube" value="{{ isset($section->youtube) ? $section->youtube : '' }}">
                                    @if ($errors->has('youtube'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('youtube') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Facebook Link </label>
                                    <input type="text" class="form-control" placeholder="https://www.facebook.com/" name="facebook" value="{{ isset($section->facebook) ? $section->facebook : '' }}">
                                    @if ($errors->has('facebook'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('facebook') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Instagram Link </label>
                                    <input type="text" class="form-control" placeholder="https://www.instagram.com/" name="instagram" value="{{ isset($section->instagram) ? $section->instagram : '' }}">
                                    @if ($errors->has('facebook'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('facebook') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Twitter Link </label>
                                    <input type="text" class="form-control" placeholder="https://twitter.com/" name="twitter" value="{{ isset($section->twitter) ? $section->twitter : '' }}">
                                    @if ($errors->has('twitter'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('twitter') }}
                                        </span>
                                    @endif
                                </div>


                                <div class="form-group col-md-12">
                                    <hr>
                                </div>
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
{{--  <script>
    CKEDITOR.replace( 'other_description' );
    CKEDITOR.replace( 'description' );
</script>  --}}

{{-- <script>
    tinymce.init({
      selector: 'textarea.other_description',
      plugins: 'code',
      toolbar: 'code',
      height: 300,
      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
    });

    tinymce.init({
        selector: 'textarea.description',
        plugins: 'code',
        toolbar: 'code',
        height: 300,
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
      });
</script> --}}


@endsection
