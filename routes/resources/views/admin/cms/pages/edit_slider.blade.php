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
    @php
        $sections = count($result->sectionList) > 0 ? $result->sectionList : [];
        use App\Models\ {ProductCategory};
        $ProductCategory = ProductCategory::get();
       
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
                        <form method="post" action="{{ route('admin.page.updateSlider') }}" id="sliderSubmit" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="section_id" value="{{ $id }}">

                            @if(count($sections) > 0)
                                <div class="form-group col-md-12">
                                    <hr>
                                </div>
                                @foreach($sections as $key => $section)
                                    <div class="form-row sliderAddShow_{{ $key }}">
                                        @if($section)
                                            <input type="hidden" name="page_seting_id[]" value="{{ $section->id }}">
                                        @endif

                                        {{-- <div class="form-group col-md-6">
                                            <label>Heading <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Heading" name="heading[]" data-invalid="invalid_{{ $key }}" value="{{ isset($section->heading) ? $section->heading : '' }}">
                                            <span class="invalid-feedback invalid_{{ $key }}" style="display:none">Heading field is required.</span>
                                        </div> --}}

                                        

                                        <div class="form-group col-md-6">
                                            <label>Select Category <span class="text-danger">*</span></label>
                                            <select name="heading[]" class="form-control" id="">
                                                <option value="">Select Category</option>
                                                @foreach($ProductCategory as $category)
                                                    <option value="{{ $category->id }}" {{ ( $category->id == $section->heading) ? 'selected' : '' }}>{{ ucwords($category->category_name) }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('category_id'))
                                                <span class="invalid-feedback">
                                                {{ $errors->first('category_id') }}
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Link </label>
                                            <input type="text" class="form-control" placeholder="Link" name="link[]" value="{{ isset($section->link) ? $section->link : '' }}">
                                            @if ($errors->has('link'))
                                                <span class="invalid-feedback">
                                                {{ $errors->first('link') }}
                                                </span>
                                            @endif
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Title</label>
                                            <textarea class="form-control" name="title[]" id="" cols="30" rows="2">{{ isset($section->description) ? $section->description : '' }}</textarea>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Image </label>
                                            <input type="file" name="image[]" id="">
                                            @if(isset($section->image))
                                                <p class="mt-3"><img src="{{ asset($section->image) }}" alt="" width="200"></p>
                                            @endif
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="text-right col-md-12">
                                            <button  type="button" data-classId="sliderAddShow_{{ $key }}"  class="btn btn-danger deleteSlider">Delete</button>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <hr>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Heading <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Heading"  data-invalid="invalid" name="heading[]" value="">
                                        <span class="invalid-feedback invalid" style="display:none">Heading field is required.</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Link </label>
                                        <input type="text" class="form-control" placeholder="Link" name="link[]" value="">
                                        @if ($errors->has('link'))
                                            <span class="invalid-feedback">
                                            {{ $errors->first('link') }}
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Title</label>
                                        <textarea class="form-control" name="title[]" id="" cols="30" rows="2"></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Image </label>
                                        <input type="file" name="image[]" id="">
                                        @if(isset($section->image))
                                            <p class="mt-3"><img src="{{ asset($section->image) }}" alt="" width="200"></p>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-12">
                                        <hr>
                                    </div>
                                </div>
                            @endif

                            <div id="addSliderDiv"></div>
                            <div class="text-right">
                                <button id="addSlider" type="button"  class="btn btn-secondary">Add Slider</button>
                                <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
                            </div>
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

<script>
    var sliderAddShowId = "{{ isset($key) ? $key +1 : 1 }}";
    $(document).ready(function(){
        $("#addSlider").click(function(){
            var html = `
            <div class="form-row sliderAddShow_${sliderAddShowId}" style="display:none;">

                <div class="form-group col-md-6">
                    <label>Heading <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Heading" data-invalid="invalid_${sliderAddShowId}" name="heading[]" value="">
                    <span class="invalid-feedback invalid_${sliderAddShowId}" style="display:none">Heading field is required.</span>
                </div>

                <div class="form-group col-md-6">
                    <label>Link </label>
                    <input type="text" class="form-control" placeholder="Link" name="link[]" value="">
                </div>

                <div class="form-group col-md-6">
                    <label>Title</label>
                    <textarea class="form-control" name="title[]" id="" cols="30" rows="2"></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label>Image </label>
                    <input type="file" name="image[]" id="">
                </div>
                <div class="clearfix"></div>
                <div class="text-right col-md-12">
                    <button  type="button" data-classId="sliderAddShow_${sliderAddShowId}"  class="btn btn-danger deleteSlider">Delete</button>
                </div>

                <div class="form-group col-md-12">
                    <hr>
                </div>
            </div>
            `;
            $('#addSliderDiv').append(html);
            $(".sliderAddShow_"+sliderAddShowId).show('pawan');
            sliderAddShowId++
        });

        {{--  $('#sliderSubmit').on('submit', function(){
            var lngtxt=($(this).find('input[name="heading[]"]').val()).length;
            console.log(lngtxt);
            if (lngtxt==0){
                alert('please enter value');
                return false;
            }else{
                //submit
            }
            return false;
        });  --}}

    });

    $(document).on('submit','#sliderSubmit',function(){
        {{--  var lngtxt=($(this).find('input[name="heading[]"]').val()).length;
        console.log(lngtxt);  --}}
        $ok = true;
        $('input[name="heading[]"]').each(function(){
            if(!$(this).val()){
                $('.'+$(this).attr('data-invalid')).show('active');
                $ok = false;
            }
        });
        return $ok;
    });


    $(document).on('click','.deleteSlider',function(){
        var classId = '.'+$(this).attr('data-classId');
        $(classId).animate({padding: "0px", 'margin-left':'-10px', 'font-size': "0px"}, 300, function() {
            $(classId).remove();
        });
    });
</script>
@endsection
