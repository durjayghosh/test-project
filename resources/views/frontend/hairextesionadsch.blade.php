    @extends('frontend.layouts.appadsextension')
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
.formfield label{
	font-size:14px !important;
	color:#000 !important;
	width:100% !important;
}
.formfield input{
	width:100% !important;
}
.forte-section_2 li.li-home{
	padding-top :5px !important;
}
.forte-section_2{
	padding-bottom:20px !important;
}
.faqclas{
	text-align: center;
    font-weight: 700;
    color: #ee4695;
    margin-bottom: 10px;
}
section.review-section.fort.new-class-product.TransformationDiv{
	padding: 40px;
	text-align: center;
	width: 100%;
    float: left;
}
.accordion .accordion-item {
  border-bottom: 1px solid #e5e5e5;
}
.accordion .accordion-item button[aria-expanded='true'] {
  border-bottom:1px solid #ee4695;
}
.floatleftcls{
	float:left;
	width:100%;
}
.accordion button {
  position: relative;
  display: block;
  text-align: left;
  width: 100%;
  padding: 1em 0;
  color: #7288a2;
  font-size: 1.15rem;
  font-weight: 400;
  border: none;
  background: none;
  outline: none;
}

.accordion button:hover,
.accordion button:focus {
  cursor: pointer;
  color: #ee4695;
}

.accordion button:hover::after,
.accordion button:focus::after {
  cursor: pointer;
  color: #ee4695;
  border: 1px solid #03b5d2;
}

.accordion button .accordion-title {
  padding: 1em 1.5em 1em 0;
}
.accordion-item button{
	padding-left: 20px;
    padding-right: 20px;
}
.faq{
	padding: 20px 0px 20px 0px;

}
.review-header h2{
	margin-bottom:0px !important; 
}
.accordion button .icon {
  display: inline-block;
  position: absolute;
  top: 18px;
  right: 20px;
  width: 22px;
  height: 22px;
  border: 1px solid;
  border-radius: 22px;
}

.accordion button .icon::before {
  display: block;
  position: absolute;
  content: '';
  top: 9px;
  left: 5px;
  width: 10px;
  height: 2px;
  background: currentColor;
}
.accordion button .icon::after {
  display: block;
  position: absolute;
  content: '';
  top: 5px;
  left: 9px;
  width: 2px;
  height: 10px;
  background: currentColor;
}

.accordion button[aria-expanded='true'] {
  color:#ee4695;
}
.accordion button[aria-expanded='true'] .icon::after {
  width: 0;
}
.accordion button[aria-expanded='true'] + .accordion-content {
  opacity: 1;
  max-height:38em;
  transition: all 200ms linear;
  will-change: opacity, max-height;
}
.accordion .accordion-content {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  transition: opacity 200ms linear, max-height 200ms linear;
  will-change: opacity, max-height;
}
.accordion .accordion-content p {
  font-size: 1rem;
  font-weight: 300;
  margin: 2em 0;
  padding-left: 20px;
   padding-right: 20px;
}
#blinkbutton button,#blinkbutton3 button{
    background-color: #ee4695;
	width:500px;
    border: none;
    color: white;
    padding: 15px 10px 15px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
    text-transform: uppercase;
    font-family: 'Inter', sans-serif !important;
    font-weight: 700;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-name: pulse;
    animation-name: pulse;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
