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
    $Section6 = $PageSections
    ->where('section', 'section_6')
    ->first()
    ->sectionList->first();
    $section_7 = $PageSections
    ->where('section', 'section_7')
    ->first()
    ->sectionList->first();
    $Section_8= $PageSections
    ->where('section', 'section_8')
    ->first()
    ->sectionList->first();
    $Section_9= $PageSections
    ->where('section', 'section_9')
    ->first()
    ->sectionList->first();
    $Section_10= $PageSections
    ->where('section', 'section_10')
    ->first()
    ->sectionList->first();
    @endphp
    @include('frontend.common.slider')
	<?php
function isMobileBrowser() {
       $mobileKeywords = array(
        'mobile', 'webos', 'iphone', 'ipod', 'android', 'blackberry',
        'windows phone', 'symbian', 'palm', 'opera mini', 'opera mobi'
    );
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    foreach ($mobileKeywords as $keyword) {
        if (strpos($userAgent, $keyword) !== false) {
            return true;
        }
    }
    return false;
}
?>
<style type="text/css">
@media screen and (max-width:568px) {
    .coupon-left img,.mySlides {
        display:none !important;
    }
	section.mobile-banner{
		margin-top:130px !important;
	}
	.sticky_gallery{
		border-bottom: 1px solid #ee4695;
	}
	.carousel-caption{
		padding-top: 0.75rem !important;
		padding-bottom: 0rem  !important;
	}
	.whatsapp-chat{
		bottom: 20px;
	}
}
.mobile-line .col-lg-7{
	display:none !important;
}
.titles {
  margin-top: 20px;
  font-size: 40px;
  font-weight: 700;
  color: #ee4695;
  margin-bottom: 10px;
}
.sections {
  margin-top: 40px;
  margin-bottom: 80px;
}
.divider {
  position: relative;
  border-bottom: 3px solid #f0f0f0;
  margin-bottom: 30px;
  margin-top: 30px;
  width: 80%;
  margin: auto;
}

.divider:before {
  position: absolute;
  width: 30px;
  height: 30px;
  border: 1px solid #f0f0f0;
  left: 50%;
  margin-left: -15px;
  top: 50%;
  background: #fff;
  margin-top: -15px;

}
.divider:after {
  position: absolute;
  width: 20px;
  height: 20px;
  border: 1px solid #ee4695;
  left: 50%;
  margin-left: -10px;
  top: 50%;
  background: #ee4695;
  margin-top: -10px;
 }
/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 20px;
  text-align: center;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-right: 10px;
  margin-left: 10px;
}
/* Featurettes
------------------------- */
.featurette-divider {
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
}
/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}
.review-header.customdesb{
	text-align: center;
    color: #ee4695;
    font-size: 27px;
    font-weight: bold;
}
</style>
      @if($Section1)
    <section class="coupon-section">

        <div class="container">
            <div class="col-md-12 review-header customdesb">
                Don’t Miss Out: Get 15% Off on MRP + Free Demo & Consultation!
            </div>
            <div class="row">
                <div class="col-md-7 coupon-left">
                    <span>
					<picture style="height: auto !important;
  width: 90% !important;">
    <source srcset="{{ asset($Section1->image) }}"
            media="(orientation: portrait)" style="height: auto !important;
  width: 100% !important;">
    <img class="offscreen-img" src="{{ asset($Section1->image) }}" alt="Coupan" title="hair loss solution"
                            class="img-fluid" loading="lazy" style="width: 90% !important;height: auto !important;">
	</source>
