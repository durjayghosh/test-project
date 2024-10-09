<header class="regular-header sticky_gallery">
@section('content')
    @php

    use App\Models\ {ProductCategory};
       
$ProductCategory = ProductCategory::get();
       
    @endphp
   <div class="annonecemrbnt">
        <h1 id="nav-title">Wig-O-Mania collaboration with BlueSky Nail Academy</h1>
        <div class="annonecemrbntinner">
            <span class="text1">blueskyacademy.hyd@wigomania.co.uk</span>
			<span class="text2">+91 96186 07865</span>
        </div>
    </div>
	<div class="annonecemrbnt MOBILEANNOUNCEMNETBAR">
        <h1 id="nav-title">Wig-O-Mania collaboration with BlueSky Nail Academy</h1>
        <div class="annonecemrbntinner">
            <a class="text1" target="_blank" href="mailto:blueskyacademy.hyd@wigomania.co.uk"><i class="fa fa-envelope" aria-hidden="true"></i>blueskyacademy.hyd@gmail.com</a>
			<a class="text2" href="tel:+919618607865" target="_blank"><i class="fa-solid fa-phone"></i>+91 96186 07865</a>
        </div>
    </div>
	<div class="hamburger-menu">
        <div class="bar"></div>	
		 <div class="imglogo">
				<img width="680" height="560" style="max-width:100%;width:100%;height:auto" src="{{asset('image/blueskypics/logomain.webp')}}" class="attachment-large size-large wp-image-2792" alt="Logo image 1" title="Logo Image 1" srcset="{{asset('image/blueskypics/logomain.webp')}}">
		</div>
    </div>
	<nav class="mobile-menu" id="sidebarContainer">
        <ul class="">
                    <li class="nav-item" onclick="hideSidebar('home');">
                        <a class="nav-link behind-brand" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item menu-item" onclick="hideSidebar('aboutus');">
                        <a class="nav-link goto-review aboutus">About Us</a>
                    </li>
                    <li class="nav-item" onclick="hideSidebar('Courses');">
                        <a class="nav-link goto-review Courses">Courses</a>
                    </li>
                    
                    <li class="nav-item" onclick="hideSidebar('Gallery');">
                        <a class="nav-link Gallery">Gallery</a>
                    </li>
                    <li class="nav-item" onclick="hideSidebar('Contactus');">
                        <a class="nav-link Contactus">Contact Us</a>
                    </li>
					 <li class="nav-item" onclick="hideSidebar('Wig-O-Mania');">
                        <a class="nav-link behind-brand" aria-current="page" >Wig-O-Mania</a>
                    </li>
                </ul>
    </nav>
    <nav class="navmenus">
        <div class="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars new_menu" aria-hidden="true"></i></span>
            </button>
			
            <div class="" id="navbarCollapse">
                <ul class="">
                    <li class="nav-item">
                        <a class="nav-link behind-brand" aria-current="page" href="https://wigomania.com/blueskynailacademy.hyderabad">Home</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link goto-review aboutus" href="https://wigomania.com/blueskynailacademy.hyderabad#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link goto-review Courses" href="https://wigomania.com/blueskynailacademy.hyderabad#Courses">Courses</a>
                    </li>
                    <li class="nav-item" style="width:12%;height:auto;">
                        <img width="680" height="560" style="max-width:100%;width:100%;height:auto" src="{{asset('image/blueskypics/logomain.webp')}}" class="attachment-large size-large wp-image-2792" alt="Logomain Image 3" title="Logo Image 3">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link Gallery" href="https://wigomania.com/blueskynailacademy.hyderabad#Gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link Contactus" href="https://wigomania.com/blueskynailacademy.hyderabad#Contactus">Contact Us</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link behind-brand" aria-current="page" href="https://wigomania.com/">Wig-O-Mania</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="popup" id="popup" style="display: none;">
    <div class="center_popup">
        <div class="popupscreen">
            <span class="closePop closeForm" onclick="closePop();">
            <img alt="closepopup" src="{{asset('image/closePop.png')}}" class="lazyloaded" data-ll-status="loaded" loading="lazy"  title="ClosePopup"><noscript><img src="{{asset('image/closePop.png')}}" alt="closePopImage" loading="lazy"></noscript></span>
            <div class="coupontxt">
                <p style="color: black; font-weight: bold;padding:0px 20px">Complete the form with your inquiry and avail a 10% discount on Professional Nail Artist Course</p>
            </div>
            <div class="DiscountCoupon">
                <div class="imageDiv">
                    <div class="mySlides">
                        <img src="{{asset('image/blueskypics/gallery/IMG_5860.webp')}}" alt="Hair Extension Shops" class="lazyloaded ritu123 123"
                            data-ll-status="loaded" loading="lazy" title="POPUPIMAGE"/>
                        <noscript><img src="{{asset('image/blueskypics/gallery/IMG_5860.webp')}}" alt="Hair Extension Shops" loading="lazy" >
                        </noscript>
                    </div>
                </div>

                <div class="leftdiv">
                    <div class="rightdiv">
                        <form class="contactFormNail" method="post" action="#" id="formSubmitsnail">
                            @csrf
                            <div class="formfield PhonECode namefield">
                                <label>Name: </label>
                                <input type="text" name="full_name" class="full_names" data-class-name="full_names" placeholder="Enter Your Name"><br>
                                <span class="error_class full_name_error new_span_error"></span>
                            </div>
                            <div class="formfield PhonECode">
                                <label>WhatsApp Number: </label>
								<select name="dial_code" id="dial_codeFormsubmit" style="width: 30%;height: 30px;">
	<option data-dial_code="IN" value="91" Selected>India (+91)</option>
	<optgroup label="Other countries">
		<option data-dial_code="DZ" value="213">Algeria (+213)</option>
		<option data-dial_code="AD" value="376">Andorra (+376)</option>
		<option data-dial_code="AO" value="244">Angola (+244)</option>
		<option data-dial_code="AI" value="1264">Anguilla (+1264)</option>
		<option data-dial_code="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
		<option data-dial_code="AR" value="54">Argentina (+54)</option>
		<option data-dial_code="AM" value="374">Armenia (+374)</option>
		<option data-dial_code="AW" value="297">Aruba (+297)</option>
		<option data-dial_code="AU" value="61">Australia (+61)</option>
		<option data-dial_code="AT" value="43">Austria (+43)</option>
		<option data-dial_code="AZ" value="994">Azerbaijan (+994)</option>
		<option data-dial_code="BS" value="1242">Bahamas (+1242)</option>
		<option data-dial_code="BH" value="973">Bahrain (+973)</option>
		<option data-dial_code="BD" value="880">Bangladesh (+880)</option>
		<option data-dial_code="BB" value="1246">Barbados (+1246)</option>
		<option data-dial_code="BY" value="375">Belarus (+375)</option>
		<option data-dial_code="BE" value="32">Belgium (+32)</option>
		<option data-dial_code="BZ" value="501">Belize (+501)</option>
		<option data-dial_code="BJ" value="229">Benin (+229)</option>
		<option data-dial_code="BM" value="1441">Bermuda (+1441)</option>
		<option data-dial_code="BT" value="975">Bhutan (+975)</option>
		<option data-dial_code="BO" value="591">Bolivia (+591)</option>
		<option data-dial_code="BA" value="387">Bosnia Herzegovina (+387)</option>
		<option data-dial_code="BW" value="267">Botswana (+267)</option>
		<option data-dial_code="BR" value="55">Brazil (+55)</option>
		<option data-dial_code="BN" value="673">Brunei (+673)</option>
		<option data-dial_code="BG" value="359">Bulgaria (+359)</option>
		<option data-dial_code="BF" value="226">Burkina Faso (+226)</option>
		<option data-dial_code="BI" value="257">Burundi (+257)</option>
		<option data-dial_code="KH" value="855">Cambodia (+855)</option>
		<option data-dial_code="CM" value="237">Cameroon (+237)</option>
		<option data-dial_code="CA" value="1">Canada (+1)</option>
		<option data-dial_code="CV" value="238">Cape Verde Islands (+238)</option>
		<option data-dial_code="KY" value="1345">Cayman Islands (+1345)</option>
		<option data-dial_code="CF" value="236">Central African Republic (+236)</option>
		<option data-dial_code="CL" value="56">Chile (+56)</option>
		<option data-dial_code="CN" value="86">China (+86)</option>
		<option data-dial_code="CO" value="57">Colombia (+57)</option>
		<option data-dial_code="KM" value="269">Comoros (+269)</option>
		<option data-dial_code="CG" value="242">Congo (+242)</option>
		<option data-dial_code="CK" value="682">Cook Islands (+682)</option>
		<option data-dial_code="CR" value="506">Costa Rica (+506)</option>
		<option data-dial_code="HR" value="385">Croatia (+385)</option>
		<option data-dial_code="CU" value="53">Cuba (+53)</option>
		<option data-dial_code="CY" value="90392">Cyprus North (+90392)</option>
		<option data-dial_code="CY" value="357">Cyprus South (+357)</option>
		<option data-dial_code="CZ" value="42">Czech Republic (+42)</option>
		<option data-dial_code="DK" value="45">Denmark (+45)</option>
		<option data-dial_code="DJ" value="253">Djibouti (+253)</option>
		<option data-dial_code="DM" value="1809">Dominica (+1809)</option>
		<option data-dial_code="DO" value="1809">Dominican Republic (+1809)</option>
		<option data-dial_code="EC" value="593">Ecuador (+593)</option>
		<option data-dial_code="EG" value="20">Egypt (+20)</option>
		<option data-dial_code="SV" value="503">El Salvador (+503)</option>
		<option data-dial_code="GQ" value="240">Equatorial Guinea (+240)</option>
		<option data-dial_code="ER" value="291">Eritrea (+291)</option>
		<option data-dial_code="EE" value="372">Estonia (+372)</option>
		<option data-dial_code="ET" value="251">Ethiopia (+251)</option>
		<option data-dial_code="FK" value="500">Falkland Islands (+500)</option>
		<option data-dial_code="FO" value="298">Faroe Islands (+298)</option>
		<option data-dial_code="FJ" value="679">Fiji (+679)</option>
		<option data-dial_code="FI" value="358">Finland (+358)</option>
		<option data-dial_code="FR" value="33">France (+33)</option>
		<option data-dial_code="GF" value="594">French Guiana (+594)</option>
		<option data-dial_code="PF" value="689">French Polynesia (+689)</option>
		<option data-dial_code="GA" value="241">Gabon (+241)</option>
		<option data-dial_code="GM" value="220">Gambia (+220)</option>
		<option data-dial_code="GE" value="7880">Georgia (+7880)</option>
		<option data-dial_code="DE" value="49">Germany (+49)</option>
		<option data-dial_code="GH" value="233">Ghana (+233)</option>
		<option data-dial_code="GI" value="350">Gibraltar (+350)</option>
		<option data-dial_code="GR" value="30">Greece (+30)</option>
		<option data-dial_code="GL" value="299">Greenland (+299)</option>
		<option data-dial_code="GD" value="1473">Grenada (+1473)</option>
		<option data-dial_code="GP" value="590">Guadeloupe (+590)</option>
		<option data-dial_code="GU" value="671">Guam (+671)</option>
		<option data-dial_code="GT" value="502">Guatemala (+502)</option>
		<option data-dial_code="GN" value="224">Guinea (+224)</option>
		<option data-dial_code="GW" value="245">Guinea - Bissau (+245)</option>
		<option data-dial_code="GY" value="592">Guyana (+592)</option>
		<option data-dial_code="HT" value="509">Haiti (+509)</option>
		<option data-dial_code="HN" value="504">Honduras (+504)</option>
		<option data-dial_code="HK" value="852">Hong Kong (+852)</option>
		<option data-dial_code="HU" value="36">Hungary (+36)</option>
		<option data-dial_code="IS" value="354">Iceland (+354)</option>
		<option data-dial_code="IN" value="91">India (+91)</option>
		<option data-dial_code="ID" value="62">Indonesia (+62)</option>
		<option data-dial_code="IR" value="98">Iran (+98)</option>
		<option data-dial_code="IQ" value="964">Iraq (+964)</option>
		<option data-dial_code="IE" value="353">Ireland (+353)</option>
		<option data-dial_code="IL" value="972">Israel (+972)</option>
		<option data-dial_code="IT" value="39">Italy (+39)</option>
		<option data-dial_code="JM" value="1876">Jamaica (+1876)</option>
		<option data-dial_code="JP" value="81">Japan (+81)</option>
		<option data-dial_code="JO" value="962">Jordan (+962)</option>
		<option data-dial_code="KZ" value="7">Kazakhstan (+7)</option>
		<option data-dial_code="KE" value="254">Kenya (+254)</option>
		<option data-dial_code="KI" value="686">Kiribati (+686)</option>
		<option data-dial_code="KP" value="850">Korea North (+850)</option>
		<option data-dial_code="KR" value="82">Korea South (+82)</option>
		<option data-dial_code="KW" value="965">Kuwait (+965)</option>
		<option data-dial_code="KG" value="996">Kyrgyzstan (+996)</option>
		<option data-dial_code="LA" value="856">Laos (+856)</option>
		<option data-dial_code="LV" value="371">Latvia (+371)</option>
		<option data-dial_code="LB" value="961">Lebanon (+961)</option>
		<option data-dial_code="LS" value="266">Lesotho (+266)</option>
		<option data-dial_code="LR" value="231">Liberia (+231)</option>
		<option data-dial_code="LY" value="218">Libya (+218)</option>
		<option data-dial_code="LI" value="417">Liechtenstein (+417)</option>
		<option data-dial_code="LT" value="370">Lithuania (+370)</option>
		<option data-dial_code="LU" value="352">Luxembourg (+352)</option>
		<option data-dial_code="MO" value="853">Macao (+853)</option>
		<option data-dial_code="MK" value="389">Macedonia (+389)</option>
		<option data-dial_code="MG" value="261">Madagascar (+261)</option>
		<option data-dial_code="MW" value="265">Malawi (+265)</option>
		<option data-dial_code="MY" value="60">Malaysia (+60)</option>
		<option data-dial_code="MV" value="960">Maldives (+960)</option>
		<option data-dial_code="ML" value="223">Mali (+223)</option>
		<option data-dial_code="MT" value="356">Malta (+356)</option>
		<option data-dial_code="MH" value="692">Marshall Islands (+692)</option>
		<option data-dial_code="MQ" value="596">Martinique (+596)</option>
		<option data-dial_code="MR" value="222">Mauritania (+222)</option>
		<option data-dial_code="YT" value="269">Mayotte (+269)</option>
		<option data-dial_code="MX" value="52">Mexico (+52)</option>
		<option data-dial_code="FM" value="691">Micronesia (+691)</option>
		<option data-dial_code="MD" value="373">Moldova (+373)</option>
		<option data-dial_code="MC" value="377">Monaco (+377)</option>
		<option data-dial_code="MN" value="976">Mongolia (+976)</option>
		<option data-dial_code="MS" value="1664">Montserrat (+1664)</option>
		<option data-dial_code="MA" value="212">Morocco (+212)</option>
		<option data-dial_code="MZ" value="258">Mozambique (+258)</option>
		<option data-dial_code="MN" value="95">Myanmar (+95)</option>
		<option data-dial_code="NA" value="264">Namibia (+264)</option>
		<option data-dial_code="NR" value="674">Nauru (+674)</option>
		<option data-dial_code="NP" value="977">Nepal (+977)</option>
		<option data-dial_code="NL" value="31">Netherlands (+31)</option>
		<option data-dial_code="NC" value="687">New Caledonia (+687)</option>
		<option data-dial_code="NZ" value="64">New Zealand (+64)</option>
		<option data-dial_code="NI" value="505">Nicaragua (+505)</option>
		<option data-dial_code="NE" value="227">Niger (+227)</option>
		<option data-dial_code="NG" value="234">Nigeria (+234)</option>
		<option data-dial_code="NU" value="683">Niue (+683)</option>
		<option data-dial_code="NF" value="672">Norfolk Islands (+672)</option>
		<option data-dial_code="NP" value="670">Northern Marianas (+670)</option>
		<option data-dial_code="NO" value="47">Norway (+47)</option>
		<option data-dial_code="OM" value="968">Oman (+968)</option>
		<option data-dial_code="PW" value="680">Palau (+680)</option>
		<option data-dial_code="PA" value="507">Panama (+507)</option>
		<option data-dial_code="PG" value="675">Papua New Guinea (+675)</option>
		<option data-dial_code="PY" value="595">Paraguay (+595)</option>
		<option data-dial_code="PE" value="51">Peru (+51)</option>
		<option data-dial_code="PH" value="63">Philippines (+63)</option>
		<option data-dial_code="PL" value="48">Poland (+48)</option>
		<option data-dial_code="PT" value="351">Portugal (+351)</option>
		<option data-dial_code="PR" value="1787">Puerto Rico (+1787)</option>
		<option data-dial_code="QA" value="974">Qatar (+974)</option>
		<option data-dial_code="RE" value="262">Reunion (+262)</option>
		<option data-dial_code="RO" value="40">Romania (+40)</option>
		<option data-dial_code="RU" value="7">Russia (+7)</option>
		<option data-dial_code="RW" value="250">Rwanda (+250)</option>
		<option data-dial_code="SM" value="378">San Marino (+378)</option>
		<option data-dial_code="ST" value="239">Sao Tome &amp; Principe (+239)</option>
		<option data-dial_code="SA" value="966">Saudi Arabia (+966)</option>
		<option data-dial_code="SN" value="221">Senegal (+221)</option>
		<option data-dial_code="CS" value="381">Serbia (+381)</option>
		<option data-dial_code="SC" value="248">Seychelles (+248)</option>
		<option data-dial_code="SL" value="232">Sierra Leone (+232)</option>
		<option data-dial_code="SG" value="65">Singapore (+65)</option>
		<option data-dial_code="SK" value="421">Slovak Republic (+421)</option>
		<option data-dial_code="SI" value="386">Slovenia (+386)</option>
		<option data-dial_code="SB" value="677">Solomon Islands (+677)</option>
		<option data-dial_code="SO" value="252">Somalia (+252)</option>
		<option data-dial_code="ZA" value="27">South Africa (+27)</option>
		<option data-dial_code="ES" value="34">Spain (+34)</option>
		<option data-dial_code="LK" value="94">Sri Lanka (+94)</option>
		<option data-dial_code="SH" value="290">St. Helena (+290)</option>
		<option data-dial_code="KN" value="1869">St. Kitts (+1869)</option>
		<option data-dial_code="SC" value="1758">St. Lucia (+1758)</option>
		<option data-dial_code="SD" value="249">Sudan (+249)</option>
		<option data-dial_code="SR" value="597">Suriname (+597)</option>
		<option data-dial_code="SZ" value="268">Swaziland (+268)</option>
		<option data-dial_code="SE" value="46">Sweden (+46)</option>
		<option data-dial_code="CH" value="41">Switzerland (+41)</option>
		<option data-dial_code="SI" value="963">Syria (+963)</option>
		<option data-dial_code="TW" value="886">Taiwan (+886)</option>
		<option data-dial_code="TJ" value="7">Tajikstan (+7)</option>
		<option data-dial_code="TH" value="66">Thailand (+66)</option>
		<option data-dial_code="TG" value="228">Togo (+228)</option>
		<option data-dial_code="TO" value="676">Tonga (+676)</option>
		<option data-dial_code="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
		<option data-dial_code="TN" value="216">Tunisia (+216)</option>
		<option data-dial_code="TR" value="90">Turkey (+90)</option>
		<option data-dial_code="TM" value="7">Turkmenistan (+7)</option>
		<option data-dial_code="TM" value="993">Turkmenistan (+993)</option>
		<option data-dial_code="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
		<option data-dial_code="TV" value="688">Tuvalu (+688)</option>
		<option data-dial_code="UG" value="256">Uganda (+256)</option>
		<!-- <option data-dial_code="GB" value="44">UK (+44)</option> -->
		<option data-dial_code="UA" value="380">Ukraine (+380)</option>
		<option data-dial_code="AE" value="971">United Arab Emirates (+971)</option>
		<option data-dial_code="UY" value="598">Uruguay (+598)</option>
		<!-- <option data-dial_code="US" value="1">USA (+1)</option> -->
		<option data-dial_code="UZ" value="7">Uzbekistan (+7)</option>
		<option data-dial_code="VU" value="678">Vanuatu (+678)</option>
		<option data-dial_code="VA" value="379">Vatican City (+379)</option>
		<option data-dial_code="VE" value="58">Venezuela (+58)</option>
		<option data-dial_code="VN" value="84">Vietnam (+84)</option>
		<option data-dial_code="VG" value="84">Virgin Islands - British (+1284)</option>
		<option data-dial_code="VI" value="84">Virgin Islands - US (+1340)</option>
		<option data-dial_code="WF" value="681">Wallis &amp; Futuna (+681)</option>
		<option data-dial_code="YE" value="969">Yemen (North)(+969)</option>
		<option data-dial_code="YE" value="967">Yemen (South)(+967)</option>
		<option data-dial_code="ZM" value="260">Zambia (+260)</option>
		<option data-dial_code="ZW" value="263">Zimbabwe (+263)</option>
	</optgroup>
