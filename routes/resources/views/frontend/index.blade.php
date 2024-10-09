@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
@php
$PageSections = $PageSections ? $PageSections : [];
$Sliders = $PageSections->where('section', 'Slider');
$Section1 = $PageSections
->where('section', 'section_1')
->first()
->sectionList->first();
$Section2 = $PageSections
->where('section', 'section_2')
->first()
->sectionList->first();
$Section3 = $PageSections
->where('section', 'section_3')
->first()
->sectionList->first();
$Section4 = $PageSections
->where('section', 'section_4')
->first()
->sectionList->first();
$Section5 = $PageSections
->where('section', 'section_5')
->first()
->sectionList->first();
$Section6 = $PageSections
->where('section', 'section_6')
->first()
->sectionList->first();
@endphp
@include('frontend.common.slider')
<!--**********************************
            Content body start
        ***********************************-->

@if($Section1)
<section class="coupon-section">

    <div class="container">
        <div class="col-md-12 review-header">
            <p>{{ $Section1->heading }}</p>
            {!! $Section1->description !!}
            <div class="divider"></div>
        </div>
        <div class="row">
            <div class="col-md-7 coupon-left">
                <span>
                    <img src="{{ asset($Section1->image) }}" class="img-fluid">
                </span>
            </div>
            <div class="col-md-5 coupon-right">
                <form method="POST" action="#" class="formSubmit" id="formSubmit" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label_h">Your Name</label>
                        <input type="text" class="form-control full_names" name="full_name" data-class-name="full_names"
                            id="" placeholder="Enter Your Name">
                        <span class="error_class1 full_name_error"></span>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label_h">WhatsApp Number</label>
                        <div class="input-group">
                            {{-- <div class="input-group-text">India +91</div> --}}
                            {{-- <input type="text" class="form-control mobile_number" name="mobile_number"
                                data-class-name="mobile_numbers" placeholder="WhatsApp Number For OTP">

                            <span class="error_class1 mobile_number_error"></span> --}}
                            <input type="tel" name="mobile_number" class="form-control mobile_numbers"
                                placeholder="Enter WhatsApp Number" id="phones" data-class-name="mobile_numbers"
                                maxlength="10"><br>
                            <input type="hidden" id="country_data" name="country_data" value="in">
                            <input type="hidden" class="dial_code" id="dial_code" name="dial_code" value="">
                            <span class="error_class mobile_number_error"></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label_h">Email Address</label>
                        <input type="email" class="form-control email" name="email" id="" data-class-name="emails"
                            placeholder="Enter Your Email">
                        <span class="error_class1 email_error"></span>
                    </div>


                    <div class="mb-4">
                        <label for="" class="form-label_h">What are looking for</label>
                        <input type="text" class="form-control purpose_of_enquery" name="purpose_of_enquery"
                            data-class-name="purpose_of_enquerys" id="" placeholder="Enter Your Subject">
                        <span class="error_class1 purpose_of_enquery_error"></span>
                    </div>
                    <div class="form-group mb-1">
                        {{-- {{ app('mathcaptcha')->reset(); }} --}}
                        <label for="mathgroup">Please solve the following math function:
                            {{ app('mathcaptcha')->label() }}</label>
                        {!! app('mathcaptcha')->input(['class' => 'form-control mathcaptchas', 'id' => 'mathgroup']) !!}
                        <span class="error_class mathcaptcha_errors"></span>
                    </div>

                    <div class="mb-4 coupon_otp_boxs" style="display: none;margin-top:5px;">
                        <label style="color: white;" class="form-label_h">OTP</label>
                        <input type="number" name="otp" class="form-control  contactFormInp" id="otps"
                            autocomplete="off">
                        <input type="hidden" name="reachus_id" class="reachus_ids" id="reachus_ids" value=""
                            autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-dark home_form">Send OTP</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endif