</picture></span>
                </div>
                <div class="col-md-5 coupon-right">
                    <form method="POST" action="#" class="formSubmit" id="formSubmit" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label_h">Your Name</label>
                            <input type="text" class="form-control full_names" name="full_name"
                                data-class-name="full_names" id="full_nameFormsubmit" placeholder="Enter Your Name">
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
                                    placeholder="Enter WhatsApp Number" id="phonesFormsubmit" data-class-name="mobile_numbers"
                                    maxlength="10"><br>
                                <input type="hidden" id="country_data" name="country_data" value="in">
                                <input type="hidden" class="dial_code" id="dial_code" name="dial_code" value="">
                                <span class="error_class mobile_number_error"></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label_h">Email Address</label>
                            <input type="email" class="form-control email" name="email" id="emailFormsubmit" data-class-name="emails"
                                placeholder="Enter Your Email">
                            <span class="error_class1 email_error"></span>
                        </div>


                        <div class="mb-4">
                            <label for="" class="form-label_h">What are looking for</label>
                            <input type="text" class="form-control purpose_of_enquery" name="purpose_of_enquery"  data-class-name="purpose_of_enquerys" id="purpose_of_enqueryFormsubmit" placeholder="Enter Your Subject">
                            <span class="error_class1 purpose_of_enquery_error"></span>
                        </div>
                        <div class="form-group mb-1">
                                {{--  {{ app('mathcaptcha')->reset(); }}  --}}
                                <label for="mathgroup">Please solve the following math function: {{ app('mathcaptcha')->label() }}</label>
                                {!! app('mathcaptcha')->input(['class' => 'form-control mathcaptchas', 'id' => 'mathgroup']) !!}
                                <span class="error_class mathcaptcha_errors"></span>
                            </div>

                      <div class="mb-4 coupon_otp_boxs" style="display: none;margin-top:5px;">
                            <label style="color: black;" class="form-label_h">Enter WhatsApp OTP</label>
                            <input type="number" name="otp" class="form-control  contactFormInp" id="otps"
                                autocomplete="off">
                            <input type="hidden" name="reachus_id" class="reachus_ids ritu" id="reachus_ids" value="" autocomplete="off">
							 <input type="hidden" name="receivedfrom_add" class="reachus_ids ritu" id="receivedfrom_addID" value="wigomania_main" autocomplete="off">
                            <span class="error_class otp_error"></span>
                        </div>
						<button type="submit" class="btn btn-dark home_form" id="sendOtpButtonwithoutotp" style="width:100% !important;">Send</button>
                        <!--<button type="submit" class="btn btn-dark home_form" id="sendOtpButton">Send OTP</button>
                        <button type="submit" class="btn btn-dark home_form ritu" id="verifyOtpButton">Verify OTP</button>-->

                    </form>
                </div>
            </div>
        </div>
    </section>
    @endif
    <div class="divider"></div>