</select>
                                <input type="tel" name="mobile_number" class="mobile_numbers" id="phone"
                                    data-class-name="mobile_numbers" maxlength="10" onkeypress="return onlyNumberKey(event);" placeholder="Enter Whatsapp Number" style="width: 59% !important;"><br>
                                <input type="hidden" id="country_data" name="country_data" value="in">
                                
                                <span class="error_class mobile_number_error"></span>
                            </div>
                            <div class="formfield PhonECode">
                                <label>Email: </label>
                                <input type="text" name="email" placeholder="Enter Your Email" data-class-name="emails"
                                    class="emails"><br>
                                <span class="error_class email_error new_span_error"></span>
                            </div>
                            <div class="formfield PhonECode">
                                <label>What are looking for:</label>
                                <textarea rows="5" col="50" name="purpose_of_enquery"
                                    data-class-name="purpose_of_enquerys" placeholder="Enter Your Subject"
                                    class="purpose_of_enquerys"></textarea><br>
                                <span class="error_class purpose_of_enquery_error new_span_error"></span>
                            </div>
                            <div class="formfield mb-4">
							{{--  {{ app('mathcaptcha')->reset(); }}  --}}
							<label for="mathgroup" class="form-label_h">Please solve the following math function: {{ app('mathcaptcha')->label() }}</label>
							{!! app('mathcaptcha')->input(['class' => 'form-control mathcaptchas', 'id' => 'mathgroup']) !!}
							<span class="error_class mathcaptcha_error"></span>
						</div>
                            <div class="formfield coupon_otp_box" style="display: none;margin-top:5px;">
                                <label style="color: white;">OTP</label>
                                <input type="number" name="otp" class="contactFormInp" id="otp_coupan"
                                    autocomplete="off">
                                <span class="error_class otp_errors new_span_error"></span>
                                <input type="hidden" name="reachus_id" class="reachus_id" id="reachus_id" value="" autocomplete="off">
                                <span class="error_class otp_error"></span>
                            </div>

                            <div id="">
								<button type="submit" class="btn btn-dark home_form" id="sendOtpButton1">Send</button>
                                <!--<button type="submit" class="btn btn-dark home_form" id="sendOtpButton1">Send  OTP</button>
                                <button type="submit" class="btn btn-dark home_form" id="verifyOtpButton1" style="display:none;">Verify OTP</button>-->
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script defer async>
document.addEventListener('DOMContentLoaded', function() { 
	var windowwidth = $(window).width();
	if(windowwidth < 768){
		const scrollLinks = document.querySelectorAll('.nav-link'); 
		scrollLinks.forEach(function(scrollLink) { 
			scrollLink.addEventListener('click', function(event) { 
				const fullUrl = scrollLink.getAttribute('href').substring(1); 
				var lastword = fullUrl.split("#").pop();
				const targetElement = document.getElementById(lastword); 
				
				if (targetElement) { 
					const offsetTop = targetElement.offsetTop - 170;			
					$('html, body').animate({
						scrollTop: offsetTop
					}, 'fast');
					event.stopPropagation();
				}
			}); 
		});
	}	
});