<section class="mobile_num" id="our_forte12">
    <div class="row" id="forte">
        <div class="col-md-7 forte-section1">
            <h1 class="forte_heading text-right" style="color:#ee4695">{{ $Section2->heading }}</h1>
            <h1 class="forte_heading text-right new-home-heading" style=font-size:20px;>{{ $Section2->heading_title }}
            </h1>

            <div class="forte_para new-home-para">
                {!! $Section2->description !!}
            </div>
            <div class="forte-flex">
                <h2 class="bald-heading">{{ $ProductCategory[1]->category_name }}</h2>
                <h2 class="scanty-heading">{{ $ProductCategory[0]->category_name }}</h2>

                <a href="{{ route('product', $ProductCategory[0]->slug) }}">
                    <div class="hovereffect first-img ">
                        <img src="{{ asset($ProductCategory[0]->image) }}" class="ourForteImage" id="scanty">
                    </div>
                </a>

                <a href="{{ route('product', $ProductCategory[1]->slug) }}">
                    <div class="hovereffect">
                        <img src="{{ asset($ProductCategory[1]->image) }}" class="ourForteImage" id="mens">
                    </div>
                </a>

                <a href="{{ route('product', $ProductCategory[2]->slug) }}">
                    <div class="hovereffect">
                        <img src="{{ asset($ProductCategory[2]->image) }}" class="third-img ourForteImage" id="hair">


                    </div>
                    <h2 href="" class="fig_aa">{{ $ProductCategory[2]->category_name }}</h2>
                </a>
            </div>
        </div>
        <div class="col-md-5 forte-col">
            <a href="{{ route('product', $ProductCategory[3]->slug) }}">
                <div class="hovereffect">
                    <img src="{{ asset($ProductCategory[3]->image) }}" class="ourForteImage" id="wigs">
                </div>
                <h2 href="" class="fig_a">{{ $ProductCategory[3]->category_name }}</h2>
            </a>
        </div>
    </div>