<!-- Our Forte -->
<div class="container sections">
    <div class="text-center">
        <span class="titles">OUR FORTE</span>
        <!--<h1 style="text-align: justify;text-align: center">Wig-O-Mania One Stop UK Brand Hair Studio in India</h1>-->
        <h1 style="text-align: justify;text-align: center;font-size:2rem;">Wig-O-Mania UK Hair Brand Store - Wigs, Extensions, Closures & Toppers</h1>

        <p style="text-align: justify;">

           At Wig-O-Mania, we proudly present an extensive range of hair solutions, including <strong>Wigs, Hair Patches, Hair Extensions, Toppers, and Closures</strong>. Our expertise in <strong>non-surgical hair replacement is available for men in Chennai & hyderabad</strong>, offering a life like transformation.
		   Our offerings cater to diverse needs, from fashion-forward wigs to those seeking relief from hair loss caused by the <strong>after effects of chemotherapy</strong>. Discover our array of <strong>hair extensions, available in various lengths, colors, and textures, including Clip-on Extensions and semi-permanent options</strong>, to meet your unique style aspirations.

        </p>
    </div>
    <div class="row text-center" style="margin-top: 20px">
        <div class="col-lg-6" style="margin-top: 20px">
            <div class="card" id="sliderclick3">
                <div class="card-body">
                    <img class="shadow" style="border-radius: 15%; width:150px !important; height:auto !important;" src="https://wigomania.com/<?php echo $PageSetting->imageone;?>"
                         alt="Generic placeholder image" />

					<h5 class="mt-3" style="color: #ee4695;"><?php
					echo $PageSetting->headingone;
					?>
                    </h5>
					<?php
					echo $PageSetting->textone;
					?>
                    <p>
                        <a href="https://wigomania.com/product/hair-extensions" target="_blank"
                           class="btn link ViewDetails"
                           role="button">View details &raquo;</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6" style="margin-top: 20px">
            <div class="card" id="sliderclick2">
                <div class="card-body">
                    <img class="shadow" style="border-radius: 15%; width:150px !important;  height:auto !important;"
                         src="https://wigomania.com/<?php echo $PageSetting->imagetwo;?>"
                         alt="Generic placeholder image" />
                    <h5 class="mt-3" style="color: #ee4695;"><?php
					echo $PageSetting->headingtwo;
					?>
                    </h5>
					<?php
					echo $PageSetting->texttwo;
					?>
                    <p>
                        <a href="https://wigomania.com/product/ladies-wigs" target="_blank"
                           class="btn link ViewDetails"
                           role="button">View details &raquo;</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-lg-6" style="margin-top: 20px">
            <div class="card click1" style="height: 442px;">
                <div class="card-body">

                    <img id="sliderclick1" class="shadow" style="border-radius: 15%; width:150px !important;  height:auto !important;"
                         src="https://wigomania.com/<?php echo $PageSetting->imagethree;?>"
                         alt="Generic placeholder image" />
                    <h5 class="mt-3" style="color: #ee4695;"><?php
					echo $PageSetting->headingthree;
					?>
                    </h5>
					<?php
					echo $PageSetting->textthree;
					?>
                    <p>
                        <a href="https://wigomania.com/product/closures-toppers" target="_blank"
                           class="btn link ViewDetails"
                           role="button">View details &raquo;</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-6" style="margin-top: 20px">
            <div class="card">
                <div class="card-body">
                    <img id="sliderclick4" class="shadow" style="border-radius: 15%; width:150px !important;  height:auto !important;"
                         src="https://wigomania.com/<?php echo $PageSetting->imagefour;?>"
                         alt="Generic placeholder image" />
                    <h5 class="mt-3" style="color: #ee4695;"><?php
					echo $PageSetting->headingfour;
					?>
                    </h5>
					<?php
					echo $PageSetting->textfour;
					?>
                    <p>
                        <a href="https://wigomania.com/product/mens-wig" target="_blank"
                           class="btn link ViewDetails"
                           role="button">View details &raquo;</a>
                    </p>
                </div>
            </div>
        </div>
    </div></div>
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
            <div class="col-md-4">
                <div class="card review-block">
                    <div class="card-body">
                        <div class="review-image">
                            <span>{{ substr(ucwords(trim($review->name)),0,1) }}</span>
                        </div>
                        <!-- <?php
                    $str_len = strlen($review->description);
                    ?> -->
                        @if($str_len >= 180)
                        <p class="review-text" style="">{{Str::limit($review->description, 180) }}<button type="button"
                                class="modal_review" data-toggle="modal"
                                data-target="#exampleModalCenter{{ $rkey }}">Read
                                More </button></p>
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
                                        <p class="review-date">
                                            {{ Carbon\Carbon::parse($review->review_date)->format("d M, Y") }}</p>
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
                                <p class="review-date">
                                    {{ Carbon\Carbon::parse($review->review_date)->format("d M, Y") }}
                                </p>
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

	<?php
	//if (isMobileBrowser()) {

//} else {

?>
@if($Section4)
    <section class="forte-section_1" id="studio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="studio_subheading text-center">{{ $Section4->heading }}</h3>
                    <div class="studio_subheading text-center" style="text-align: center"> {!! $Section4->description
                        !!}
                    </div>

                    <a href="{{ $Section4->facebook ? $Section4->facebook : 'javascript:void(0);' }}" class="pink_a">
                        <h3 class="studio_subheading text-center"><i class="fa fa-facebook-square " aria-hidden="true"
                                style="color: #ee4695;"> </i> {{ $Section4->sub_heading }}</h3>
                    </a>

                    @if($Section4->youtube)
                    <p class="text-center mt=3">
                        <iframe title="Wigomania" width="760" class="mw-100" height="315" src="{{ $Section4->youtube }}"
                            title="YouTube video player" frameborder="0" allowfullscreen loading="lazy"></iframe>
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
                                        class="fa fa-facebook-square" aria-hidden="true"></i> Wigomania
                                    Chennai</a></span>
                            <span class="cara_fb"><a href="https://www.facebook.com/hairpieces4hairloss/"
                                    class="pink_a"><i class="fa fa-facebook-square" aria-hidden="true"></i> Hair Pieces
                                    for Hair
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
							<picture style="height: auto !important;
  width: 100% !important;">
    <source srcset="{{ asset($gallery->image) }}"
            media="(orientation: portrait)" style="height: auto !important;
  width: 100% !important;">
    <img src="{{ asset($gallery->image) }}" alt="Chennai" title="chennai studio"
                                    class="ca-img" loading="lazy" style="width: 100% !important;height: auto !important;">
	</source>