#blinkbutton,#blinkbutton3{
	text-align:center;
	padding-top: 20px !important;
    padding-bottom: 20px !important;	
}
.new-gallery-section-1.forphone{
	background: #fff;
    color: #000;
    float: left;
    width: 100%;
    padding-top: 50px !important;
    padding-bottom: 50px !important;
}
.new-gallery-section-1.fordesktop{
	padding-top: 0px !important;
	background:#fff;
	color:#000;
}
.new-gallery-section-1.fordesktop .gallery_para2 p{
	color:#000 !important;
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
.new-gallery-section-1{
	margin-top:0px !important;
}
.desktoplandingpage{
	margin-top:30px !important;
}
.forphone{
	display:none;
}
.beforeafer{
	height:700px;
}

.phoneheader{
	display:none !important;
}
.desktopheader{
	display:block !important;
}
button.btn.btn-dark.home_form{
	width:100% !important;
}
@media only screen and (max-width: 568px) {
	.accordion .accordion-content p,.accordion button{
		font-size:16px !important;
	}
	.accordion-item:not(:first-of-type){
		border-top: 1px solid rgba(0, 0, 0, .125);
	}
	.gallery_para2 p{
		font-size:16px !important;
	}
	.whywigomaniasection ul{
		font-size: 16px !important;
	}
	.whywigomaniasection p{
		font-size: 16px !important;
	}
	.landingsection .gallery_para2 ul{
		font-size:16px !important;
	}
	.review-text-1{
		font-size:16px !important;
	}
	#blinkbutton button, #blinkbutton3 button{
		width:auto;
	}
	.headerforphone{
		display:block;
	}
	.headerfordesktop{
		display:none;
	}
	.phoneheader{
		display:block !important;
	}
	.desktopheader{
		display:none !important;
	}
	.videoforbboth.forphone{
		display:block !important;
	}
	#coupon-sectionID h1{
		margin-bottom:0px !important;
	}
	.leftH{
		width:20% !important;
	}
	
	.centerH{
		width:45% !important;
		text-align:left !important;
		font-size:12px !important;
	}
	#blinkbutton{
		padding-top:0px !important;
	}
	#blinkbutton3{
		padding-top:20p !important;
	}
	.whywigomaniasection ul{
		font-size: 18px;
	}
	#blinkbutton1 button{
		background-color: #ee4695;
		border: none;
		color: white;
		padding: 15px 10px 15px 10px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 15px;
		margin: 4px 2px;
		cursor: pointer;
		border-radius: 5px;
		text-transform: uppercase;
		font-family: 'Inter', sans-serif !important;
		font-weight: 700;
		-webkit-animation-iteration-count: infinite;
		animation-iteration-count: infinite;
		-webkit-animation-name: pulse;
		animation-name: pulse;
		-webkit-animation-timing-function: ease-in-out;
		animation-timing-function: ease-in-out;
		-webkit-animation-duration: 1s;
		animation-duration: 1s;
		-webkit-animation-duration: 1s;
		animation-duration: 1s;
		-webkit-animation-fill-mode: both;
		animation-fill-mode: both;
	}
	.landingsection .gallery_para2.landingright img {
		height:240px !important;
	}
	.landingsection .gallery_para2.ladingleft{
		width: 100% !important;
		margin-top:20px;
	}
	.landingsection .gallery_para2.landingright{
		width: 100% !important;
		margin-top: 70px;
	}
	section.review-section.fort.new-class-product.TransformationDiv{
		padding-bottom: 60px !important;
	}
	.mobileview23 {
        display: block !important;
        position: absolute;
        right: 20px;
        margin: auto;
        text-align: right;
        top: 20px;
        z-index: 9999;
        width: 50%;
    }
	.header-cont-info1 li {
        margin-bottom: 0;
		list-style: none;
    }
	.header-cont-info {
        display: none;
    }
	.header-cont-info1 a {
        display: inline-block;
        color: #fff;
        padding: 2px 7px;
        border-radius: 4px;
        font-weight: 400;
        background:#ee4695;
        font-size: 13px;
    }
 .mainmenuAdsheader .col-md-2{
	width: 40%;
    float: left;
 }
 .mainmenuAdsheader .col-md-10{
	width: 60%;
    float: right;
 }
  .forphone{
	display:block;
  }
  .headerphoneads{
	  display:none;
  }
  .fordesktop{
	display:none;
  }
	.beforeafer{
		height:auto;
	}
	.phonelandingpage{
		display: block !important;
	}
	.desktoplandingpage{
		display:none;
	}
	
	.new-gallery-section-1.blinkbuttonpohne{
		text-align: center;
		padding-top: 0px !important;
		padding-bottom: 20px !important;
	}
	.blinkbuttonpohne button{
		width:100% !important;
	}
	.landingsection{
		margin-bottom:0px !important;
	}
	.whywigomaniasection p{
		line-height: 25px;
		text-align: justify !important;
		    font-size: 18px;
	}
}

.landingsection{
	padding-bottom: 0px !important;
	background:#fff;
}
.landingsection .ladingleft h1{
	color: #ee4695;
    margin-bottom: 20px;
    font-weight: 700;
    margin-top: 20px;
	text-align: center;
	float: left;
    width: 100%;
}
.landingsection .gallery-col{
	flaot:left;
	width:100%;
}
.landingsection .gallery_para2.ladingleft{
	float: left;
    width: 50%;
}
.landingsection .gallery_para2.landingright{
	float: left;
    width: 50%;
	text-align:center;
}
.landingsection .gallery_para2.landingright img{
	height:500px;
	width:90%;
}
.landingsection .gallery_para2 li{
	color: #000;
}
.videosectioninlandhingpage{
	text-align:center;
}
.landingsection .gallery_para2 p{
	color:#000 !important;
}
.landingsection .gallery_para2 ul{
	font-size:18px;
}
.gallery_para2 p{
	font-size:18px;
}
.phonelandingpage{
	display:none;
}
.whywigomaniasection{
	margin-bottom: 40px;
}
.videoforbboth.forphone{
	display:none;
}
.whywigomaniasection{
	font-size: 18px;
    line-height: 25px;
    text-align: justify !important
}
.whywigomaniasection p{
	font-size: 18px;
    line-height: 25px;
    text-align: justify !important
}
.headerdesign{
	display: flex;
    justify-content: space-between;
    align-items: center;
}
.leftH{
	width: 30%;
	text-align: left;
}
.rightH{
	width: 30%;
	text-align: right;
}
.centerH{
	width: 30%;
	text-align: center;
}
</style>