</section>
@if($Section3)
<section class="review-section new-review-section" id="reviewSection">
    <div class="row">
        <div class="col-md-12 review-header">
            <p>{{ $Section3->heading }}</p>
            {!!$Section3->description !!}
            <div class="divider"></div>
        </div>
        @if(count($Reviews) > 0)
        @foreach ($Reviews as $rkey => $review)
        <div class="col-sm-4">
            <div class="card review-block">
                <div class="card-body">
                    <div class="review-image">
                        <span>{{ substr(ucwords(trim($review->name)),0,1) }}</span>
                    </div>
                    <!-- <?php
                    $str_len = strlen($review->description);
                    ?> -->
                    @if($str_len >= 180)
                    <p class="review-text" style="height: 80px;">{{Str::limit($review->description, 180) }}<button
                            type="button" class="modal_review" data-toggle="modal"
                            data-target="#exampleModalCenter{{ $rkey }}">Read More </button></p>
                    @else
                    <p class="review-text" style="height: 80px;">{!! $review->description !!}</p>

                    @endif
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter{{ $rkey }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p class="review-name">{{ ucfirst($review->name) }}</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="review-date">{{ Carbon\Carbon::parse($review->review_date)->format("d M, Y") }}</p>
                                    <p class="review-star"><i class="fa fa-star"></i>
                                        @if($review->rating > 0)
                                        @for($i = 1; $i < $review->rating; $i++)
                                            <i class="fa fa-star"></i>
                                            @endfor
                                            @endif
                                    </p>
                                    {!!$review->description!!}
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end modal-->
                    <div class="divider review-divider"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="review-name">{{ ucfirst($review->name) }}</p>
                            <p class="review-date">{{ Carbon\Carbon::parse($review->review_date)->format("d M, Y") }}</p>
                        </div>
                        <div class="col-md-6 text-end">
                            <p class="review-star"><i class="fa fa-star"></i>
                                @if($review->rating > 0)
                                @for($i = 1; $i < $review->rating; $i++)
                                    <i class="fa fa-star"></i>
                                    @endfor
                                    @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        <div class="col-md-12 text-center">
            <a class="btn btn-outline-dark" href="{{ route('review') }}">View All Reviews</a>
        </div>
    </div>
</section>
@endif
@if($Section4)
<section class="forte-section_1" id="studio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="studio_subheading text-center">{{ $Section4->heading }}</h3>
                <div class="studio_subheading text-center" style="text-align: center"> {!! $Section4->description !!}
                </div>

                <a href="{{ $Section4->facebook ? $Section4->facebook : 'javascript:void(0);' }}" class="pink_a">
                    <h3 class="studio_subheading text-center"><i class="fa fa-facebook-square " aria-hidden="true"
                            style="color: #ee4695;"> </i> {{ $Section4->sub_heading }}</h3>
                </a>

                @if($Section4->youtube)
                <p class="text-center mt=3">
                    <iframe width="760" height="315" src="{{ $Section4->youtube }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen=""></iframe>
                </p>
                @endif
            </div>
            <div class="col-md-12 mt-3 text-center">
                <a class="btn btn-outline-dark" href="#Chennai">CHENNAI <i class="fa fa-angle-right"
                        aria-hidden="true"></i>
                </a>
                <a class="btn btn-outline-dark" href="#Hyderabad">HYDERABAD <i class="fa fa-angle-right"
                        aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endif
<section class="forte-section_2" id="Chennai">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="ch_heading">
                    <div>
                        <h3 class="studio_subheading_ch">CHENNAI</h3>
                    </div>
                    <div>
                        <span class="cara_fb"><a href="https://www.facebook.com/wigomania/" class="pink_a"><i
                                    class="fa fa-facebook-square" aria-hidden="true"></i> Wigomania Chennai</a></span>
                        <span class="cara_fb"><a href="https://www.facebook.com/hairpieces4hairloss/" class="pink_a"><i
                                    class="fa fa-facebook-square" aria-hidden="true"></i> Hair Pieces for Hair
                                Loss</a></span> <span class="cara_fb"><a
                                href="https://www.facebook.com/HairIntergrationSystem/" class="pink_a"><i
                                    class="fa fa-facebook-square" aria-hidden="true"></i> Hair Integration
                                System</a></span>
                    </div>
                </div>
                @if(count($GalleryChennai) > 0)
                <div class="home-demo">
                    <div class="owl-carousel owl-theme">
                        @foreach($GalleryChennai as $key => $gallery)
                        <div class="item">
                            <img src="{{ asset($gallery->image) }}" class="ca-img">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            @if(isset($Section5->youtube))
            <div class="col-lg-4 mt-3">
                <iframe width="100%" height="350" src="{{ $Section5->youtube }}" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            @endif
            @if(isset($Section6->youtube))
            <div class="col-lg-5 mt-3">
                {!! $Section6->location !!}
            </div>
            @endif
            <div class="col-lg-3 mt-3">
                <ul class="ul-home">
                    @if($Section5->address)
                    <li class="li-home text-light">
                        <i class="fa fa-map-marker text-light" aria-hidden="true"></i>
                        {!! $Section5->address !!}
                    </li>
                    @endif
                    @if($Section5->phone)
                    <li class="li-home"><i class="fa fa-phone text-light" aria-hidden="true"></i><a
                            href="tel:+91{{ $Section5->phone }}" class="text-light">
                            +91 {{ $Section5->phone }}</a>
                    </li>
                    @endif
                    @if($Section5->email)
                    <li class="li-home"><i class="fa fa-envelope-o text-light" aria-hidden="true"></i>
                        <a href="mailto:{{ $Section5->email }}" class="text-light">{{ $Section5->email }}</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="forte-section_3" id="Hyderabad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="ch_heading">
                    <div>
                        <h3 class="studio_subheading_hy">HYDRABAD</h3>
                    </div>
                    <div>
                        <span class="cara_fbb">
                            <a href="https://www.facebook.com/wigomaniahyderabad/" class="white_a">
                                <i class="fa fa-facebook-square new_fb" aria-hidden="true"></i> Wigomania Hyderabad</a>
                        </span>
                        {{-- <span class="cara_fbb">
                            <a href="https://www.facebook.com/wigomania/" class="white_a"><i
                                    class="fa fa-facebook-square new_fb" aria-hidden="true"></i> Hair Pieces for Hair
                                Loss</a>
                        </span>
                        <span class="cara_fbb">
                            <a href="https://www.facebook.com/wigomania/" class="white_a"><i
                                    class="fa fa-facebook-square new_fb" aria-hidden="true"></i> Hair Integration
                                System</a>
                        </span> --}}
                    </div>
                </div>
                @if(count($GalleryHyderabad) > 0)
                <div class="home-demo">
                    <div class="owl-carousel owl-theme">
                        @foreach($GalleryHyderabad as $key => $gallery)
                        <div class="item">
                            <img src="{{ asset($gallery->image) }}" class="ca-img">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            @if(isset($Section6->youtube))
            <div class="col-lg-4 mt-3">
                <iframe width="100%" height="350" src="{{ $Section6->youtube }}" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            @endif
            @if(isset($Section6->youtube))
            <div class="col-lg-5 mt-3">
                {!! $Section6->location !!}
            </div>
            @endif
            <div class="col-lg-3 mt-3">
                <ul class="ul-home">
                    @if($Section6->address)
                    <li class="li-home"><i class="fa fa-map-marker home-i" aria-hidden="true"></i>
                        {{ $Section6->address}}</li>
                    @endif
                    @if($Section6->phone)
                    <li class="li-home"><i class="fa fa-phone home-i" aria-hidden="true"></i><a
                            href="tel:+91{{ $Section6->phone }}" class="text-dark">
                            +91 {{ $Section6->phone }}</a></li>
                    @endif
                    @if($Section6->email)
                    <li class="li-home"><i class="fa fa-envelope-o home-i" aria-hidden="true"></i>
                        <a href="mailto:{{ $Section6->email }}" class="text-dark"> {{ $Section6->email }} </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>




<script type="text/javascript">
{
    {
        --
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                'sitekey': '6LeT4nwkAAAAACdqqQfWhM8-Xn2MouaIjyDO9iYS'
            });
        };
        --
    }
}
</script>


