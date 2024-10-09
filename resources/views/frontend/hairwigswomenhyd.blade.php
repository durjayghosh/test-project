    @extends('frontend.layouts.appadswomench')
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
.whywigomaniasection ul{
	text-align: left;
}
.forte-section_2 li.li-home{
	padding-top :5px !important;
}
.forte-section_2{
	padding-bottom:20px !important;
}
.imagelefside.secongimagetopper{
	margin-top:20px;
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
  max-height:29em;
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
	.secongimagetopper{
		margin-top:20px;
	}
	.landingsection .ladingleft h1{
		margin-top: 0px !important;
	}
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
		height:160px !important;
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
.landingsection .ladingleft h2{
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
.questionsforladieswigs{
	float: left;
    width: 100%;
    margin-top: 40px;
}
</style>

<section class="new-gallery-section-1 floatleftcls landingsection desktoplandingpage">				
		<div class="col-lg-8 gallery-col">
			<div class="gallery_para2 ladingleft">
				<h1 style="text-align: justify;text-align: center;margin-top;font-weight:700;color:#FFF;margin-bottom:20px;font-weight: 700;margin-top:20px;">Hair Wig for Women in Hyderabad</h1>
				<ul style="padding-left:15px;">
					<li>Wigomania provides high <strong>quality wigs for women</strong> that fits all heads easily.</li>
					<li>Instant solution for ladies who suffer from complete hair loss due to medical reasons such as <strong>Cancer, chemo and alopecia.</strong></li>
					<li>Best wigs for <strong>Cancer Patient</strong> suffering from partial or full baldness.</li>
					<li>Easy to maintain and use.</li>
				</ul>
				<p>Wig-O-Mania have introduced the latest in <strong>Lace Front Wigs.</strong></p>
				<p>These do not need tape or glue to hold it but its specially designed lace will hold the wig securely on the head.</strong></p>
				<p><strong>Lace front wigs are light and most versatile of all wig types</strong> – recommended for individuals with moderate, advanced or complete hair loss. This product is especially suited for individuals with hereditary hair loss or medical conditions such as cancer or alopecia.</p>
			</div>
			<div class="gallery_para2 landingright">
				<img src="https://wigomania.com/image/womenhairwignew.webp" class="landingiamge" loading="lazy" alt="...">
			</div>
		</div>
</section>

<section class="new-gallery-section-1 floatleftcls landingsection phonelandingpage">				
		<div class="col-lg-8 gallery-col">
			<div class="gallery_para2 ladingleft">
				<div class="gallery_para2 landingright">
					<img src="https://wigomania.com/image/womenhairwignew.webp" loading="lazy" class="landingiamge" alt="...">
				</div>
				<div class="questionsforladieswigs">
					<p>Are you experiencing <strong style="color:#ee4695;">hair loss, thin hair </strong> or looking to increase the volume of your hair due to conditions like <strong style="color:#ee4695;">scanty hair, chemo, cancer or alopecia?</strong></p>
					<div class="new-gallery-section-1 test forphone1 blinkbuttonpohne" id="blinkbutton1" style="background: #fff;">
						<div class="buttonStartegy loginbutton2" onclick="openpopup();">
							<button class="button">Book Free Demo & Consultation</button>
						</div>
				</div>
				</div>
				<h1 style="text-align: justify;text-align: center;margin-top;font-weight:700;color:#FFF;margin-bottom:20px;font-weight: 700;margin-top:20px;">Hair Wig for Women in Hyderabad</h1>
				<ul style="padding-left:25px;">
					<li>Wigomania provides high <strong>quality Hair wig for women</strong> that fits all heads easily.</li>
					<li>Instant solution for ladies who suffer from complete hair loss due to medical reasons such as <strong>Cancer, chemo and alopecia.</strong></li>
					<li>Best wigs for <strong>Cancer Patient</strong> suffering from partial or full baldness.</li>
					<li>Easy to maintain and use.</li>
				</ul>
				
				<h2 style="text-align: justify;text-align: center;margin-top;font-weight:700;color:#FFF;margin-bottom:20px;font-weight: 700;margin-top:20px;">Hair Toppers for thin hair</h2>
				<ul style="padding-left:25px;">
					<li>Wigomania provides <strong>high quality Toppers for women</strong> that fits all heads easily.</li>
					<li>It is best for women who are suffering from thin hair. </li>
					<li>Perfect for <strong>covering thin hair and adding volume.</strong></li>
					<li>Easy to use Clip-in application.</li>
					<li><strong>100% Premium human hair toppers, Lace Front Closure & Ladies toupee</strong></li>
					<li>Instant hair solution for ladies suffering from complete hair loss due to medical reasons such as cancer, chemo and alopecia.</li>
				</ul>
				
				<h2 style="text-align: justify;text-align: center;margin-top;font-weight:700;color:#FFF;margin-bottom:20px;font-weight: 700;margin-top:20px;">Wigs for Cancer Patient</h2>
				<p>Wig-O-Mania  also provides <strong>wigs for cancer patients</strong>. Our Wigs are an Instant solution for ladies who suffer from complete hair loss due to medical reasons such as Cancer, Chemo and Alopecia. A wig not only gives you an original look but also makes her feel comfortable wearing it. Our products are an instant fix without risk of itch or allergy. Our wigs are cap type hence easy to wear and remove. our products are easy to wear and simple to maintain.</p>
				
			</div>
			
		</div>
</section>

<section class="new-gallery-section-1 test forphone1 desktopbuttonblink floatleftcls" id="blinkbutton" style="background: #fff;">
		<div class="buttonStartegy loginbutton2" onclick="openpopup();">
			<button class="button">Book Free Demo & Consultation</button>
		</div>
</section>
      @if($Section1)
		  
	
	
	<section class="new-gallery-section-1 videoforbboth forphone " id="second">
			<div class="row gallery_category">
				<div class="col-lg-8 gallery-col">
					<div class="gallery_para2">
						
						<div class="col-lg-4" style="text-align: center;">
							<div class="video-container" onclick="loadVideo(this)">
								<img src="https://wigomania.com/storage/gallery/womenwigs.webp" loading="lazy" alt="Video thumbnail">
								<i class="fa fa fa-youtube-play" style="color: red;position: absolute;left: 0;    right: 35px;top: -8%;bottom: 0;margin: auto;font-size: 50px;width: 32px;height: 32px;" aria-hidden="true"></i>
							</div>
						</div>
						
					</div>
				</div>
	</section>
		  
    <section class="coupon-section floatleftcls" id="coupon-sectionID">
        <div class="container">
            <div class="col-md-12 review-header">
                <h1 style="text-align: justify;text-align: center;margin-top;font-weight:700;color:#FFF;margin-bottom:40px;font-weight: 700;color: #ee4695;">Don’t Miss Out:Book Free Demo & Consultation!</h1>                
            </div>
            <div class="row">
			<div class="col-md-7 coupon-left">
                    <span>
					<picture style="height: auto !important;width: 100% !important;">
						<source loading="lazy" srcset="https://www.wigomania.com/storage/image/Ladies-Wig-02.webp" media="(orientation: portrait)" style="height: auto !important;width: 100% !important;">
						<img src="https://www.wigomania.com/image/Ladies-Wig-02.webp" alt="" style="height: auto !important;width: 100% !important;">
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
						<div class="form-group mb-4">
                                {{--  {{ app('mathcaptcha')->reset(); }}  --}}
                                <label for="mathgroup" class="form-label_h">Please solve the following math function: {{ app('mathcaptcha')->label() }}</label>
                                {!! app('mathcaptcha')->input(['class' => 'form-control mathcaptchas', 'id' => 'mathgroup']) !!}
                                <span class="error_class mathcaptcha_errors"></span>
                         </div>

						<div class="mb-4 coupon_otp_boxs" style="display: none;margin-top:5px;">
                            <label style="color: black;" class="form-label_h">Enter WhatsApp OTP</label>
                            <input type="number" name="otp" class="form-control  contactFormInp" id="otps"
                                autocomplete="off">
                            <input type="hidden" name="reachus_id" class="reachus_ids ritu" id="reachus_ids" value="" autocomplete="off">
                            <input type="hidden" name="receivedfrom_add" class="reachus_ids ritu" id="receivedfrom_addID" value="Hair_Wigs_for_women_in_Hyderabad" autocomplete="off">
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
			<h2 style="text-align: justify;text-align: center;margin-top;font-weight:700;color:#ee4695;margin-bottom:10px;">Why choose Wig-O-Mania <br/>Hair Wig for women?</h2>
			<p style="text-align: justify;">
				At Wig-O-Mania, we understand that hair loss can impact your confidence and self-esteem. That’s why we offer a range of <strong>high-quality wigs for women, Hair toppers for women</strong> that are designed to look and feel natural, providing you with an instant solution to hair loss. Here’s why Wig-O-Mania is the right choice for your hair restoration needs:
			</p>
		</div>
		<ul style="padding-left:25px !important;">
			<li>Discover <strong>Wig-O-Mania's non-surgical hair replacement solution for women </strong>no scars, no pain, and zero side effects.</li>
			<li>Achieve <strong>100% natural-looking results</strong> with an instant solution for hair loss.</li>
			<li>Wig-O-Mania wigs are designed to look and feel completely natural, offering the confidence you deserve.</li>
			<li>Personalized wig bases are tailored to each woman's needs, precisely matching the color, texture, and density of your existing hair.</li>
			<li>Ideal for women of all ages experiencing hair loss.</li>
			<li>Enjoy a customized wig that perfectly matches your unique requirements, ensuring a seamless blend with your natural hair.</li>
		</ul>
		<div>
		</div>
	</div>
</div>
<section class="review-section fort new-class-product TransformationDiv" style="border-bottom:none !important;background:#ee4695;font-weight: 700;">
	<h2 style="color:#fff;padding-top: 20px;padding-bottom: 20px;">Before & After Transformation</h2>
    <div class="">
		<div class="imagelefside"><img loading="lazy" src="https://wigomania.com/image/beforeafterchladieswomen.webp" class="beforeafer" alt="..."></div>
		<div class="imagelefside secongimagetopper"><img loading="lazy" src="https://wigomania.com/image/topperbeforeafter.webp" class="beforeafer" alt="..."></div>
    </div>
</section>

<section class="new-gallery-section-1 test forphone1 floatleftcls btn2" id="blinkbutton3" style="background: #fff;">
	<div class="buttonStartegy loginbutton2" onclick="openpopup();">
		<button class="button">Book Free Demo & Consultation</button>
	</div>
</section>
<section class="faq floatleftcls" style="margin-top:0px !important;">
<div class="container">
      <h2 class="faqclas">FAQ</h2>
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Is Ladies Wig Safe?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Yes, ladies' wigs are completely safe. At Wig-O-Mania, our wigs are made from high-quality materials that are gentle on the scalp and skin. They are designed to be breathable, lightweight, and comfortable, ensuring that your natural hair and scalp remain healthy. Additionally, we offer wigs that are free from harmful chemicals, making them safe for long-term use, even for those with sensitive skin or undergoing medical treatments. Whether you're looking to cover hair loss or simply change your style, our wigs provide a safe and stylish solution.

            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false" >
            <span class="accordion-title">What is the Difference Between a Ladies Wig and a Ladies Patch?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              <strong>Ladies Wig:</strong> A full ladies wig covers the entire head, offering a complete transformation of your hair. It is ideal for those experiencing significant hair loss, thinning, or simply wanting a new look without altering their natural hair. Wigs come in various styles, lengths, and colors, providing a versatile option for a full head of hair.
            </p>
			<p>
              <strong>Ladies Patch:</strong> A ladies patch, also known as a hair topper or hairpiece, is designed to cover specific areas of hair loss or thinning, typically at the crown or top of the head. It seamlessly blends with your existing hair, offering a natural and subtle enhancement without the need for a full wig. Hair patches are a great option for those with localized hair loss who want to add volume and coverage in specific areas.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title">Can I Wear a Wig Even If I'm Not a Cancer Patient?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Absolutely! Wigs are for everyone, regardless of your health status. Whether you want to change your hairstyle, add volume, experiment with different looks, or cover up thinning hair, wigs offer a versatile solution. At Wig-O-Mania, we have a wide range of wigs designed to meet various style preferences and needs, so you can enjoy the benefits of a new look without any permanent changes.
            </p>
          </div>
        </div>
		<div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title">Are Ladies' Wigs Permanent?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
             No, ladies' wigs are not permanent. They are designed to be a temporary, removable solution that you can wear and take off as needed. Wigs offer the flexibility to change your hairstyle or cover hair loss without committing to permanent changes. They can be worn daily or occasionally, depending on your preference. At Wig-O-Mania, our wigs are crafted for easy application and removal, allowing you to enjoy different styles without any long-term commitment.
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
                            <h3 class="studio_subheading_ch">HYDERABAD</h3>
                        </div>
                        <div>
                            <span class="cara_fb"><a href="https://www.facebook.com/wigomaniahyderabad/" class="pink_a"><i
                                        class="fa fa-facebook-square" aria-hidden="true"></i> Wigomania
                                    Hyderabad</a></span>
                            
                        </div>
                    </div>
                    @if(count($GalleryHyderabad) > 0)
                    <div class="home-demo">
                        <div class="owl-carousel owl-theme">
                            @foreach($GalleryHyderabad as $key => $gallery)
                            <div class="item">
							<picture style="height: auto !important;width: 100% !important;">
							<source srcset="{{ asset($gallery->image) }}" 
									media="(orientation: portrait)" style="height: auto !important;
						  width: 100% !important;">
							<img src="{{ asset($gallery->image) }}" alt="Hyderabad" title="Hyderabad studio"
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
               
                <div class="col-lg-3">
                    <ul class="ul-home">
                        @if($Section6->address)
                        <li class="li-home text-light">
                            {!! $Section6->address !!}
                        </li>
                        @endif
                        @if($Section6->phone)
                        <li class="li-home"><i class="fa fa-phone text-light" aria-hidden="true"></i><a
                                href="tel:+91{{ $Section6->phone }}" class="text-light">
                                +91 {{ $Section6->phone }}</a>
                        </li>
                        @endif
                        @if($Section6->email)
                        <li class="li-home" style="padding-bottom: 60px;"><i class="fa fa-envelope-o text-light" aria-hidden="true"></i>
                            <a href="mailto:{{ $Section6->email }}" class="text-light">{{ $Section6->email }}</a>
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
	