<section class="new-gallery-section-1 floatleftcls landingsection desktoplandingpage">				
		<div class="col-lg-8 gallery-col">
			<div class="gallery_para2 ladingleft">
				<h1 style="text-align: justify;text-align: center;margin-top;font-weight:700;color:#FFF;margin-bottom:20px;font-weight: 700;margin-top:20px;">Hair Extensions for women</h1>
				<ul style="padding-left:15px;">
					<li>Wigomania provides <strong>high quality hair extensions for women.</strong></li>
					<li>Instant solution for ladies who wants to add length and volume own hair.</li>
					<li>Made from 100% human hair.</li>
					<li>Easy to wear and maintain.</li>
				</ul>
				<p>Wig-O-Mania have variety of hair extensions in  various lengths, size, colour  and texture. There are many different types of hair extensions available, the most popular types being <strong>clip in hair extensions, fusion skin weft hair extensions, keratin nail tip extensions and micro loop hair extensions</strong>.</p>
				<ul style="list-style: auto;padding-left:15px;">
					<li>Instant Transformation</li>
					<li>Versatile Color Options</li>
					<li>Trial Run for Long Hair</li>
					<li>Seamless Blend</li>
					<li>100% Remy Human Hair</li>
					<li>Lightweight Strands</li>
					<li>Tangle-Free</li>
				</ul>
			</div>
			<div class="gallery_para2 landingright">
				<img src="https://wigomania.com/image/hairextensionimage.webp" loading="lazy" class="landingiamge" alt="...">
			</div>
		</div>
</section>

<section class="new-gallery-section-1 floatleftcls landingsection phonelandingpage">				
		<div class="col-lg-8 gallery-col">
			<div class="gallery_para2 ladingleft">
				<div class="gallery_para2 landingright">
					<img src="https://wigomania.com/image/hairextensionimage.webp" loading="lazy" class="landingiamge" alt="...">
				</div>
				<h1 style="text-align: justify;text-align: center;margin-top;font-weight:700;color:#FFF;margin-bottom:20px;font-weight: 700;margin-top:20px;">Hair Extensions for women</h1>
				<ul style="padding-left:15px;">
					<li>Wigomania provides <strong>high quality hair extensions for women.</strong></li>
					<li>Instant solution for ladies who wants to add length and volume own hair.</li>
					<li>Made from 100% human hair.</li>
					<li>Easy to wear and maintain.</li>
				</ul>
				<div class="new-gallery-section-1 test forphone1 blinkbuttonpohne" id="blinkbutton1" style="background: #fff;">
						<div class="buttonStartegy loginbutton2" onclick="openpopup();">
							<button class="button">Book Free Demo & Consultation <br/>  15% Discount on MRP</button>
						</div>
				</div>
				<p>Wig-O-Mania have variety of hair extensions in  various lengths, size, colour  and texture. There are many different types of hair extensions available, the most popular types being <strong>clip in hair extensions, fusion skin weft hair extensions, keratin nail tip extensions and micro loop hair extensions</strong>.</p>
				<ul style="list-style: auto;padding-left:15px;">
					<li>Instant Transformation</li>
					<li>Versatile Color Options</li>
					<li>Trial Run for Long Hair</li>
					<li>Seamless Blend</li>
					<li>100% Remy Human Hair</li>
					<li>Lightweight Strands</li>
					<li>Tangle-Free</li>
				</ul>
			</div>
			
		</div>
</section>

<section class="new-gallery-section-1 test forphone1 desktopbuttonblink floatleftcls" id="blinkbutton" style="background: #fff;">
		<div class="buttonStartegy loginbutton2" onclick="openpopup();">
			<button class="button">Book Free Demo & Consultation <br/>  15% Discount on MRP</button>
		</div>