{{--
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
</script> --}}


<script>
{
    {
        --$(document).ready(function() {
            $("#formSubmit").submit(function(event) {

                event.preventDefault();
                $.ajax({
                    url: routes,
                    type: "POST",
                    data: {
                        full_name: full_name,
                        mobile_number: mobile_number,
                        email: email,
                        purpose_of_enquery: purpose_of_enquery,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.error) {
                            $.each(response.error_message, function(index, value) {
                                $('.' + index + '_error').text(value);
                                $('.' + index + '_error').show('active');
                            });
                        } else {
                            toastr.options.positionClass = 'toast-bottom-right';
                            toastr.options.timeOut = 1500; // 1.5s
                            toastr.success(response.success_message);
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        }

                    },
                });
            });
        }) --
    }
}
const thankuUrls = "{{ route('thanku') }}";
$(document).ready(function() {


    $("#formSubmit").submit(function(event) {
        var form = document.getElementById('formSubmit');
        if ($('#otps').val()) {
            var url = "{{ route('contact.submitOtp') }}";
            var formData = new FormData(form);
            formData.append('reachus_id', $('.reachus_ids').val());
        } else {
            var formData = new FormData(form);
            var url = "{{ route('contact.reachUsStore') }}";
        }


        $('.error_class').hide('active');
        event.preventDefault();
        $.ajax({
            url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.error) {
                    $.each(response.error_message, function(index, value) {
                        $('.' + index + '_error').text(value);
                        $('.' + index + '_error').show('active');
                    });
                } else {
                    toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 1500;
                    toastr.success(response.success_message);
                    $('.coupon_otp_boxs').show();

                    $.each(response.request, function(index, value) {
                        $('.' + index + 's').attr('disabled', true);
                    });

                    if (response.is_relode == 'yes') {
                        window.location.assign(thankuUrls); {
                            {
                                --setTimeout(function() {
                                    location.reload();
                                }, 2000);
                                --
                            }
                        }
                    }
                    $('#reachus_ids').val(response.ReachUs.id)
                }
            },
        });
    });
})
</script>
@endsection