function hideSidebar(e) {
	//alert('hideSidebar');
	var scrollTOp = '';
	if(e == 'home'){
		location.href ="https://wigomania.com/blueskynailacademy.hyderabad";
	}
	if(e == 'aboutus'){
		fullUrl = "https://wigomania.com/blueskynailacademy.hyderabad#aboutus";
		scrollTOp = jQuery('#aboutus').attr('data-scroll');
	}
	if(e == 'Courses'){
		fullUrl = "https://wigomania.com/blueskynailacademy.hyderabad#Courses";
		scrollTOp = jQuery('#Courses').attr('data-scroll');
	}
	if(e == 'Gallery'){
		fullUrl = "https://wigomania.com/blueskynailacademy.hyderabad#Gallery";
		scrollTOp = jQuery('#Gallery').attr('data-scroll');
	}
	if(e == 'Contactus'){
		fullUrl = "https://wigomania.com/blueskynailacademy.hyderabad#Contactus";
		scrollTOp = jQuery('#Contactus').attr('data-scroll');
	}
	if(e == 'Wig-O-Mania'){
		location.href = "https://wigomania.com/";
	}
	
	console.log('ScrollTOp'+scrollTOp);
	const offsetTop = scrollTOp - 90;			
	$('html, body').animate({
		scrollTop: offsetTop
	}, 'fast');
	$('.bar').removeClass('animate');
	$('.mobile-menu').removeClass('active');
}
var count = 0;
window.onload = function(){
  var elems = document.body.getElementsByTagName("img");  
  for(var i = 0; i < elems.length; i++){
    var aboutusscrollTOp = jQuery('#aboutus').offset().top;
	var CoursesscrollTOp = jQuery('#Courses').offset().top;
	var GallerycrollTOp = jQuery('#Gallery').offset().top;
	var ContactuscrollTOp = jQuery('#Contactus').offset().top;
	jQuery('#aboutus').attr('data-scroll',aboutusscrollTOp);
	jQuery('#Courses').attr('data-scroll',CoursesscrollTOp);
	jQuery('#Gallery').attr('data-scroll',GallerycrollTOp);
	jQuery('#Contactus').attr('data-scroll',ContactuscrollTOp);
  }
	console.log('aboutusscrollTOp---'+aboutusscrollTOp);
	console.log('CoursesscrollTOp---'+CoursesscrollTOp);
	console.log('CoursesscrollTOp--'+GallerycrollTOp);
	console.log('ContactuscrollTOp---'+ContactuscrollTOp);
};
jQuery(document).ready(function() {
	var aboutusscrollTOp = jQuery('#aboutus').offset().top;
	var CoursesscrollTOp = jQuery('#Courses').offset().top;
	var GallerycrollTOp = jQuery('#Gallery').offset().top;
	var ContactuscrollTOp = jQuery('#Contactus').offset().top;
	jQuery('#aboutus').attr('data-scroll',aboutusscrollTOp);
	jQuery('#Courses').attr('data-scroll',CoursesscrollTOp);
	jQuery('#Gallery').attr('data-scroll',GallerycrollTOp);
	jQuery('#Contactus').attr('data-scroll',ContactuscrollTOp);
	console.log('aboutusscrollTOp'+aboutusscrollTOp);
	console.log('CoursesscrollTOp'+CoursesscrollTOp);
	console.log('CoursesscrollTOp'+GallerycrollTOp);
	console.log('ContactuscrollTOp'+ContactuscrollTOp);
	
	
	
    jQuery(function() {
        var popup = window.localStorage.getItem('popup');
        var popupCloseCount = window.sessionStorage.getItem('popupClose');
		//alert(popupCloseCount);
        if (popup != 1) {
            if (popupCloseCount == 1 || popupCloseCount > 1) {
                jQuery('.popup').hide();
            } else {
                setTimeout(function() {
                    jQuery('.popup').show();
                },60000);
            }
        }
    });
	var  thankuUrl = "{{ route('thankunailcontactus') }}";
	$("#formSubmitsnail").submit(function(event) {
		
        if ($('#otp_coupan').val()) {
            var url = "{{ route('nail.submitOtp') }}";
        } else {
            var url = "{{ route('nail.popupform') }}";
        }
        var form = document.getElementById('formSubmitsnail');
        var formData = new FormData(form);
        $('.error_class').hide();
        event.preventDefault();
        $.ajax({
            url,
            type: "POST",
			"_token": "{{ csrf_token() }}",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.error) {
					$('.error_class').text('');
                    $.each(response.error_message, function(index, value) {
                        $('.' + index + '_error').text(value);
                        $('.' + index + '_error').show('active');
                    });
                    if (response && response.error_message1) {

                        $(".otp_error").text(response.error_message1);
                        $(".otp_error").show("active");
                    }
                    $(':input[type="submit"]').prop('disabled', false);
                } else {
					
                    /* $('.coupon_otp_box').show();
                    $('#verifyOtpButton1').show();
                    $('#sendOtpButton1').hide(); 
                    $('.center_popup .popupscreen').addClass('heightofpopup'); 

					toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 3000;
                    toastr.success(response.success_message); */

                    $.each(response.request, function(index, value) {
                       // $('.' + index + 's').attr('disabled', true);
                    });
					window.sessionStorage.setItem('popupClose', 1);
                    if (response.is_relode == 'yes') {
							var formData1 = {
								Name: $('.full_names').val(),
								custemail: $('.emails').val(),
								DialCode: $('#dial_codeFormsubmit').val(),
								number: $('#phone').val(),
								purpose_of_enquery: $('.purpose_of_enquerys').val(),
								DiscountCode:response.coupon,
								form:'Google Search'
							};
							//alert(formData1);
							$.ajax({
								url: 'https://wigomania.co.uk/crm/hyderabad_nail/index.php/Websitedata/DataFromWebsitetopracto',
								type: 'POST',
								data: formData1,
								success: function(r) {
									window.location.assign(thankuUrl);
								},
								error: function(xhr, status, error) {
								}
							}); 
                    }
                    $('#reachus_id').val(response.ReachUs.id)

                }
            },
        });
    });	
})