</picture>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                @if(isset($Section5->youtube))
                <div class="col-lg-4 mt-3">
                    <iframe title="Wigomania" width="100%" height="350" src="{{ $Section5->youtube }}"
                        title="YouTube video player" frameborder="0" allowfullscreen loading="lazy"></iframe>
                </div>
                @endif
                @if(isset($Section5->youtube))
                <div class="col-lg-5 mt-3">
                    {!! $Section5->location !!}
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
                            <h3 class="studio_subheading_hy">HYDERABAD</h3>
                        </div>
                        <div>
                            <span class="cara_fbb">
                                <a href="https://www.facebook.com/wigomaniahyderabad/" class="white_a">
                                    <i class="fa fa-facebook-square new_fb" aria-hidden="true"></i> Wigomania
                                    Hyderabad</a>
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
							<picture style="height: auto !important;
  width: 100% !important;">
    <source srcset="{{ asset($gallery->image) }}"
            media="(orientation: portrait)" style="height: auto !important;
  width: 100% !important;">
   <img src="{{ asset($gallery->image) }}" alt="Hyderabad" title="hyderabad studio"
                                    class="ca-img" loading="lazy" style="width: 100% !important;height: auto !important;">
	</source>
</picture>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                @if(isset($Section6->youtube))
                <div class="col-lg-4 mt-3">
                    <iframe title="Wigomania" width="100%" height="350" src="{{ $Section6->youtube }}"
                        title="YouTube video player" frameborder="0" allowfullscreen loading="lazy"></iframe>
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
                            {!!$Section6->address!!}</li>
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

	<section class="forte-section_3" id="coimbatore">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="ch_heading">
                        <div>
                            <h3 class="studio_subheading_hy">COIMBATORE</h3>
                        </div>
                        <div>
                            <span class="cara_fbb">
                                <a href="https://www.facebook.com/wigomaniahyderabad/" class="white_a">
                                    <i class="fa fa-facebook-square new_fb" aria-hidden="true"></i> Wigomania
                                    Hyderabad</a>
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
                    @if(count($Gallerycoimbatore) > 0)
                    <div class="home-demo">
                        <div class="owl-carousel owl-theme">
                            @foreach($Gallerycoimbatore as $key => $gallery)
                            <div class="item">
							<picture style="height: auto !important;
  width: 100% !important;">
    <source srcset="{{ asset($gallery->image) }}"
            media="(orientation: portrait)" style="height: auto !important;
  width: 100% !important;">
   <img src="{{ asset($gallery->image) }}" alt="Coimbatore" title="Coimbatore studio"
                                    class="ca-img" loading="lazy" style="width: 100% !important;height: auto !important;">
	</source>
</picture>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>

                <div class="col-lg-4 mt-3">
                    <iframe width="100%" height="350" src="https://www.youtube.com/embed/v-Xyd9b7TOY?si=VhsuiQKJMpiOch5V" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" loading="lazy"></iframe>
                </div>


                <div class="col-lg-5 mt-3">
					<img alt="Coimbatore" src="https://wigomania.com/image/cbemap.webp" class="page_speed_1157302408 page_speed_453078619" style="height:350px !important;">
                </div>

                <div class="col-lg-3 mt-3">
                    <ul class="ul-home">

                        <li class="li-home"><i class="fa fa-map-marker home-i" aria-hidden="true"></i>
                            Sheffield Towers, Lakshmi mills, 11/2, Bharathiyar Rd, Palayur, Pappanaickenpalayam, Coimbatore, Tamil Nadu 641037
						</li>


                        <li class="li-home"><i class="fa fa-phone home-i" aria-hidden="true"></i><a
                                href="tel:+919296255555" class="text-dark">
                                +91 9296255555</a></li>


                        <li class="li-home"><i class="fa fa-envelope-o home-i" aria-hidden="true"></i>
                            <a href="mailto:support@wigomania.com" class="text-dark"> support@wigomania.com</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php
//}
?>
@endsection