</section>
      @if($Section1)
		  
	
	
	<section class="new-gallery-section-1 videoforbboth forphone" id="second">
			<div class="row gallery_category">
				<div class="col-lg-8 gallery-col">
					<div class="gallery_para2">
						
						<div class="col-lg-4" style="text-align: center;">
							<div class="video-container" onclick="loadVideo(this)">
								<img src="https://wigomania.com/image/HairExtensionsvideoimage.webp" loading="lazy" alt="Video thumbnail">
								<i class="fa fa fa-youtube-play" style="color: red;position: absolute;left: 0;    right: 35px;top: -8%;bottom: 0;margin: auto;font-size: 50px;width: 32px;height: 32px;" aria-hidden="true"></i>
							</div>
						</div>
						
					</div>
				</div>
	</section>
		  
    <section class="coupon-section floatleftcls" id="coupon-sectionID">
        <div class="container">
            <div class="col-md-12 review-header">
                <h1 style="text-align: justify;text-align: center;margin-top;font-weight:700;color:#FFF;margin-bottom:40px;font-weight: 700;color: #ee4695;">Don’t Miss Out: Get 15% Off on MRP + Free Demo & Consultation!</h1>                
            </div>
            <div class="row">
			<div class="col-md-7 coupon-left">
                    <span>
					<picture style="height: auto !important;width: 100% !important;">
						<source loading="lazy" srcset="https://www.wigomania.com/image/hairextenisonbanner.webp" media="(orientation: portrait)" style="height: auto !important;width: 100% !important;">
						<img src="https://www.wigomania.com/image/hairextenisonbanner.webp" alt="" style="height: auto !important;width: 100% !important;">
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

                        <div class="">
                            <label for="" class="form-label_h">What are looking for</label>
                            <input type="text" class="form-control purpose_of_enquery" name="purpose_of_enquery"  data-class-name="purpose_of_enquerys" id="purpose_of_enqueryFormsubmit" placeholder="Enter Your Subject">
                            <span class="error_class1 purpose_of_enquery_error"></span>
                        </div>
                       
						<div class="formfield mb-4">
                                {{--  {{ app('mathcaptcha')->reset(); }}  --}}
                                <label for="mathgroup" class="form-label_h">Please solve the following math function: {{ app('mathcaptcha')->label() }}</label>
                                {!! app('mathcaptcha')->input(['class' => 'mathcaptchas form-control', 'id' => 'mathgroup']) !!}
                                <span class="error_class mathcaptcha_errors"></span>
                        </div>
						<div class="mb-4 coupon_otp_boxs" style="display: none;margin-top:5px;">
                            <label style="color: black;" class="form-label_h">Enter WhatsApp OTP</label>
                            <input type="number" name="otp" class="form-control  contactFormInp" id="otps"
                                autocomplete="off">
                            <input type="hidden" name="reachus_id" class="reachus_ids ritu" id="reachus_ids" value="" autocomplete="off">
                            <input type="hidden" name="receivedfrom_add" class="reachus_ids ritu" id="receivedfrom_addID" value="extension_ads" autocomplete="off">
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
<!-- Our Forte -->
<div class="sections floatleftcls whywigomaniasection">
	<div class="container">
    <div class="text-center">
        <h2 style="text-align: justify;text-align: center;margin-top;font-weight:700;color:#ee4695;margin-bottom:10px;">Why choose Wig-O-Mania <br/>Hair Extensions for women?</h2>
        <p style="text-align: justify;">
            Wig-O-Mania is a UK hair  brand that provides  premium-quality hair extensions that transform your look with ease and elegance. Here’s why Wig-O-Mania should be first choice for hair extensions:
        </p>
    </div>
    <ul style="padding-left:25px !important;">
		<li><strong>Superior Quality:</strong></li>
		<p>At Wig-O-Mania, we use only the finest human hair and top-grade synthetic fibers to craft our extensions. This ensures that our hair extensions not only look natural but also feel soft, luxurious, and blend seamlessly with your natural hair.</p>
		<li><strong>Wide Range of Options:</strong></li>
		<p>Whether you’re looking for added length, volume, or both, Wig-O-Mania offers an extensive range of hair extensions to meet your specific needs. From clip-ins and tape-ins to fusion and micro-link extensions, we have options to suit every style and occasion.</p>
		<li><strong>Customization:</strong></li>
		<p>We understand that every individual’s hair is unique. That’s why Wig-O-Mania provides customizable solutions, allowing you to choose the perfect color, length, and texture to match your natural hair. Our experts are always available to help you find the ideal extensions for your look.</p>
		<li><strong>Long-Lasting and Durable:</strong></li>
		<p>In principle both options are possible, but require special knowledge. We use Remy hair which is first bleached and then dyed to achieve the desired colour. While bleaching or lighter colouring is not possible, darker colour washes or dying is. During a perm, in particular, it is crucial that the treatment is performed only by a specialist who understands that the extensions have already been bleached and heavily processed.</p>
	</ul>
	</div>