function closePop() {
    jQuery('.popup').hide();
    $('.popup').modal('hide');
    $('.modal-backdrop.show').hide();
    var popupClose = window.sessionStorage.getItem('popupClose');
    if (popupClose == undefined || popupClose == '' || popupClose == null) {
        window.sessionStorage.setItem('popupClose', 1);
    } else {
        popupClose = parseInt(popupClose) + 1;
        window.sessionStorage.setItem('popupClose', popupClose);
    }
}
(function () {
	$('.hamburger-menu').on('click', function() {
		$('.bar').toggleClass('animate');
		$('.mobile-menu').toggleClass('active');
    return false;
	})
  $('.has-children').on ('click', function() {
		$(this).children('ul').slideToggle('slow', 'swing');
		$('.icon-arrow').toggleClass('open');
	});
})();

</script>
<style>
.formfield label{
	color:#000;
}
.hamburger-menu{
	display:none;
}
.annonecemrbnt.MOBILEANNOUNCEMNETBAR{
		display:none;
	}
.mobile-menu{
	display:none;
}
html{scroll-behavior: smooth;}
.coupontxt p{
	color:#000;
}
.coupontxt{
	padding: 10px 0px;
}
#popup .formfield label{
	font-size: 14px;
}
#nav-title{
	margin-right: auto;
    font-size: 18px;
    margin-bottom: 0px;
    color: #000;
    font-weight: 700;
}
.navmenus{
	margin-top: 20px;
}
.annonecemrbnt{
	display: flex;
    justify-content: flex-end;
    align-items: center;
	padding: 10px 40px;
	background: #ee4695;
    color: #fff;
}
.annonecemrbnt .text1{
	padding: 0 20px;
}
.header-phone {
  position: absolute;
  top: 1px;
  right: 5px;
}

#navbarCollapse{
	width: 60%;
    margin: 0 auto;
}
#navbarCollapse ul{
	display:flex;
	padding-left:0px;
	justify-content: center;
}
.navbar-toggler{
	display:none;
}
#navbarCollapse ul li{
	list-style-type: none;
    margin: auto;
}
#navbarCollapse ul li a{
	color: rgba(0, 0, 0, .9);
    font-size: 20px;
    font-weight: 700;
}
.annonecemrbntinner{
	font-size: 20px;
	color:#000;
    font-weight: 700;
}
@media screen and (max-width: 1360px){
	.regular-header .main-nav {
		padding: 17px 0 0;
	}
}


@media (max-width: 768px) {
	#feedback{
		margin-top:0px;
		margin-bottom:100px;
	}
	.QueLeft,.QueRight{
		width: 100% !important;
	}
	.formFields label,.formFields input, .formFields select,#submit{
		margin-left:0px !important;
	}
	#popup .coupontxt p{
		font-size: 17px;
		line-height: 20px;
		margin-bottom: 0px;
		padding: 0px 10px;
	}
	#popup .formfield input{
		margin-bottom: 0px;
		height: 30px;
	}
	#popup .formfield textarea{
		margin-bottom: 0px;
		height: 30px;
	}
	.contactForm .elementor-field{
		padding: 0px !important;
	}
	.contactForm .headingmaisub{
		margin-top: 20px;
	}
	.twocolumnsaboutinnder.aboutsusbox2 .imageaboutsus video{
		height: 670px;
	}
	.contactForm .headingtwo{
		font-weight: normal !important;
		line-height: normal !important;
	}
	#Courses .MarbleArt,#Courses .FrenchGelPolish{
		margin-top: 0px;
	}
	.NailCoursesinner, .NailAboutusinner{
		padding-top: 20px !important;
	}
	.ArtistryDestinationbox3 .elementor-icon-box-description{
		    margin-bottom: 0px !important;
	}
	.whyusmain .whyusmaininner{
		padding-bottom:10px !important;
	}
	.ArtistryDestination .whyusmaininner{
		padding-bottom:20px;
	}
	.twocolumnsaboutinnder.aboutsusbox2 .imageaboutsus{
		margin-top:0px !important;
		padding-bottom:0px !important;
		margin-left: 0px !important;
		
	}
	.NailAboutusinner .aboutsusbox2 .youtubehomepage{
		margin-top: 0px;
		margin-bottom: 5px;
	}
	
	#image-gallery img{
		width:100% !important;
	}
	.studiovideoinner img{
		width:100% !important;
	}
	.bannerimages{
		margin-top: 5px;
		
	}
	.bannerimages img{
		padding-bottom: 5px !important;
	}
	.aboutsusbox1 .headingmain{
		text-align: center;
	}
	.annonecemrbnt{
		margin-top: 76px;
	}
	.Aboutuscontainer .elementor-icon-box-icon{
		display:none !important;
	}
	.Aboutuscontainer .elementor-icon-box-content{
		text-align: center;
	}
	.imglogo{
		position: relative;
		float: right;
		width: 70px;
		left: -10px;
	}
	.imglogo img{
		position: relative;
		float: right;
		width: 70px;
		left: -10px;
		top: 10px;
	}
	.annonecemrbnt{
		display:none !important;
	}
	.annonecemrbnt.MOBILEANNOUNCEMNETBAR{
		display:block !important;
	}
	.imageaboutsus{
		margin: 0 auto;
		width: 90%;
		margin-top: 20px;
	}
	.NailCoursesinner{
		padding-bottom: 0px !important;
	}
	.NailAboutusinner{
		padding-bottom: 20px;
	}
	.youtubehomepage{
		float: none;
		width: 100%;
		margin: 0 auto;
	}
	.aboutscontent{
		    text-align: justify;
	}
	.aboutsusbox2 img{
		left: 0px !important;
		object-fit: unset !important;
		width:100%;
	}
	.aboutsusVideoCls{
		width:100% !important;
	}
	.annonecemrbnt .text1, .annonecemrbnt .text2{
		font-size: 18px;
		margin-top: 10px;
	}
	div#navbarCollapse{
		background:transparent;
	}
	.mobile-line{
		display:none !important;
	}
	.whatsapp-chat {
	  top: auto;left: 0;
	  right: 0;
	  bottom:90px;
	}
	.whatsapp-chat img {
	  width: auto;
	}
	.navmenus{
		display: none;
	}
	.nav-link:focus, .nav-link:hover{
		color: #000;
	}
	.imagemobilemenu{
		width: 100%;
		padding-left: 30px !important;
	}
	.imagemobilemenu img{
		width: 50% !important;
	}
	.mobile-menu {
		display: block;
	}
	.whatsapp-chat1{
		left: 0;
		width:10%;
	}
	section.thankyou-section{
		margin-top: 250px;
		padding-bottom: 50px;
		padding-top: 0px;
	}
	.center_popup .popupscreen{
		height: 660px !important;
		margin-top: 10px !important;
	}
	
	.DiscountCoupon .imageDiv img{
		display:none;
	}
	.annonecemrbnt{
		display: inline-block;
		padding: 20px 0px;
		padding-bottom: 20px;
		width:100%;
		border-bottom: 5px solid #fff;
	}
	 #nav-title{
		font-size:15px;
		margin-bottom: 0px;
		color: #000;
		font-weight: 700;
		text-align: center;
		width: 100%;
	 }
	 .annonecemrbntinner{
		font-size: 20px;
		color: #000;
		font-weight: 700;
		width: 100%;
		justify-content: center;
		align-items: center;
		display:inline-block;
	 }
	.annonecemrbntinner .text1 i,.annonecemrbntinner .text2 i{
		 margin-right: 10px
	 }
	 
	 .annonecemrbnt .text1,.annonecemrbnt .text2{
		width: 100%;
		float: left;
		text-align: center;
		padding: 0 20px;
		font-size: 16px;
		margin-top: 5px;
		width: 100%;
		color:#000;
	}
	.maincontainercourses{
		margin-top: 0px !important;
	}
	.sticky_gallery{
		margin-top: 50px;
		position: relative;
	}
	.hamburger-menu {
		position: fixed;
		top: -4px;
		left: 0;
		padding-top: 0px;
		padding-left: 15px;
		width: 100%;
		height: 80px;
		cursor: pointer;
		z-index: 9998;
		background: #EBEBEB;
		display: block;
		-webkit-tap-highlight-color: rgba(255, 255, 255, 0);
	}

	.bar,
	.bar:after,
	.bar:before {
	  width: 30px;
	  height: 3px;
	}

	.bar {
		top: 28px;
	  position: relative;
	  transform: translateY(10px);
	  background: black;
	  transition: all 0ms 300ms;
	}

	.bar.animate {
	  background: rgba(255, 255, 255, 0);
	}

	.bar:before {
	  content: "";
	  position: absolute;
	  left: 0;
	  bottom: 10px;
	  background: black;
	  transition: bottom 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms cubic-bezier(0.23, 1, 0.32, 1);
	}

	.bar:after {
	  content: "";
	  position: absolute;
	  left: 0;
	  top: 10px;
	  background: black;
	  transition: top 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms cubic-bezier(0.23, 1, 0.32, 1);
	}

	.bar.animate:after {
	  top: 0;
	  transform: rotate(45deg);
	  transition: top 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1);
	}

	.bar.animate:before {
	  bottom: 0;
	  transform: rotate(-45deg);
	  transition: bottom 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1);
	}

	/*---------------------
	Mobiles Menu 
	----------------------*/
		/*---------------------
		Mobiles Menu - Design 
		----------------------*/

	.mobile-menu ul {
	  margin: 0;
	  padding: 0;
	}

	.mobile-menu li {
	  font-size: 20px;
	  line-height: 30px;
	  margin: 0;
	  overflow: hidden;
	  padding: 5px;
	  position: relative;
	  text-align: left;
	  text-transform: uppercase;
	  padding-left:15px;
	}

	.mobile-menu li:first-child {
	  margin-top: 70px;
	}

	.mobile-menu li:hover {
	  background: #CCCCCC;
	}

	.mobile-menu li a {
	  text-decoration: none;
	  color: black;
	}

		/*---------------------
		Mobiles Menu - Slide IN 
		----------------------*/

	.mobile-menu {
	  top: 0;
	  max-width: 250px;
	  left: -100%;
	  width: 100%;
	  background: #EBEBEB;
	  color: black;
	  height: 430px;
	  position: fixed;
	  z-index: 9997;
	  overflow-y: auto;
	  -webkit-transform: translate3d(0, 0, 205px);
	  -moz-transform: translate3d(0, 0, 205px);
	  transform: translate3d(0, 0, 205px);
	  -webkit-transition: all 500ms ease-in-out;
	  -moz-transition: all 500ms ease-in-out;
	  transition: all 500ms ease-in-out;
	}

	.mobile-menu.active {
	  left: 0;
	  -webkit-transform: translate3d(0, 0, 0);
	  -moz-transform: translate3d(0, 0, 0);
	  transform: translate3d(0, 0, 0);
	  -webkit-transition: all 500ms ease-in-out;
	  -moz-transition: all 500ms ease-in-out;
	  transition: all 500ms ease-in-out;
	}

		/*---------------------
		Mobiles Menu - Dropdown Submenu
		----------------------*/

	.has-children:hover{
		cursor:hand;
	}

	.children {
		display:none;	
	}

	.mobile-menu .children li:first-child {
	  margin-top: 0px;
	}

	.icon-arrow {
		position: absolute;
		display: block;
		font-size: 0.7em;
		color: black;
		top: 5px;
		right: 10px;
	  transform: rotate(0deg);
	  -webkit-transform: rotate(0deg);
	  -moz-transform: rotate(0deg); 
		transition: .6s;
	  -webkit-transition: .6s;
	  -moz-transition: .6s;	 
	}
	  
	.icon-arrow:after {
		content: "\25BC";
	}

	.icon-arrow.open {
	  transform: rotate(-180deg);
	  -webkit-transform: rotate(-180deg);
	  -moz-transform: rotate(-180deg); 
	  transition: .6s;
	  -webkit-transition: .6s;
	  -moz-transition: .6s; 		
	}
	.NailAboutusinner{
		padding-bottom: 0px !important;
		    padding-top: 20px !important;
	}
}
@media screen and (max-width: 568px) {
	.center_popup .popupscreen{
		height: 520px !important;
	}
	.chat-section.socialICONS{
		display: none !important;
	}
	.whyusmain{
		padding-top: 30px;
	}
	.center_popup .popupscreen.heightofpopup{
		height: 500px !important;
	}
}
@media screen and (max-width: 375px) {
	#nav-title{
		font-size: 14px;
	}
	.aboutsusbox2 img{
		left: -35px;
	}
	.center_popup .popupscreen{
		height: 560px !important;
	}
	.center_popup .popupscreen.heightofpopup{
		height: 680px !important;
	}
}
@media screen and (max-width: 480px){
	.header-phone{
		top:2px !important;  
		right: 0 ; 
		text-align: center ;
	}
	.regular-header .main-nav{
		margin-top: 0px;
	}
	.whatsapp-chat{
		width:10%;
	}
	
}
.navbar .container-fluid {
    padding: 12px 25px !important;
}
</style>