</div>
<section class="review-section fort new-class-product TransformationDiv" style="border-bottom:none !important;background:#ee4695;font-weight: 700;">
	<h2 style="color:#fff;padding-top: 20px;padding-bottom: 20px;">Before & After Transformation</h2>
    <div class="">
		<div class="imagelefside"><img loading="lazy" src="https://wigomania.com/image/befroreAFterext.webp" class="beforeafer" alt="..."></div>
    </div>
</section>

<section class="new-gallery-section-1 test forphone1 floatleftcls btn2" id="blinkbutton3" style="background: #fff;">
	<div class="buttonStartegy loginbutton2" onclick="openpopup();">
		<button class="button">Book Free Demo & Consultation <br/>  15% Discount on MRP</button>
	</div>
</section>
<section class="faq floatleftcls" style="margin-top:0px !important;">
<div class="container">
      <h2 class="faqclas">FAQ</h2>
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Are hair extensions heavy?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
            Hair extensions’s weight mainly depends on the nature of hair use, length and volume of the hairs. Human hair extensions minimum required to change the look is around 75 to 100 gms. That weight is not going to put any extra weightage. The clip which is an attachment point, being new, puts a feeling of pressure. Normally if someone uses an extension for 3 to 4 hours, do not feel heavy. Longer hours of use or more than 250gm of hair extensions may feel so, though. Synthetic hair extensions are usually heavier than the human hair extensions and in comparison, definitely feel heavy.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false" >
            <span class="accordion-title">Can I colour Luscious Locks Skin Wefts Extensions of Wig-O-Mania or get a perm?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
				In principle both options are possible, but require special knowledge. We use Remy hair which is first bleached and then dyed to achieve the desired colour. While bleaching or lighter colouring is not possible, darker colour washes or dying is. During a perm, in particular, it is crucial that the treatment is performed only by a specialist who understands that the extensions have already been bleached and heavily processed.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title">Do clip in extensions damage hair? Are hair extensions bad for your hair?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              No. Clip on hair extensions are attached to your hair. It is recommended that you can choose the hair extensions as long as you want in a day, but it is to be removed once your occasion / function is over or the purpose is solved. If you are going to use hair extensions daily / regularly, then it is advisable to change the position of the clips by half an inch every 2-3 months. So that there would be no additional weight put on the same hairs. If you follow this practice there would be no damage possible to your existing hairs.
            </p>
          </div>
        </div>
		<div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title">How often can Luscious Locks Skin Wefts Extensions of Wig-O-Mania be reused?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
             The extensions can be reused approx. two or three times depending upon the level of care. The more care, the longer the hair extension remains healthy, shiny and fit for use. The splice can be cleaned and renewed without limit again and again. 
            </p>
          </div>
        </div>
		
      </div>
    </div>
</section> 

	@if($Section3)
    <section class="review-section new-review-section floatleftcls" id="reviewSection">
        <div class="row">
            <div class="col-md-12 review-header">
                <div class="col-md-12 " bis_skin_checked="1">
                <p>Customer Reviews</p>
                <h2>What The People Think About Us</h2>
            </div>
            </div>
            <div class="col-lg-12">
                @foreach($Reviews as $review)
                <div class="review-div mt-3">

                    <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                        @if($review->rating > 0)
                        @for($i = 1; $i < $review->rating; $i++)
                            <i class="fa fa-star" aria-hidden="true"></i>
                            @endfor
                            @endif
                    </p>
                    <p class="review-name-1">{{ ucwords(trim($review->name)) }}</p>
                    <p class="review-text-1">{!!$review->description !!}</p>
                    <p class="review-date-1">{{ date_format($review->created_at, 'M d, Y' )}}</p>
                </div>
                @endforeach

            </div>
            
        </div>
    </section>
    @endif
  
	
	
    <section class="forte-section_2 floatleftcls" id="Chennai">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
               
                <div class="col-lg-3">
                    <ul class="ul-home">
                        @if($Section5->address)
                        <li class="li-home text-light">
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
                        <li class="li-home" style="padding-bottom: 60px;"><i class="fa fa-envelope-o text-light" aria-hidden="true"></i>
                            <a href="mailto:{{ $Section5->email }}" class="text-light">{{ $Section5->email }}</a>
                        </li>
                        @endif
                    </ul>
                </div>
				
            </div>
        </div>
    </section>
	
<?php
//}
?>
@endsection
	