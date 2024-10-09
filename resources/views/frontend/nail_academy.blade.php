@extends('frontend.layouts.nail')
@section('title', 'Nail Academy')
@section('content')


<div class="bannerimages">
	<div class="bannerimagesinerimages">
		<img class="img1" loading="lazy" title="Banner1"  width='450' height='450' alt="Banner1" src="{{asset('image/blueskypics/home/banner1.webp')}}" srcset="{{asset('image/blueskypics/home/banner1.webp')}} 736w, {{asset('image/blueskypics/home/banner1.webp')}} 216w, {{asset('image/blueskypics/home/banner1.webp')}} 600w" sizes="(max-width: 736px) 100vw, 736px">
		<img class="img2" loading="lazy" title="Banner2" alt="Banner2"  width='450' height='450' src="{{asset('image/blueskypics/home/banner2.webp')}}">
		<img class="img3" loading="lazy" title="Banner3" alt="Banner3" width='450' height='450' src="{{asset('image/blueskypics/home/banner3.webp')}}">
	</div>
</div>
<div class="NailCourses" id="Courses">
	<div class="NailCoursesinner">
		<h2 class="elementor-heading-title elementor-size-default headingmain">Nail art courses in Hyderabad</h2>
			<div class="elementor-widget-container">
				<h2 class="elementor-heading-title elementor-size-default headingsub">Transform from an amateur to a professional</h2>		
			</div>
			<div class="imagewithslider maincourse">
				<div class="elementor-widget-container maincourseslider1 sliderboxescmmon">
					<div class="imagediv">
						<img width="250" height="250" loading="lazy" src="{{asset('image/blueskypics/firstcourse.webp')}}" class="attachment-large size-large wp-image-3298" title="Professional Nail Artist Course" alt="Professional Nail Artist Course" srcset="{{asset('image/blueskypics/firstcourse.webp')}}">
					</div>
					<div class="textafteriamge">
						<h2 class="elementor-heading-title elementor-size-default">Professional Nail Artist Course</h2>
						<div class="contactusbutton" onclick="opencouponform('coursesdetail');"><span>Click for Details</span></div>
					</div>
				</div>
				<div class="elementor-widget-container maincourseslider2 sliderboxescmmon">
					
					<form class="elementor-form" method="post" name="registerform" id="nailcourse">
						@csrf
						
					<div class="elementor-form-fields-wrapper elementor-labels-above">
					<h4><strong>4 Weeks Professional Nail Artist course</strong></h4>
					<h6>
					Schedule classes are held from 11:30am to 4:30pm on each day.
						Exam & certification for the 4 weeks course will be held from 11:30am to 5:30pm
					</h6>
						<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
							<input size="1" type="text" name="full_name" id="full_name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Name">
							<span class="error_class full_name_errors new_span_error"></span>
						</div>
						<div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
							<input size="1" type="email" name="email" id="emailID" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email" aria-required="true">
							<span class="error_class email_errors new_span_error"></span>
						</div>
						<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_d5ec714 elementor-col-100 elementor-field-required">
							<select name="dial_code" id="dial_code" class="elementor-field elementor-field-textual" style="width: 30%;height: 30px;">
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
                                <input type="tel" name="mobile_number" class="elementor-field-textual elementor-field mobile_numbers" id="phonecourse" data-class-name="mobile_numbers" maxlength="10" onkeypress="return onlyNumberKey(event);" placeholder="Enter Whatsapp Number" style="width: 59% !important;"><br>
                                <input type="hidden" id="country_data" name="country_data" value="in">
								<span class="error_class purpose_of_enquery_errors"></span>
						</div>
						<div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
							<div class="form-group mb-4" style="width:100%;text-align: left;">
								{{--  {{ app('mathcaptcha')->reset(); }}  --}}
								<label for="mathgroup" class="form-label_h">Please solve the following math function: {{ app('mathcaptcha')->label() }}</label>
								{!! app('mathcaptcha')->input(['class' => 'form-control mathcaptchas elementor-field elementor-size-sm  elementor-field-textual', 'id' => 'mathgroup']) !!}
								<span class="error_class mathcaptcha_errors"></span>
							</div>
						</div>
						
						<div class="mb-3 formfield coupon_otp_box" style="display: none;margin-top:5px;text-align:left;">
                                <label style="color: white;">OTP</label>
                                <input type="number" name="otp" class="contactFormInp" id="otp_coupan_nailcourse" autocomplete="off">
                                <span class="error_class otp_errors new_span_error"></span>
                                <input type="hidden" name="nailCourseus" class="nailCourseus" id="nailCourseus" value="" autocomplete="off">
                                <span class="error_class otp_error"></span>
                            </div>
							<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
							<button type="submit" class="btn btn-dark home_form" id="nailCoursesendOtpButton1" style="width:100% !important;">Send</button>
							<!--<button type="submit" class="btn btn-dark home_form" id="nailCoursesendOtpButton1">Send OTP</button>
                            <button type="submit" class="btn btn-dark home_form" id="nailCourseverifyOtpButton1" style="display:none;">Verify OTP</button>-->
						</div>
					</div>
			</form>
				</div>
			</div>
			<div class="imagewithslider MarbleArt">
					<div class="elementor-widget-container sliderbox1 sliderboxescmmon">
						<div class="imagediv">
							<img width="1024" height="1024" loading="lazy" src="{{asset('image/blueskypics/courses/Marbleartnail.webp')}}" class="attachment-large size-large wp-image-3298" alt="Marble Art" title="Marble Art" srcset="{{asset('image/blueskypics/courses/Marbleartnail.webp')}}">
						</div>
						<div class="textafteriamge">
							<h2 class="elementor-heading-title elementor-size-default">Marble Art</h2>
							<div class="contactusbutton" onclick="opencouponform('MarbleArt');"><span>Click for Details</span></div>
						</div>
					</div>
					<div class="elementor-widget-container sliderbox2 sliderboxescmmon">
						<div class="imagediv">
							<img width="1024" height="1024" loading="lazy" src="{{asset('image/blueskypics/courses/AquarelieNailArt.webp')}}" class="attachment-large size-large wp-image-3298" alt="Aquarelle Nail Art" title="Aquarelle Nail Art" srcset="{{asset('image/blueskypics/courses/AquarelieNailArt.webp')}}">
						</div>
						<div class="textafteriamge">
							<h2 class="elementor-heading-title elementor-size-default">Aquarelle Nail Art</h2>
							<div class="contactusbutton" onclick="opencouponform('StampingNailArt');"><span>Click for Details</span></div>
						</div>
					</div>
					<div class="elementor-widget-container sliderbox2 sliderboxescmmon">
						<div class="imagediv">
							<img width="1024" height="1024"  loading="lazy"  src="{{asset('image/blueskypics/courses/NailExtensions.webp')}}" class="attachment-large size-large wp-image-3298" alt="Nail Extensions" title="Nail Extensions" srcset="{{asset('image/blueskypics/courses/NailExtensions.webp')}}">
						</div>
						<div class="textafteriamge">
							<h2 class="elementor-heading-title elementor-size-default">Nail Extensions</h2>
							<div class="contactusbutton" onclick="opencouponform('NailExtensions');"><span>Click for Details</span></div>
						</div>
					</div>
					<div class="elementor-widget-container sliderbox2 sliderboxescmmon">
						<div class="imagediv">
							<img width="1024" height="1024"  loading="lazy"  src="{{asset('image/blueskypics/courses/BasicWorkwithE-Filer.webp')}}" class="attachment-large size-large wp-image-3298" alt="Basic Work With E-filer" title="Basic Work With E-filer" srcset="{{asset('image/blueskypics/courses/BasicWorkwithE-Filer.webp')}}">
						</div>
						<div class="textafteriamge">
							<h2 class="elementor-heading-title elementor-size-default">Basic Work With E-filer</h2>
							<div class="contactusbutton" onclick="opencouponform('WorkwithEfilter');"><span>Click for Details</span></div>
						</div>
					</div>
					<div class="elementor-widget-container sliderbox2 sliderboxescmmon">
						<div class="imagediv">
							<img width="1024" height="1024"  loading="lazy"  src="{{asset('image/blueskypics/courses/GumGelextensions.webp')}}" class="attachment-large size-large wp-image-3298" alt="Gum Gel Extensions" title="Gum Gel Extensions" srcset="{{asset('image/blueskypics/courses/GumGelextensions.webp')}}">
						</div>
						<div class="textafteriamge">
							<h2 class="elementor-heading-title elementor-size-default">Gum Gel Extensions</h2>
							<div class="contactusbutton" onclick="opencouponform('GumGelExtensions');"><span>Click for Details</span></div>
						</div>
					</div>
			</div>
			<div class="imagewithslider FrenchGelPolish">
				<div class="elementor-widget-container sliderbox4 sliderboxescmmon">
					<div class="imagediv">
						<img width="1024" height="1021"  loading="lazy"  src="{{asset('image/blueskypics/courses/FrenshJelPolish.webp')}}" class="attachment-large size-large wp-image-3298" alt="French Gel Polish" title="French Gel Polish" srcset="{{asset('image/blueskypics/courses/FrenshJelPolish.webp')}}">
					</div>
					<div class="textafteriamge">
						<h2 class="elementor-heading-title elementor-size-default">French Gel Polish</h2>
						<div class="contactusbutton" onclick="opencouponform('frenchgelpolish');"><span>Click for Details</span></div>
					</div>
				</div>
				<div class="elementor-widget-container sliderbox5 sliderboxescmmon">
					<div class="imagediv">
						<img decoding="async" width="1024" height="1024"  loading="lazy"  src="{{asset('image/blueskypics/courses/NailStart.webp')}}" class="attachment-large size-large wp-image-3298" alt="Nail Start" title="Nail Start" srcset="{{asset('image/blueskypics/courses/NailStart.webp')}}">
					</div>
					<div class="textafteriamge">
						<h2 class="elementor-heading-title elementor-size-default">Nail Start</h2>
						<div class="contactusbutton" onclick="opencouponform('NailStart');"><span>Click for Details</span></div>
					</div>
				</div>
				<div class="elementor-widget-container sliderbox6 sliderboxescmmon">
					<div class="imagediv">
						<img  width="1024" height="1024"  loading="lazy"  src="{{asset('image/blueskypics/courses/4dGetNailArt.webp')}}" class="attachment-large size-large wp-image-3298" alt="4d Gel Nail Art" title="4d Gel Nail Art" srcset="{{asset('image/blueskypics/courses/4dGetNailArt.webp')}}">
					</div>
					<div class="textafteriamge">
						<h2 class="elementor-heading-title elementor-size-default">4d Gel Nail Art</h2>
						<div class="contactusbutton" onclick="opencouponform('DGelCertification');"><span>Click for Details</span></div>
					</div>
				</div>
				<div class="elementor-widget-container sliderbox6 sliderboxescmmon">
					<div class="imagediv">
						<img width="1024" height="1024"  loading="lazy"  src="{{asset('image/blueskypics/courses/CatEyeNailArt.webp')}}" class="attachment-large size-large wp-image-3298" alt="Cat Eye Nail Art" title="Cat Eye Nail Art" srcset="{{asset('image/blueskypics/courses/CatEyeNailArt.webp')}}">
					</div>
					<div class="textafteriamge">
						<h2 class="elementor-heading-title elementor-size-default">Cat Eye Nail Art</h2>
						<div class="contactusbutton" onclick="opencouponform('CatEyeCatNailArt');"><span>Click for Details</span></div>
					</div>
				</div>
				<div class="elementor-widget-container sliderbox6 sliderboxescmmon">
					<div class="imagediv">
						<img width="1024" height="1024"  loading="lazy"  src="{{asset('image/blueskypics/courses/ChromeNailArt.webp')}}" class="attachment-large size-large wp-image-3298" alt="Chrome Nail Art" title="Chrome Nail Art" srcset="{{asset('image/blueskypics/courses/ChromeNailArt.webp')}}">
					</div>
					<div class="textafteriamge">
						<h2 class="elementor-heading-title elementor-size-default">Chrome Nail Art</h2>
						<div class="contactusbutton" onclick="opencouponform('ChromeNailArt');"><span>Click for Details</span></div>
					</div>
				</div>
			</div>
			<div class="imagewithslider FrenchGelPolish">
				<div class="elementor-widget-container sliderbox4 sliderboxescmmon">
					<div class="imagediv">
						<img width="1024" height="1021"  loading="lazy"  src="{{asset('image/blueskypics/courses/rfere.webp')}}" class="attachment-large size-large wp-image-3298" alt="French Gel Polish" title="French Gel Polish" srcset="{{asset('image/blueskypics/courses/rfere.webp')}}">
					</div>
					<div class="textafteriamge">
						<h2 class="elementor-heading-title elementor-size-default">Nail Extensions Plus</h2>
						<div class="contactusbutton" onclick="opencouponform('NailExtensionsPlus');"><span>Click for Details</span></div>
					</div>
				</div>
				<div class="elementor-widget-container sliderbox5 sliderboxescmmon">
					<div class="imagediv">
						<img decoding="async" width="1024" height="1024"  loading="lazy"  src="{{asset('image/blueskypics/courses/gertgre-1-min.webp')}}" class="attachment-large size-large wp-image-3298" alt="Nail Start" title="Nail Start" srcset="{{asset('image/blueskypics/courses/gertgre-1-min.webp')}}">
					</div>
					<div class="textafteriamge">
						<h2 class="elementor-heading-title elementor-size-default">Russian Manicure</h2>
						<div class="contactusbutton" onclick="opencouponform('RussianManicure');"><span>Click for Details</span></div>
					</div>
				</div>
				<div class="elementor-widget-container sliderbox6 sliderboxescmmon">
					<div class="imagediv">
						<img  width="1024" height="1024"  loading="lazy"  src="{{asset('image/blueskypics/courses/vr_400x400.webp')}}" class="attachment-large size-large wp-image-3298" alt="4d Gel Nail Art" title="4d Gel Nail Art" srcset="{{asset('image/blueskypics/courses/vr_400x400.webp')}}">
					</div>
					<div class="textafteriamge">
						<h2 class="elementor-heading-title elementor-size-default">Soft Gel Extensions Certification</h2>
						<div class="contactusbutton" onclick="opencouponform('SoftGelExtensionsCertification');"><span>Click for Details</span></div>
					</div>
				</div>
				<div class="elementor-widget-container sliderbox6 sliderboxescmmon">
					<div class="imagediv">
						<img width="1024" height="1024"  loading="lazy"  src="{{asset('image/blueskypics/courses/Ombre-Nail-art.webp')}}" class="attachment-large size-large wp-image-3298" alt="Cat Eye Nail Art" title="Cat Eye Nail Art" srcset="{{asset('image/blueskypics/courses/Ombre-Nail-art.webp')}}">
					</div>
					<div class="textafteriamge">
						<h2 class="elementor-heading-title elementor-size-default">Ombre & Glaze Nail Art</h2>
						<div class="contactusbutton" onclick="opencouponform('OmbreGlazeNail');"><span>Click for Details</span></div>
					</div>
				</div>
				<div class="elementor-widget-container sliderbox6 sliderboxescmmon">
					<div class="imagediv">
						<img width="1024" height="1024"  loading="lazy"  src="{{asset('image/blueskypics/courses/etryey-2-min_1_50.webp')}}" class="attachment-large size-large wp-image-3298" alt="Chrome Nail Art" title="Chrome Nail Art" srcset="{{asset('image/blueskypics/courses/etryey-2-min_1_50.webp')}}">
					</div>
					<div class="textafteriamge">
						<h2 class="elementor-heading-title elementor-size-default">Gel Nail Art</h2>
						<div class="contactusbutton" onclick="opencouponform('GelNailArt');"><span>Click for Details</span></div>
					</div>
				</div>
			</div>
			
	</div>
</div>

<div class="whyusmain">
	<div class="whyusmaininner">
		<div class="whyusmaininnerheading">Why Us?</div>
		<div class="whyusmaininnerEmpower"><h2 class="elementor-heading-title elementor-size-default">Empower your Nail Art journey</h2></div>
		<div class="whyusmaininnerfourcolumn">
			<div class="box1 innerbox">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
								<span class="elementor-icon elementor-animation-bounce-in">
								<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 512 512"><path clip-rule="evenodd" d="m428.414 205.653c0-3.866 3.134-7 7-7s7 3.134 7 7v34.541c0 3.866-3.134 7-7 7s-7-3.134-7-7zm-41.078-57.216c-2.253-1.528-5.294-1.653-7.72-.077l-49.62 32.132c-4.385 2.785-4.334 9.033-.109 11.773l12.501 8.095v29.725c0 5.982 2.804 7.284 7.352 9.895l34.034 19.523 33.373-19.578c3.419-2.006 7.298-3.235 7.298-9.84v-29.726l12.392-8.024c4.385-2.785 4.334-9.033.109-11.773zm23.11 60.989v18.264l-26.752 15.693c-8.819-5.066-18.384-11.104-27.306-15.701v-18.255l23.109 14.965c2.253 1.528 5.294 1.653 7.72.077zm9.862-23.012-36.892 23.89-36.892-23.89 36.892-23.889zm-67.628-60.56c-27.729-8.941-54.043 17.373-45.102 45.102-22.64 11.636-26.393 42.619-6.775 59.22l-38.086 65.966c-3.598 5.807 1.719 12.165 7.595 10.617l38.688-10.206 10.506 38.612c1.61 5.93 9.688 7.038 12.797 1.641l27.439-47.525c4.42 4.249 9.906 7.354 15.938 8.902v49.214h-302.749c-1.234 0-2.458.042-3.671.125v-278.791h306.418v38.743c-9.932 2.548-18.33 9.296-22.998 18.38zm36.998-19.129v-44.994c0-3.866-3.134-7-7-7h-320.418c-29.304 0-53.254 23.95-53.254 53.254v264.912c0 46.55 38.086 84.371 84.371 84.371h289.301c3.866 0 7-3.134 7-7v-151.337c6.417-.927 12.196-3.529 17.086-7.382l25.474 44.123c3.085 5.356 11.151 4.314 12.77-1.648l10.533-38.605 38.688 10.206c5.876 1.548 11.193-4.81 7.595-10.617l-36.231-62.754c22.278-15.482 19.917-48.97-4.067-61.299 8.94-27.73-17.372-54.043-45.102-45.102-5.264-10.239-15.228-17.464-26.746-19.128zm72.541 147.564 19.374 33.557-28.777-7.592c-4.057-1.204-7.923.984-8.962 4.808l-7.924 29.124-19.671-34.071.164-.314c19.682 6.347 40.823-5.264 45.796-25.512zm-113.723 26.588-19.886 34.444-7.924-29.124c-1.012-3.73-4.856-5.934-8.586-4.922l-29.152 7.705 23.055-39.931c1.969 21.156 21.776 35.838 42.493 31.828zm22.6-155.913c-7.105 5.559-7.031 11.391-8.545 13.903-1.993 3.307-6.29 4.372-9.598 2.379-13.509-8.152-31.04.366-32.951 16.035-.583 4.78.4 9.714 2.96 13.953 2.425 4.026.25 9.263-4.314 10.387-15.404 3.794-21.628 22.308-11.961 34.663 5.558 7.104 11.391 7.032 13.903 8.546 3.307 1.993 4.372 6.29 2.379 9.597-8.152 13.51.366 31.04 16.035 32.951 4.779.583 9.714-.4 13.953-2.96 4.026-2.425 9.263-.25 10.387 4.314 3.81 15.466 22.368 21.581 34.663 11.961 7.104-5.558 7.031-11.39 8.546-13.903 1.993-3.307 6.29-4.372 9.598-2.379 13.51 8.152 31.039-.366 32.951-16.036.583-4.78-.399-9.714-2.96-13.953-2.425-4.026-.25-9.263 4.314-10.387 15.404-3.795 21.628-22.307 11.961-34.663-5.559-7.104-11.391-7.031-13.903-8.545-3.307-1.993-4.372-6.29-2.379-9.598 8.152-13.51-.366-31.04-16.035-32.951-4.78-.583-9.714.4-13.953 2.96-4.026 2.425-9.263.25-10.387-4.314-3.819-15.497-22.397-21.557-34.664-11.96zm-347.247 258.784c-.554-3.539-.843-7.163-.843-10.851v-264.912c0-19.054 13.85-35.27 32.254-38.623v281.077c-15.072 5.419-26.562 17.553-31.411 33.309zm351.83-22.352v81.873h-282.301c-16.813 0-32.996-6.173-45.002-16.387-25.721-21.882-10.57-65.486 24.555-65.486z" fill-rule="evenodd"></path></svg></span>
							</div>
							<div class="elementor-icon-box-content">
							<h3 class="elementor-icon-box-title">
								<span> Global Curriculum </span>
							</h3>
							<p class="elementor-icon-box-description"> Elevate your nail skills with our comprehensive certification path.</p>
							</div>
					</div>
				</div>
				</div>
			<div class="box2 innerbox">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
								<span class="elementor-icon elementor-animation-bounce-in">
								<svg xmlns="http://www.w3.org/2000/svg" height="512pt" viewBox="0 -63 512 512" width="512pt"><path d="m427.214844 176.214844c0-4.144532-3.355469-7.5-7.5-7.5h-256.953125c-4.144531 0-7.5 3.355468-7.5 7.5 0 4.140625 3.355469 7.5 7.5 7.5h256.953125c4.140625 0 7.5-3.359375 7.5-7.5zm0 0"></path><path d="m90.078125 183.714844h37.785156c4.144531 0 7.5-3.359375 7.5-7.5 0-4.144532-3.355469-7.5-7.5-7.5h-37.785156c-4.140625 0-7.5 3.355468-7.5 7.5 0 4.140625 3.359375 7.5 7.5 7.5zm0 0"></path><path d="m318.582031 218.929688c0-4.144532-3.359375-7.5-7.5-7.5h-221.003906c-4.140625 0-7.5 3.355468-7.5 7.5 0 4.140624 3.359375 7.5 7.5 7.5h221.003906c4.140625 0 7.5-3.359376 7.5-7.5zm0 0"></path><path d="m90.078125 254.144531c-4.140625 0-7.5 3.355469-7.5 7.5 0 4.140625 3.359375 7.5 7.5 7.5h211.355469c4.144531 0 7.5-3.359375 7.5-7.5 0-4.144531-3.355469-7.5-7.5-7.5zm0 0"></path><path d="m455.886719 323.976562c-4.144531 0-7.5 3.359376-7.5 7.5 0 4.144532 3.355469 7.5 7.5 7.5h13.351562c7.902344 0 14.332031-6.425781 14.332031-14.328124v-281.886719c0-7.902344-6.429687-14.332031-14.332031-14.332031h-426.476562c-7.902344 0-14.332031 6.429687-14.332031 14.332031v281.886719c0 7.902343 6.429687 14.332031 14.332031 14.332031h278.5625c4.140625 0 7.5-3.359375 7.5-7.5 0-4.144531-3.359375-7.5-7.5-7.5h-277.894531v-280.550781h425.140624v280.550781h-12.683593zm0 0"></path><path d="m496.953125 0h-481.90625c-8.296875 0-15.046875 6.75-15.046875 15.046875v337.3125c0 8.296875 6.75 15.046875 15.046875 15.046875h306.273437c4.144532 0 7.5-3.355469 7.5-7.5 0-4.140625-3.355468-7.5-7.5-7.5l-306.320312-.046875.046875-337.359375 481.953125.046875-.046875 337.359375h-41.066406c-4.144531 0-7.5 3.359375-7.5 7.5 0 4.144531 3.355469 7.5 7.5 7.5h41.066406c8.296875 0 15.046875-6.75 15.046875-15.042969v-337.316406c0-8.296875-6.75-15.046875-15.046875-15.046875zm0 0"></path><path d="m388.605469 246.527344c-16.691407 0-30.273438 13.578125-30.273438 30.269531s13.578125 30.269531 30.273438 30.269531c16.691406 0 30.269531-13.578125 30.269531-30.269531s-13.578125-30.269531-30.269531-30.269531zm0 45.539062c-8.421875 0-15.273438-6.847656-15.273438-15.269531 0-8.417969 6.851563-15.269531 15.273438-15.269531 8.417969 0 15.269531 6.847656 15.269531 15.269531s-6.851562 15.269531-15.269531 15.269531zm0 0"></path><path d="m447.980469 279.34375c-1.140625-1.621094-1.140625-3.796875 0-5.417969 3.613281-5.121093 4.574219-11.480469 2.636719-17.441406s-6.449219-10.539063-12.382813-12.558594c-1.878906-.640625-3.15625-2.402343-3.183594-4.386719-.089843-6.265624-3.050781-11.972656-8.121093-15.65625-5.070313-3.6875-11.414063-4.738281-17.402344-2.882812-1.894532.585938-3.964844-.089844-5.148438-1.675781-3.757812-5.019531-9.507812-7.894531-15.773437-7.894531-6.269531 0-12.019531 2.878906-15.773438 7.894531-1.1875 1.585937-3.257812 2.261719-5.152343 1.675781-5.988282-1.855469-12.332032-.800781-17.402344 2.882812-5.070313 3.683594-8.027344 9.390626-8.117188 15.660157-.027344 1.980469-1.308594 3.742187-3.183594 4.382812-5.933593 2.019531-10.449218 6.597657-12.386718 12.558594s-.976563 12.320313 2.636718 17.441406c1.144532 1.621094 1.144532 3.796875 0 5.417969-3.609374 5.121094-4.570312 11.480469-2.636718 17.441406 1.9375 5.960938 6.453125 10.539063 12.386718 12.558594 1.875.640625 3.15625 2.398438 3.183594 4.382812.078125 5.59375 2.449219 10.734376 6.5625 14.398438v46.398438c0 4.078124 2.28125 7.71875 5.949219 9.5 1.480469.714843 3.058594 1.066406 4.621094 1.066406 2.316406 0 4.609375-.773438 6.519531-2.28125l22.792969-17.988282 22.789062 17.988282c3.203125 2.527344 7.472657 2.992187 11.144531 1.210937 3.671876-1.777343 5.953126-5.417969 5.953126-9.496093v-46.402344c4.109374-3.660156 6.480468-8.800782 6.558593-14.394532.027344-1.984374 1.308594-3.746093 3.1875-4.382812 5.933594-2.023438 10.445313-6.601562 12.382813-12.5625 1.933594-5.957031.972656-12.316406-2.640625-17.4375zm-34.492188 86.007812-18.347656-14.480468c-3.847656-3.035156-9.226563-3.035156-13.078125 0l-18.34375 14.480468v-32.289062c1.324219-.128906 2.652344-.386719 3.960938-.792969 1.894531-.585937 3.964843.085938 5.148437 1.671875 3.757813 5.019532 9.507813 7.898438 15.773437 7.898438 6.269532 0 12.019532-2.878906 15.773438-7.898438 1.1875-1.585937 3.257812-2.257812 5.152344-1.671875 1.308594.40625 2.632812.664063 3.960937.792969zm22.863281-73.203124c-.269531.835937-1.015624 2.335937-2.953124 2.996093-7.867188 2.679688-13.230469 10.0625-13.347657 18.371094-.027343 2.046875-1.226562 3.21875-1.9375 3.734375-.125.089844-.28125.1875-.449219.285156-.117187.058594-.234374.117188-.351562.183594-.804688.378906-1.953125.652344-3.351562.21875-7.9375-2.453125-16.617188.367188-21.59375 7.019531-1.226563 1.636719-2.886719 1.882813-3.765626 1.882813-.878906 0-2.535156-.246094-3.761718-1.882813-3.78125-5.054687-9.695313-7.894531-15.796875-7.894531-1.933594 0-3.886719.285156-5.796875.875-1.394532.433594-2.542969.160156-3.351563-.21875-.117187-.066406-.238281-.125-.359375-.1875-.167968-.09375-.320312-.191406-.445312-.28125-.710938-.515625-1.90625-1.6875-1.9375-3.734375-.117188-8.308594-5.476563-15.691406-13.34375-18.371094-1.941406-.660156-2.6875-2.160156-2.957032-2.996093-.269531-.835938-.550781-2.488282.628907-4.164063 4.789062-6.789063 4.789062-15.914063 0-22.703125-1.179688-1.675781-.898438-3.328125-.628907-4.164062.269532-.835938 1.015626-2.335938 2.957032-2.996094 7.863281-2.679688 13.226562-10.0625 13.34375-18.371094.03125-2.046875 1.226562-3.21875 1.9375-3.734375.710937-.515625 2.191406-1.292969 4.152344-.6875 7.9375 2.457031 16.617187-.363281 21.597656-7.015625 1.226562-1.640625 2.882812-1.886719 3.761718-1.886719.878907 0 2.535157.246094 3.761719 1.886719 4.980469 6.652344 13.660157 9.46875 21.597657 7.015625 1.953124-.605469 3.4375.171875 4.152343.6875.710938.515625 1.90625 1.6875 1.9375 3.734375.113281 8.308594 5.476563 15.691406 13.347657 18.371094 1.9375.660156 2.679687 2.160156 2.953124 2.996094.269532.835937.550782 2.488281-.628906 4.164062-4.789062 6.789062-4.789062 15.914062 0 22.707031 1.179688 1.671875.902344 3.324219.628906 4.160157zm0 0"></path><path d="m305.230469 94.148438c-1.1875-3.648438-4.285157-6.246094-8.085938-6.78125l-18.628906-2.609376-8.238281-16.910156s0 0 0-.003906c-1.683594-3.445312-5.109375-5.589844-8.949219-5.589844-3.835937.003906-7.265625 2.144532-8.945313 5.59375l-8.238281 16.910156-18.628906 2.609376c-3.800781.535156-6.898437 3.132812-8.085937 6.78125-1.1875 3.652343-.207032 7.574218 2.554687 10.238281l13.539063 13.0625-3.277344 18.527343c-.664063 3.777344.847656 7.527344 3.953125 9.78125 3.105469 2.257813 7.140625 2.539063 10.527343.734376l16.601563-8.835938 16.609375 8.835938c1.480469.789062 3.085938 1.179687 4.683594 1.179687 2.054687 0 4.097656-.644531 5.84375-1.914063 3.105468-2.257812 4.617187-6.007812 3.949218-9.785156l-3.273437-18.523437 13.535156-13.058594c2.761719-2.667969 3.742188-6.589844 2.554688-10.242187zm-28.441407 14.375c-2.386718 2.304687-3.464843 5.628906-2.886718 8.890624l1.9375 10.96875-9.835938-5.234374c-1.464844-.777344-3.066406-1.164063-4.675781-1.164063-1.605469 0-3.210937.386719-4.675781 1.167969l-9.832032 5.230468 1.9375-10.972656c.574219-3.261718-.503906-6.585937-2.890624-8.890625l-8.015626-7.734375 11.03125-1.546875c3.28125-.460937 6.113282-2.515625 7.566407-5.496093l4.878906-10.015626 4.878906 10.015626c1.453125 2.980468 4.28125 5.035156 7.566407 5.496093l11.03125 1.546875zm0 0"></path></svg></span>
							</div>
							<div class="elementor-icon-box-content">
							<h3 class="elementor-icon-box-title">
								<span>Certification</span>
							</h3>
							<p class="elementor-icon-box-description">Achieve expertise through our structured certification journey.</p>
							</div>
					</div>
				</div> 
			</div>
			<div class="box3 innerbox">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
								<span class="elementor-icon elementor-animation-bounce-in">
								<svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="512" viewBox="0 0 512 512" width="512"><path d="m255.107 65.06c5.562 0 10.071-4.509 10.071-10.071v-44.918c0-5.562-4.509-10.071-10.071-10.071s-10.071 4.509-10.071 10.071v44.918c.001 5.562 4.51 10.071 10.071 10.071z"></path><path d="m501.28 345.985-17.791-17.741c-6.329-6.321-14.764-9.803-23.752-9.803-5.747 0-11.264 1.43-16.153 4.109l-33.526-33.486 1.633-1.631c13.601-13.628 13.596-35.773-.001-49.355-4.859-4.868-10.922-8.114-17.531-9.48.91-3.141 1.389-6.431 1.389-9.798 0-9.355-3.634-18.127-10.212-24.678-4.86-4.868-10.922-8.114-17.531-9.48.91-3.141 1.389-6.43 1.389-9.798 0-9.356-3.634-18.127-10.223-24.688-4.976-4.97-11.093-8.116-17.516-9.455 3.436-11.847.5-25.176-8.82-34.512-7.758-7.725-18.285-11.045-28.43-9.969l-66.435-12.575c-10.132-1.922-22.785-3.193-30.772 4.092-.504.46-1.018.989-1.524 1.578-12.384-4.514-26.828-1.826-36.745 8.08-6.579 6.571-10.203 15.339-10.203 24.689 0 3.368.477 6.657 1.386 9.799-6.602 1.365-12.657 4.607-17.5 9.459-6.592 6.565-10.227 15.323-10.234 24.662-.003 3.376.476 6.676 1.39 9.826-6.605 1.362-12.664 4.598-17.522 9.45-6.592 6.585-10.222 15.358-10.222 24.703 0 7.158 2.137 13.977 6.097 19.737-5 1.695-9.58 4.516-13.415 8.347-13.61 13.593-13.615 35.739.009 49.387l1.627 1.62-33.53 33.469c-12.461-5.867-27.814-3.669-38.097 6.601l-17.802 17.752c-6.332 6.324-9.818 14.76-9.819 23.753 0 8.994 3.487 17.431 9.819 23.756l22.217 22.19c3.935 3.931 10.312 3.927 14.242-.008 3.931-3.935 3.927-10.312-.008-14.242l-22.217-22.19c-2.522-2.519-3.911-5.895-3.911-9.505 0-3.609 1.389-6.984 3.905-9.497l17.803-17.753c4.448-4.443 11.256-5.105 16.426-2.014.364.547.785 1.067 1.267 1.55.863.865 1.848 1.528 2.894 2.013l102.093 101.943c.485 1.057 1.151 2.052 2.02 2.922.846.847 1.811 1.502 2.835 1.984 2.159 2.441 3.352 5.559 3.352 8.885 0 3.61-1.389 6.985-3.911 9.504l-17.785 17.764c-5.255 5.232-13.803 5.231-19.042.016l-22.217-22.219c-3.933-3.933-10.309-3.933-14.242 0s-3.933 10.309 0 14.242l22.233 22.235c6.544 6.517 15.138 9.774 23.736 9.774 8.6 0 17.204-3.262 23.756-9.785l17.796-17.775c6.332-6.325 9.819-14.761 9.819-23.756 0-6.419-1.785-12.549-5.104-17.835l37.736-37.69c.04-.041.08-.082.121-.123 4.321-4.467 16.354-3.631 27.991-2.823 8.268.575 17.486 1.214 26.492.176l41.324 41.275c-2.677 4.881-4.106 10.391-4.106 16.129 0 8.985 3.487 17.416 9.819 23.741l17.797 17.775c6.328 6.321 14.763 9.803 23.751 9.803 8.987 0 17.422-3.481 23.751-9.803l107.941-107.81c6.332-6.324 9.819-14.76 9.819-23.754-.001-8.993-3.488-17.429-9.826-23.759zm-267.26-242.55 43.687 8.269-26.149 26.139c-4.045-1.944-9.589-5.57-15.671-11.388-8.325-7.964-14.28-17.159-14.822-22.894-.001-.003-.001-.006-.001-.009 0-.001-.001-.002-.001-.003-.039-.412-.049-.741-.044-.992 1.317-.32 4.815-.675 13.001.878zm-51.058 8.211c5.102-5.097 13.028-5.685 18.793-1.781 3.267 13.698 14.952 26.113 20.209 31.143 3.896 3.728 16.397 14.905 29.015 17.977 1.707 2.447 2.636 5.364 2.636 8.442 0 3.965-1.525 7.672-4.304 10.448-2.771 2.776-6.484 4.304-10.456 4.304-3.973 0-7.686-1.528-10.47-4.317l-.001-.001-.005-.005-45.418-45.336c-2.769-2.765-4.294-6.472-4.294-10.436.001-3.965 1.526-7.672 4.295-10.438zm-26.316 43.947c2.771-2.775 6.48-4.304 10.446-4.304 3.971 0 7.692 1.532 10.481 4.318l36.572 36.499c5.759 5.768 5.759 15.154.02 20.902-2.786 2.775-6.512 4.303-10.491 4.303s-7.705-1.528-10.479-4.291l-.001-.001-27.745-27.739c-.043-.043-.09-.083-.134-.127l-8.68-8.676c-2.785-2.782-4.318-6.496-4.315-10.458.004-3.949 1.532-7.644 4.326-10.426zm-26.366 43.938c2.773-2.769 6.49-4.294 10.468-4.294 3.945 0 7.63 1.503 10.391 4.224l27.83 27.817c2.775 2.764 4.304 6.467 4.304 10.427 0 3.959-1.529 7.662-4.315 10.437-2.772 2.768-6.485 4.293-10.456 4.293-3.977 0-7.702-1.529-10.478-4.293l-10.089-10.077c-.002-.003-.005-.005-.007-.007l-17.647-17.626c-2.782-2.779-4.314-6.491-4.314-10.451 0-3.959 1.532-7.672 4.313-10.45zm-17.54 52.786c2.785-2.782 6.507-4.314 10.48-4.314 3.972 0 7.693 1.531 10.477 4.311l10.103 10.091c2.776 2.764 4.304 6.467 4.304 10.427s-1.529 7.662-4.325 10.448c-2.771 2.775-6.484 4.304-10.456 4.304-3.973 0-7.686-1.528-10.477-4.324l-1.265-1.26c-.017-.017-.03-.035-.046-.051-.019-.018-.039-.034-.058-.052l-8.727-8.693c-5.759-5.771-5.764-15.14-.01-20.887zm205.234 114.458c-3.931-3.936-10.308-3.939-14.242-.009l-8.96 8.949c-8.514 8.514-23.941 7.442-38.86 6.407-16.201-1.126-32.954-2.288-43.795 8.842l-37.095 37.05-92.763-92.627 32.828-32.769c5.426 3.326 11.687 5.109 18.238 5.109 9.359 0 18.135-3.628 24.69-10.195 6.599-6.572 10.234-15.343 10.234-24.699 0-.087-.006-.173-.006-.26.087.001.174.006.261.006 9.346 0 18.115-3.617 24.679-10.173 6.599-6.572 10.234-15.344 10.234-24.699 0-.087-.006-.173-.006-.26.088 0 .176.006.265.006 9.343 0 18.117-3.613 24.725-10.194 6.86-6.871 10.253-15.917 10.188-24.944.09.001.18.006.27.006 9.359-.001 18.134-3.628 24.699-10.205 6.579-6.571 10.203-15.339 10.203-24.689 0-6.539-1.778-12.79-5.093-18.205l28.773-28.761c2.144-2.135 4.788-3.475 7.559-4.028.3-.032.596-.08.889-.138 4.446-.613 9.115.759 12.515 4.145 5.759 5.769 5.759 15.155.021 20.903l-8.763 8.727c-.029.029-.06.055-.089.084l-10.093 10.076c-3.936 3.93-3.94 10.307-.009 14.242 3.932 3.936 10.308 3.939 14.242.009l8.798-8.786c.002-.002.004-.004.006-.006l1.33-1.325c5.775-5.722 15.131-5.71 20.9.051 2.776 2.764 4.305 6.467 4.305 10.427 0 3.959-1.529 7.662-4.327 10.448l-8.813 8.831c-.001.001-.002.002-.003.004l-10.092 10.051c-3.941 3.925-3.954 10.302-.029 14.242 3.925 3.941 10.301 3.953 14.242.029l10.138-10.097c2.771-2.776 6.484-4.304 10.456-4.304 3.973 0 7.687 1.528 10.478 4.324 2.776 2.765 4.304 6.468 4.304 10.428 0 3.959-1.528 7.662-4.32 10.442l-17.57 17.577c-3.932 3.934-3.931 10.31.002 14.242 1.967 1.966 4.543 2.948 7.12 2.948 2.578 0 5.156-.984 7.122-2.951l8.611-8.614c.049-.047.102-.088.151-.137 2.771-2.776 6.484-4.304 10.456-4.304 3.973 0 7.686 1.528 10.467 4.314 5.753 5.747 5.748 15.117 0 20.875l-8.755 8.745c-.003.003-.007.006-.01.009s-.006.007-.009.01l-13.896 13.879c-3.935 3.931-3.939 10.308-.009 14.243 1.967 1.969 4.547 2.954 7.126 2.954 2.575 0 5.151-.982 7.117-2.945l6.797-6.789 32.577 32.539-92.755 92.642-33.234-33.194c2.317-1.49 4.534-3.242 6.615-5.323l8.955-8.944c3.937-3.929 3.941-10.306.01-14.241zm169.078 12.472-107.941 107.81c-2.525 2.522-5.905 3.911-9.517 3.911s-6.992-1.389-9.518-3.912l-17.797-17.775c-2.522-2.518-3.911-5.888-3.911-9.489 0-3.6 1.389-6.97 3.911-9.489l107.941-107.81c2.526-2.523 5.905-3.912 9.518-3.912 3.612 0 6.992 1.389 9.524 3.918l17.791 17.741c2.522 2.519 3.911 5.893 3.911 9.503-.001 3.611-1.39 6.986-3.912 9.504z"></path><path d="m121.378 56.57c1.966 1.962 4.54 2.942 7.114 2.942 2.58 0 5.161-.986 7.128-2.957 3.929-3.937 3.923-10.313-.014-14.242l-36.698-36.625c-3.936-3.929-10.313-3.924-14.242.014-3.929 3.937-3.923 10.313.014 14.242z"></path><path d="m381.722 59.512c2.575 0 5.151-.982 7.117-2.945l36.67-36.626c3.935-3.93 3.939-10.307.008-14.242-3.93-3.935-10.306-3.939-14.242-.008l-36.67 36.626c-3.935 3.93-3.939 10.307-.008 14.242 1.967 1.969 4.546 2.953 7.125 2.953z"></path><path d="m62.819 433.204c-3.899 3.966-3.845 10.343.122 14.242l.029.028c1.957 1.924 4.498 2.882 7.038 2.882 2.607 0 5.214-1.009 7.189-3.018 3.899-3.966 3.83-10.357-.136-14.256-3.965-3.899-10.341-3.844-14.242.122z"></path><path d="m342.606 352.267c1.532 0 3.086-.349 4.545-1.084 4.966-2.505 6.961-8.561 4.457-13.527-2.505-4.966-8.562-6.962-13.527-4.457l-.056.028c-4.966 2.505-6.933 8.547-4.429 13.513 1.768 3.508 5.324 5.527 9.01 5.527z"></path></svg></span>
							</div>
							<div class="elementor-icon-box-content">
							<h3 class="elementor-icon-box-title">
								<span>Job Assistance</span>
							</h3>
							<p class="elementor-icon-box-description">We provide unwavering assistance for your nail art training needs.</p>
							</div>
					</div>
				</div>
			</div>
			<div class="box4 innerbox">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
								<span class="elementor-icon elementor-animation-bounce-in">
								<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 512 512" data-name="Layer 1"><path d="m499.156 244.039c4.835-4.732 7.844-11.324 7.844-18.608 0-12.3-8.571-22.628-20.052-25.346v-49.17l5.033-1.349c6.18-1.655 10.331-7.065 10.331-13.461s-4.151-11.807-10.331-13.462l-175.406-47c-7.715-2.067-14.903-2.067-22.62 0l-175.405 47c-6.179 1.656-10.33 7.065-10.33 13.462s4.151 11.806 10.33 13.461l63.475 17.008v41.836c-.847.147-1.699.324-2.562.556-1.029.276-2.016.6-2.965.968l-86.498-64.31c-1.048-.937-2.179-1.773-3.408-2.483-9.005-5.202-21.058-3.12-33.932 5.86-11.562 8.065-22.834 21.002-31.74 36.428-8.905 15.426-14.473 31.656-15.677 45.702-1.34 15.639 2.882 27.115 11.89 32.315 1.235.713 2.528 1.288 3.872 1.728l100.751 43.544c.012.046.021.092.033.138.647 2.417 1.559 4.603 2.723 6.583l-39.376 27.297c-1.958 1.356-2.927 3.742-2.471 6.08s2.252 4.184 4.575 4.705l21.521 4.827-.878 22.038c-.095 2.38 1.227 4.591 3.368 5.634.835.406 1.733.605 2.626.605 1.396 0 2.778-.486 3.885-1.427l36.512-31.013c1.58 1.579 3.41 2.979 5.515 4.195 2.167 1.251 4.358 2.152 6.58 2.729l-8.541 47.146c-.424 2.343.577 4.716 2.553 6.046 1.978 1.331 4.554 1.367 6.562.092l18.631-11.805 14.963 16.205c1.156 1.252 2.764 1.93 4.409 1.93.654 0 1.315-.107 1.955-.328 2.252-.776 3.831-2.812 4.024-5.185l3.888-47.738c2.233 0 4.519-.316 6.866-.945.046-.012.09-.028.136-.04l90.933 67.599c.187.139.381.267.582.383 4.038 2.328 8.54 3.437 13.314 3.437 18.459 0 40.983-16.58 56.452-43.374 8.966-15.53 14.115-32.133 14.498-46.749.418-15.935-4.84-27.879-14.803-33.631-.2-.115-.407-.22-.62-.312l-68.174-29.459c40.294-1.397 78.71-12.452 111.595-32.19 1.807-1.084 2.912-3.038 2.912-5.145v-80.473l46.441-12.444v45.954c-11.48 2.718-20.051 13.047-20.051 25.346 0 7.767 3.421 14.746 8.83 19.523l-2.969 6.38c-3.037 6.525-4.451 12.916-4.451 20.111v31.456c0 9.326 7.587 16.913 16.913 16.913h16.868c9.325 0 16.912-7.587 16.912-16.913v-31.456c0-7.198-1.414-13.589-4.45-20.111l-3.394-7.295zm-378.936-107.934c0-.931.536-1.63 1.436-1.871l175.405-47c2.837-.76 5.521-1.14 8.205-1.14s5.367.38 8.204 1.14l175.406 47c.899.241 1.437.94 1.437 1.871s-.537 1.629-1.437 1.871l-8.449 2.264-169.041-15.281c-3.304-.301-6.218 2.135-6.516 5.436-.299 3.3 2.135 6.217 5.436 6.516l136.498 12.339-133.334 35.727c-5.674 1.521-10.733 1.521-16.409 0l-175.405-47c-.899-.241-1.436-.94-1.436-1.871zm9.054 135.075c2.226 4.856 1.548 10.002-1.859 14.118-2.776 3.355-4.656 6.789-5.672 10.342l-77.93-33.681c2.378-1.207 4.8-2.662 7.253-4.373 11.562-8.065 22.835-21.002 31.741-36.428 8.905-15.425 14.474-31.656 15.677-45.702.255-2.973.306-5.793.164-8.451l67.74 50.364c-1.825 2.317-3.329 5.056-4.515 8.247-1.861 5.008-5.979 8.167-11.298 8.668-9.476.894-16.227 5.042-20.638 12.682-4.41 7.64-4.627 15.56-.663 24.212zm-53.572-118.839c1.777 0 3.355.371 4.7 1.101l1.903 1.415c3.479 3.44 5.01 10.388 4.223 19.577-1.057 12.329-6.068 26.792-14.113 40.726-15.867 27.482-36.738 41.663-47.298 38.721l-2.121-.917c-2.169-1.313-3.789-3.698-4.807-6.936 1.816.749 3.774 1.122 5.845 1.122 5.448 0 11.684-2.57 18.21-7.602 8.365-6.45 16.712-16.478 23.501-28.238 12.885-22.318 18.843-48.971 6.309-58.521 1.287-.293 2.509-.446 3.649-.446zm-20.351 52.967c-6.024 10.435-13.282 19.219-20.436 24.735-6.112 4.713-10.658 5.78-12.45 4.744-1.792-1.035-3.142-5.503-2.116-13.154 1.2-8.953 5.179-19.63 11.203-30.065 12.123-20.997 25.592-29.857 31.215-29.857.676 0 1.238.128 1.671.378 4.038 2.333 4.491 19.702-9.087 43.22zm65.068 161.892.532-13.371c.115-2.896-1.854-5.46-4.682-6.094l-13.058-2.929 30.021-20.812c1.585.927 3.314 1.749 5.209 2.453 5.007 1.86 8.166 5.978 8.667 11.296.197 2.091.562 4.041 1.079 5.87l-27.769 23.587zm79.657 33.405-9.078-9.832c-1.965-2.129-5.172-2.549-7.619-.998l-11.304 7.162 6.512-35.945c1.776-.465 3.579-1.106 5.416-1.948 4.857-2.226 10.003-1.549 14.118 1.859 1.617 1.338 3.255 2.444 4.912 3.372l-2.958 36.329zm5.697-48.946c-4.726-3.911-10.324-5.915-16.046-5.915-3.588 0-7.225.789-10.722 2.391-5.135 2.352-8.963 2.311-13.216-.146s-6.204-5.75-6.733-11.371c-.937-9.937-7.08-17.944-16.436-21.419-5.292-1.967-7.97-4.703-9.24-9.447-1.271-4.743-.321-8.453 3.278-12.803 6.364-7.688 7.681-17.695 3.524-26.768-2.353-5.133-2.31-8.962.146-13.215s5.75-6.204 11.371-6.734c9.937-.936 17.943-7.08 21.42-16.436 1.966-5.292 4.703-7.969 9.448-9.24 4.743-1.272 8.451-.321 12.801 3.279 7.688 6.363 17.693 7.681 26.768 3.524 5.133-2.352 8.96-2.312 13.215.146 4.254 2.456 6.205 5.75 6.734 11.372.937 9.935 7.081 17.943 16.437 21.42 5.292 1.965 7.969 4.702 9.239 9.446 1.271 4.743.321 8.453-3.278 12.803-6.363 7.688-7.681 17.694-3.524 26.768 2.352 5.133 2.31 8.962-.146 13.215s-5.75 6.204-11.372 6.733c-9.936.938-17.942 7.081-21.419 16.437-1.966 5.291-4.703 7.969-9.447 9.239-4.744 1.272-8.451.322-12.802-3.278zm179.827-4.189c-.331 12.652-4.91 27.235-12.895 41.063-17.052 29.537-41.103 42.208-53.105 35.695l-86.449-64.267c2.569-2.657 4.603-6.003 6.119-10.085 1.861-5.007 5.979-8.166 11.297-8.668 9.477-.894 16.227-5.041 20.639-12.682 4.41-7.64 4.627-15.56.663-24.212-2.226-4.856-1.548-10.003 1.859-14.118 2.17-2.623 3.79-5.295 4.883-8.034l98.452 42.543c5.718 3.497 8.825 11.768 8.537 22.764zm30.906-103.851c-32.762 18.93-71.146 28.919-111.241 28.919-6.942 0-13.935-.315-20.805-.92l-4.463-1.929c-.155-1.006-.368-2.023-.644-3.052-2.284-8.522-7.73-14.276-16.652-17.589-5.008-1.861-8.167-5.979-8.668-11.297-.894-9.477-5.041-16.227-12.682-20.639-7.64-4.41-15.56-4.628-24.213-.662-4.857 2.225-10.002 1.547-14.118-1.86-2.93-2.424-5.92-4.161-8.996-5.242v-39.559l99.931 26.776c3.858 1.034 7.584 1.551 11.311 1.551s7.452-.517 11.31-1.551l99.932-26.777v73.829zm64.441-32.239c7.748 0 14.052 6.303 14.052 14.051s-6.304 14.051-14.052 14.051-14.051-6.303-14.051-14.051 6.303-14.051 14.051-14.051zm14.052 91.522c0 2.709-2.203 4.913-4.912 4.913h-16.868c-2.709 0-4.913-2.204-4.913-4.913v-31.456c0-5.458 1.027-10.099 3.33-15.048l2.686-5.772c2.117.557 4.336.857 6.625.857 2.742 0 5.384-.428 7.868-1.217l2.854 6.133c2.303 4.947 3.33 9.588 3.33 15.048v31.456zm-257.726 6.036c11.684-20.237 4.725-46.208-15.513-57.893-9.804-5.661-21.227-7.165-32.159-4.234-10.936 2.93-20.074 9.943-25.734 19.747-11.684 20.238-4.725 46.208 15.513 57.893 6.53 3.77 13.778 5.696 21.122 5.696 3.681 0 7.387-.484 11.037-1.462 10.935-2.931 20.073-9.943 25.734-19.747zm-10.393-6c-4.058 7.028-10.609 12.056-18.447 14.156-7.842 2.101-16.027 1.022-23.054-3.036s-12.055-10.608-14.155-18.447c-2.101-7.838-1.022-16.025 3.035-23.053 4.058-7.028 10.608-12.056 18.447-14.156 2.617-.702 5.273-1.048 7.913-1.048 5.264 0 10.46 1.381 15.141 4.083 14.508 8.375 19.496 26.993 11.12 41.5z"></path></svg></span>
							</div>
							<div class="elementor-icon-box-content">
							<h3 class="elementor-icon-box-title">
								<span>Latest trends</span>
							</h3>
							<p class="elementor-icon-box-description">Join the ranks of our delighted and accomplished nail art graduates.</p>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="NailAboutus" id="aboutus">
	<div class="NailAboutusinner">
		<div class="twocolumnsabout">
			<div class="twocolumnsaboutinnder aboutsusbox1">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default headingmain">About Us</h2>
				</div>
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default headingmaisub">Our Commitment to the Nail Excellence</h2>		
				</div>
				<div class="aboutscontent">
					My name is Dina Umarova, I am the Founder of Bluesky Nail Academy in India, Bluesky Ambassador Asia Pacific and Judge at the HBS Nailathon Show. Our Academy was founded in 2018 in Mumbai and we have  trained more than 550 students through online & offline nail courses.
				</div>
				<div class="elementor-widget-container Aboutuscontainer">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
							<span class="elementor-icon elementor-animation-">
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" viewBox="0 0 512 512"><path d="m496.94 331.85c-.34-2.38-2.06-4.33-4.39-4.96l-75.05-20.11v-22.23c0-3.11-2.37-5.7-5.46-5.98-15.16-1.36-30.5-2.53-45.67-3.49-5.84-13.7-14.33-26.52-25.48-37.68-46.8-46.81-122.97-46.81-169.77 0-11.16 11.16-19.65 23.98-25.49 37.68-15.18.96-30.52 2.13-45.67 3.49-3.09.28-5.46 2.87-5.46 5.98v22.23l-75.05 20.11c-2.32.62-4.05 2.57-4.39 4.96-.34 2.38.78 4.73 2.84 5.98l34.75 20.96-19.16 37.77c-1.13 2.23-.76 4.93.93 6.77 1.16 1.26 2.77 1.94 4.42 1.94.76 0 1.52-.14 2.25-.44l84.36-34.12c6.71-.58 13.38-1.1 20.02-1.58 5.84 13.84 14.38 26.79 25.64 38.05 23.4 23.4 54.14 35.11 84.89 35.11s61.48-11.7 84.89-35.11c11.31-11.31 19.89-24.35 25.73-38.26 6.48.49 12.97 1.02 19.45 1.6l84.84 34.31c.73.29 1.49.44 2.25.44 1.65 0 3.26-.68 4.42-1.94 1.69-1.84 2.06-4.54.93-6.77l-19.16-37.77 34.75-20.96c2.06-1.25 3.18-3.6 2.84-5.98zm-431.07 27.39c1.42-2.8.44-6.23-2.25-7.85l-27.45-16.56 58.32-15.63v47.81c0 1.05.28 2.07.78 2.96l-43.85 17.73zm40.63 1.16v-70.35c11.52-1 23.13-1.88 34.66-2.65-6.88 22.79-6.86 47.23.07 70.01-11.5.87-23.13 1.87-34.73 2.99zm82.85 46.94c5.12-27.12 29.04-47.19 56.95-47.19h19.4c27.91 0 51.82 20.07 56.94 47.19-38.98 30.6-94.3 30.6-133.29 0zm66.65-63.17c-19.33 0-35.05-15.72-35.05-35.05s15.72-35.05 35.05-35.05 35.05 15.72 35.05 35.05-15.72 35.05-35.05 35.05zm76.78 54.14c-7.3-24.7-27.81-43.46-52.89-48.68 13.85-8.2 23.15-23.28 23.15-40.51 0-25.94-21.11-47.05-47.05-47.05s-47.05 21.11-47.05 47.05c0 17.22 9.31 32.31 23.15 40.51-25.07 5.22-45.58 23.98-52.89 48.68-41.74-42.16-41.62-110.41.38-152.41 42.13-42.12 110.67-42.12 152.8 0 42.02 42 42.14 110.25.4 152.41zm38.06-110.91c11.53.77 23.14 1.65 34.67 2.65v70.3c-11.49-1.19-23.1-2.24-34.67-3.14 6.86-22.72 6.86-47.09 0-69.81zm77.54 63.99c-2.69 1.62-3.67 5.05-2.25 7.85l14.44 28.47-43.85-17.73c.51-.89.78-1.91.78-2.96v-47.81l58.32 15.63zm-223.13-209.87-7.94 33.84c-.55 2.35.36 4.8 2.32 6.22 1.95 1.42 4.57 1.53 6.63.28l29.74-18 29.74 18.01c.96.58 2.03.87 3.11.87 1.24 0 2.48-.38 3.53-1.15 1.95-1.42 2.87-3.87 2.32-6.22l-7.94-33.84 26.32-22.71c1.83-1.58 2.53-4.1 1.79-6.4-.75-2.3-2.8-3.92-5.2-4.12l-34.67-2.92-13.47-32.05c-.94-2.23-3.12-3.67-5.53-3.67s-4.59 1.45-5.53 3.67l-13.47 32.05-34.64 2.91c-2.41.2-4.46 1.83-5.2 4.12-.75 2.3-.04 4.82 1.79 6.4zm16.37-24.49c2.23-.19 4.16-1.59 5.03-3.65l9.35-22.24 9.35 22.24c.87 2.06 2.8 3.47 5.03 3.65l24.04 2.02-18.26 15.76c-1.69 1.46-2.43 3.74-1.92 5.91l5.51 23.49-20.63-12.5c-.96-.58-2.03-.87-3.11-.87s-2.15.29-3.11.87l-20.63 12.5 5.51-23.49c.51-2.17-.23-4.45-1.92-5.91l-18.26-15.76zm-120.76 55.3-7.94 33.84c-.55 2.35.36 4.8 2.32 6.22 1.95 1.42 4.57 1.53 6.63.28l29.74-18.01 29.73 18.01c.96.58 2.03.87 3.11.87 1.24 0 2.48-.38 3.53-1.15 1.95-1.42 2.87-3.87 2.32-6.22l-7.94-33.84 26.32-22.71c1.83-1.58 2.53-4.1 1.79-6.4-.75-2.3-2.8-3.92-5.2-4.12l-34.64-2.91-13.47-32.05c-.94-2.23-3.12-3.67-5.53-3.67s-4.59 1.45-5.53 3.67l-13.47 32.05-34.64 2.91c-2.41.2-4.46 1.83-5.2 4.12-.75 2.3-.04 4.82 1.79 6.4zm16.37-24.49c2.23-.19 4.16-1.59 5.03-3.65l9.35-22.24 9.35 22.24c.87 2.06 2.8 3.47 5.03 3.65l24.04 2.02-18.26 15.76c-1.69 1.46-2.43 3.74-1.92 5.91l5.51 23.49-20.63-12.5c-1.91-1.16-4.31-1.16-6.22 0l-20.63 12.5 5.51-23.49c.51-2.17-.23-4.45-1.92-5.91l-18.26-15.76zm164.32-4.62c-.75 2.3-.04 4.82 1.79 6.4l26.32 22.71-7.94 33.84c-.55 2.35.36 4.8 2.32 6.22 1.95 1.42 4.57 1.53 6.63.28l29.74-18.01 29.73 18.01c.96.58 2.03.87 3.11.87 1.24 0 2.48-.38 3.53-1.15 1.95-1.42 2.87-3.87 2.32-6.22l-7.94-33.84 26.32-22.71c1.83-1.58 2.53-4.1 1.79-6.4-.75-2.3-2.8-3.92-5.2-4.12l-34.64-2.91-13.47-32.05c-.94-2.23-3.12-3.67-5.53-3.67s-4.59 1.45-5.53 3.67l-13.47 32.05-34.64 2.91c-2.44.2-4.49 1.82-5.24 4.12zm44.47 4.62c2.23-.19 4.16-1.59 5.03-3.65l9.35-22.24 9.35 22.24c.87 2.06 2.8 3.47 5.03 3.65l24.04 2.02-18.26 15.76c-1.69 1.46-2.43 3.74-1.92 5.91l5.51 23.49-20.63-12.5c-1.91-1.16-4.31-1.16-6.22 0l-20.63 12.5 5.51-23.49c.51-2.17-.23-4.45-1.92-5.91l-18.26-15.76z"></path></svg>	</span>
						</div>
						<div class="elementor-icon-box-content">
							<h3 class="elementor-icon-box-title">
								<span>Specialising in elevating Nail Artistry to international excellence in India</span>
							</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="twocolumnsaboutinnder aboutsusbox2">
				<div class="imageaboutsus">
					<div class="youtubehomepage DesktopURL" id="thumb_12" style="position:relative;width:60vh;margin-top:0px;margin-bottom:0px;height:300px;">
						<img loading="lazy" title="Video12" alt="Video12" src="{{asset('image/blueskypics/aboutsuspic.webp')}}" style="cursor:pointer; text-align: center;" srcset="{{asset('image/blueskypics/aboutsuspic.webp')}} 736w, {{asset('image/blueskypics/aboutsuspic.webp')}} 216w, {{asset('image/blueskypics/aboutsuspic.webp')}} 600w" sizes="(max-width: 736px) 100vw, 736px" onclick="youtubeVideoPlay(12, '{{asset('image/bluseskyIntro.mp4')}}')">
						<i class="fa fa fa-youtube-play" style="color: red;position: absolute;left: 0;right:35px;top: -8%;bottom: 0;margin: auto;font-size: 50px;width: 32px;height: 32px;font-weight: 400;" onclick="youtubeVideoPlay(12, '{{asset('image/bluseskyIntro.mp4')}}')"></i>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>

<div class="studiovideo">
	<div class="studiovideoinner">
		<div class="youtubehomepage DesktopURL" id="thumb_0" style="float: right;position:relative;width:60vh;margin-top: 5px;margin-bottom: 5px;height:80vh;">
			<img loading="lazy" title="Video1" alt="Video1" src="{{asset('image/blueskypics/PHOTO-2023-09-21-10-32-52-1.webp')}}" style="cursor:pointer; text-align: center;" srcset="{{asset('image/blueskypics/PHOTO-2023-09-21-10-32-52-1.webp')}} 736w, {{asset('image/blueskypics/PHOTO-2023-09-21-10-32-52-1.webp')}} 216w, {{asset('image/blueskypics/PHOTO-2023-09-21-10-32-52-1.webp')}} 600w" sizes="(max-width: 736px) 100vw, 736px" onclick="youtubeVideoPlay(0, '{{asset('image/blueskypics/video1.mp4')}}')">
			<i class="fa fa fa-youtube-play" style="color: red;position: absolute;left: 0;right:35px;top: -8%;bottom: 0;margin: auto;font-size: 50px;width: 32px;height: 32px;font-weight: 400;" onclick="youtubeVideoPlay(0, '{{asset('image/blueskypics/video1.mp4')}}')"></i>
		</div>
		<div class="youtubehomepage DesktopURL" id="thumb_1" style="float: right;position:relative;width:60vh;margin-top: 5px;margin-bottom: 5px;height:80vh;">
			<img loading="lazy" title="Video2" alt="Video2" src="{{asset('image/blueskypics/PHOTO-2023-09-22-12-42-58.webp')}}" style="cursor:pointer; text-align: center;" srcset="{{asset('image/blueskypics/PHOTO-2023-09-22-12-42-58.webp')}} 736w, {{asset('image/blueskypics/PHOTO-2023-09-22-12-42-58.webp')}} 216w, {{asset('image/blueskypics/PHOTO-2023-09-22-12-42-58.webp')}} 600w" sizes="(max-width: 736px) 100vw, 736px" onclick="youtubeVideoPlay(1, '{{asset('image/blueskypics/video2.mp4')}}')">
			<i class="fa fa fa-youtube-play" style="color: red;position: absolute;left: 0;right:35px;top: -8%;bottom: 0;margin: auto;font-size: 50px;width: 32px;height: 32px;font-weight: 400;" onclick="youtubeVideoPlay(1, '{{asset('image/blueskypics/video2.mp4')}}')"></i>
		</div>	
		<div class="youtubehomepage lastvideo DesktopURL" id="thumb_2" style="float: right;position:relative;width:60vh;margin-top: 5px;margin-bottom: 5px;height:80vh;">
			<img loading="lazy" title="Video3" alt="Video3" src="{{asset('image/blueskypics/poster1.webp')}}" srcset="{{asset('image/blueskypics/poster1.webp')}} 736w, {{asset('image/blueskypics/poster1.webp')}} 216w, {{asset('image/blueskypics/poster1.webp')}} 600w" sizes="(max-width: 736px) 100vw, 736px" style="cursor:pointer; text-align: center;" onclick="youtubeVideoPlay(2, '{{asset('image/blueskypics/blueskychennailaunch3.mp4')}}')">
			<i class="fa fa fa-youtube-play" style="color: red;position: absolute;left: 0;right:35px;top: -8%;bottom: 0;margin: auto;font-size: 50px;width: 32px;height: 32px;font-weight: 400;" onclick="youtubeVideoPlay(2, '{{asset('image/blueskypics/blueskychennailaunch3.mp4')}}')"></i>
		</div>	
	</div>
</div>
<div class="ArtistryDestination">
	<div class="ArtistryDestinationinner whyusmaininner">
		<div class="ArtistryDestinationinternal ArtistryDestinationbox1">
			<h2 class="elementor-heading-title elementor-size-default">Your Nail Artistry Destination</h2>
			<div class="Artistryinertext">Elevate your nail skills with our comprehensive certification path, structured expertise, and unwavering support, and join our community of delighted graduates. Convenient weekend classes await your journey to excellence.</div>
			<div class="anyinquires">
			<div class="elementor-icon-box-wrapper">
				<div class="elementor-icon-box-icon">
					<span class="elementor-icon elementor-animation-">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 473.806 473.806" style="enable-background:new 0 0 473.806 473.806;" xml:space="preserve"><g>	<g>		<path d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4   c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8   c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6   c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5   c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26   c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9   c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806   C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20   c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6   c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1   c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3   c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5   c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8   c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9   l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1   C420.456,377.706,420.456,388.206,410.256,398.806z"></path>		<path d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2   c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11   S248.656,111.506,256.056,112.706z"></path>		<path d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11   c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2   c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z"></path>	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>				</span>
				</div>
				<div class="elementor-icon-box-content">
					<h3 class="elementor-icon-box-title">
					<span>Any Queries ? Call Us</span>
					</h3>
					<p class="elementor-icon-box-description">+91 9618607865,+91 88286 59770</p>
				</div>
			</div>
		</div>
		</div>

		<div class="ArtistryDestinationinternal ArtistryDestinationbox2">
			<img  loading="lazy" decoding="async" width="736" height="1024" src="{{asset('image/blueskypics/Artistry.webp')}}" class="attachment-large size-large wp-image-2917" alt="Artistry" title="Artistry">
		</div>
		<div class="ArtistryDestinationinternal ArtistryDestinationbox3">
			<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span>Supportive Community</span>
				</h3>
				<p class="elementor-icon-box-description">Join Bluesky Nail academy club of graduates and get multiple benefit</p>
			</div>
			<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span>Flexible Learning</span>
				</h3>
				<p class="elementor-icon-box-description">Conveniently enhance skills through weekend classes, one on one classes ,a flexible pathway to nail art mastery.</p>
			</div>
			<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span>Artistic Mastery</span>
				</h3>
				<p class="elementor-icon-box-description">Elevate your nail artistry with our high expertise,russian trainers and best international nail art trends.</p>
			</div>
		</div>
	</div>
</div>
<div class="Galleryclass" id="Gallery">
		<div class="galleryiamgesold">
			<div class="container">
			<div id="image-gallery">
			  <div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper toprow">
					<a href="{{asset('image/blueskypics/IMG_5134-1-300x200.webp')}}">
					<img src="{{asset('image/blueskypics/IMG_5134-1-300x200.webp')}}" loading="lazy" alt="Live training 1" title="Live training 1" class="img-responsive"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper toprow">
					<a href="{{asset('image/blueskypics/gallery/IMG_5142-1-300x200.webp')}}">
						<img  alt="Live training 2" title="Live training 2" loading="lazy" src="{{asset('image/blueskypics/gallery/IMG_5142-1-300x200.webp')}}" class="img-responsive">
					</a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper toprow">
					<a href="{{asset('image/blueskypics/gallery/IMG_5146-1-300x200.webp')}}"><img alt="Live training 3" title="Live training 3" loading="lazy" src="{{asset('image/blueskypics/gallery/IMG_5146-1-300x200.webp')}}" class="img-responsive"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper toprow">
					<a href="{{asset('image/blueskypics/gallery/IMG_5152-1.webp')}}"><img src="{{asset('image/blueskypics/gallery/IMG_5152-1.webp')}}" loading="lazy" alt="Live training 4" title="Live training 4" class="img-responsive"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper">
					<a href="{{asset('image/blueskypics/gallery/PHOTO-2023-09-22-12-42-58.webp')}}"><img src="{{asset('image/blueskypics/gallery/PHOTO-2023-09-22-12-42-58.webp')}}" class="img-responsive" alt="Live training 5" loading="lazy" title="Live training 5"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper">
					<a href="{{asset('image/blueskypics/gallery/PHOTO-2023-09-21-10-32-52-1.webp')}}"><img src="{{asset('image/blueskypics/gallery/PHOTO-2023-09-21-10-32-52-1.webp')}}" class="img-responsive" alt="Live training 6" loading="lazy" title="Live training 6"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper">
					<a href="{{asset('image/blueskypics/gallery/PHOTO-2023-07-21-09-09-12webp')}}"><img src="{{asset('image/blueskypics/gallery/PHOTO-2023-07-21-09-09-12.webp')}}" class="img-responsive" alt="Live training 6" loading="lazy" title="Live training 6"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper">
					<a href="{{asset('image/blueskypics/gallery/PHOTO-2023-07-19-08-37-06.webp')}}"><img src="{{asset('image/blueskypics/gallery/PHOTO-2023-07-19-08-37-06.webp')}}" class="img-responsive" alt="Live training 7" loading="lazy" title="Live training 7"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper">
					<a href="{{asset('image/blueskypics/gallery/16-d-1.webp')}}"><img src="{{asset('image/blueskypics/gallery/16-d-1.webp')}}"  width='285' height="189" alt="Live training 10" title="Live training 10" loading="lazy" class="img-responsive"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper">
					<a href="{{asset('image/blueskypics/gallery/IMG_1221.webp')}}"><img src="{{asset('image/blueskypics/gallery/IMG_1221.webp')}}" loading="lazy" alt="Live training 11" title="Live training 11" class="img-responsive"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper">
					<a href="{{asset('image/blueskypics/gallery/IMG_1232.webp')}}"><img src="{{asset('image/blueskypics/gallery/IMG_1232.webp')}}" loading="lazy" alt="Live training 10" title="Live training 10" class="img-responsive"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
			
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper">
					<a href="{{asset('image/blueskypics/gallery/IMG_1348.webp')}}"><img src="{{asset('image/blueskypics/gallery/IMG_1348.webp')}}" alt="Live training 11" title="Live training 11" loading="lazy" class="img-responsive"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper">
					<a href="{{asset('image/blueskypics/gallery/IMG_5860.webp')}}">
						<img src="{{asset('image/blueskypics/gallery/IMG_5860.webp')}}" width='285' height="211" loading="lazy" alt="Live training 12"  title="Live training 12" class="img-responsive"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper">
					<a href="{{asset('image/blueskypics/gallery/PHOTO-2023-08-18-18-07-47.webp')}}"><img src="{{asset('image/blueskypics/gallery/PHOTO-2023-08-18-18-07-47.webp')}}" class="img-responsive" alt="Live training 8" loading="lazy" title="Live training 8"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
				  <div class="img-wrapper">
					<a href="{{asset('image/blueskypics/gallery/PHOTO-2023-09-08-14-50-33-1.webp')}}"><img src="{{asset('image/blueskypics/gallery/PHOTO-2023-09-08-14-50-33-1.webp')}}" class="img-responsive" alt="Live training 9" loading="lazy" title="Live training 9"></a>
					<div class="img-overlay">
					  <i class="fa fa-plus-circle" aria-hidden="true"></i>
					</div>
				  </div>
				</div>
			  </div><!-- End row -->
			</div><!-- End image gallery -->
		  </div>
	</div>
</div>
<div class="ContactusMaindiv" id="Contactus">
	<div class="ContactusMaindivinner">
		<div class="contactvideodiv">
			<img loading="lazy" decoding="async" width="1024" height="894" src="{{ asset('image/blueskypics/videobanner.webp') }}" alt="videobanner" title="videobanner" class="attachment-large size-large wp-image-3051">
		</div>
		<div class="contactForm">
			<div class="elementor-heading-title elementor-size-default headingmaisub"><h2 class="elementor-heading-title elementor-size-default headingtwo">Send us your inquiry and we will revert back within 24 hours</h2></div>
			
			<form class="elementor-form" method="post" name="NewForm" id="nailcontact">
				@csrf
				<div class="elementor-form-fields-wrapper elementor-labels-above">
						<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
							<input size="1" type="text" name="full_name" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Name">
							<span class="error_class full_name_errorss new_span_error"></span>
						</div>
						<div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
							<input size="1" type="email" name="email" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email" aria-required="true">
							<span class="error_class email_errorss new_span_error"></span>
						</div>
						<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_d5ec714 elementor-col-100 elementor-field-required">
							<select name="dial_code" id="dial_codenailcontact" class="elementor-field elementor-field-textual" style="width: 30%;height: 30px;">
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
                                <input type="tel" name="mobile_number" class="elementor-field-textual elementor-field mobile_numbers" id="phonenailcontact" data-class-name="mobile_numbers" maxlength="10" onkeypress="return onlyNumberKey(event);" placeholder="Enter Whatsapp Number" style="width: 59% !important;"><br>
                                <input type="hidden" id="country_data" name="country_data" value="in">
								<span class="error_class mobile_number_errorss"></span>
						</div>
						<div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
							<textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="purpose" id="form-field-message" rows="4" placeholder="Message"></textarea>	
							<span class="error_class purpose_errorss new_span_error"></span>							
						</div>
						<div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
							<div class="form-group mb-4" style="width:100%;text-align: left;">
								{{--  {{ app('mathcaptcha')->reset(); }}  --}}
								<label for="mathgroup" class="form-label_h">Please solve the following math function: {{ app('mathcaptcha')->label() }}</label>
								{!! app('mathcaptcha')->input(['class' => 'form-control mathcaptchas elementor-field elementor-size-sm  elementor-field-textual', 'id' => 'mathgroup']) !!}
								<span class="error_class mathcaptcha_errorss"></span>
						</div>
						</div>
						<div class="mb-3 formfield coupon_otp_box" style="display: none;margin-top:5px;">
                                <label style="color: white;">OTP</label>
                                <input type="number" name="otp" class="contactFormInp" id="otp_coupan_Appointment" autocomplete="off">
                                <span class="error_class otp_errors new_span_error"></span>
                                <input type="hidden" name="contact_id" class="contact_id" id="contact_id" value="" autocomplete="off">
                                <span class="error_class otp_error"></span>
                            </div>
							<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
							<button type="submit" class="btn btn-dark home_form" id="nailsendOtpButton1">Send</button>
							<!--<button type="submit" class="btn btn-dark home_form" id="nailsendOtpButton1">Send OTP</button>
                            <button type="submit" class="btn btn-dark home_form" id="nailverifyOtpButton1" style="display:none;">Verify OTP</button>-->
						</div>
					</div>
			</form>
		</div>
	</div>
</div>
<style>
.aboutsusVideoCls{
	height:300px;
	width:400px;
}
.otherclassvideo{
	height:80vh;
	width:100%;
}
</style>
<script type="text/javascript">

function youtubeVideoPlay(id, link) {
	if(id == '12'){
		var he = 'aboutsusVideoCls';
	}else{
		var he = 'otherclassvideo';
	}
	//if (id == 0) {
		$('#thumb_' + id).html('<iframe loading="lazy" src="' + link + '?autoplay=1"  title="Ratios - Basics | Ratios &amp; Proportions | The Only CSAT Course You Need | UPSC | CSAT MANTRA" frameborder="0" class="'+he+'" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
	//} 
	return;
}

function opencouponform(coursename){
	var  coursesUrl = 'https://wigomania.com/blueskynailacademy.hyderabad/'+coursename;
	//alert(coursesUrl);
	window.location.assign(coursesUrl);
}


var  thankuUrl = "{{ route('thankunailcontactus') }}";
$(document).ready(function() {
	$("#nailcontact").submit(function(event) {
		if ($('#otp_coupan_Appointment').val()) {
             var url = "{{ route('nail.submitOtp') }}";
        } else {
            var url = "{{ route('nailcontactus') }}";
        }
		var form = document.getElementById('nailcontact');
        var formData = new FormData(form);
		event.preventDefault();
        $.ajax({
            url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
				if (response.error) {
					$('.error_class').text('');
                    $.each(response.error_message, function(index, value) {
                        $('.' + index + '_errorss').text(value);
                        $('.' + index + '_errorss').show('active');
                    });
                    if (response && response.error_message1) {

                        $(".otp_error").text(response.error_message1);
                        $(".otp_error").show("active");
                    }
                    $(':input[type="submit"]').prop('disabled', false);
                }else {
					
                   /*  toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 3000;
                    toastr.success(response.success_message);
                    $('.coupon_otp_box').show();
                    $('#nailverifyOtpButton1').show();
                    $('#nailsendOtpButton1').hide();  */

                    $.each(response.request, function(index, value) {
                       // $('.' + index + 's').attr('disabled', true);
                    });

                    if (response.is_relode == 'yes') {
							var formData = {
								Name: $('#nailcontact #form-field-name').val(),
								custemail: $('#nailcontact #form-field-email').val(),
								DialCode: $('#dial_codenailcontact').val(),
								number: $('#phonenailcontact').val(),
								message: $('#nailcontact #form-field-message').val(),
								fromwhere:'3',
							};
							$.ajax({
								url: 'https://wigomania.co.uk/crm/hyderabad_nail/index.php/Websitedata/DataFromWebsitetopracto',
								type: 'POST',
								data: formData,
								success: function(r) {
									window.location.assign(thankuUrl);
								},
								error: function(xhr, status, error) {
								}
							}); 
                    }
					console.log(response.nailcontactus.id);
					$('#contact_id').val(response.nailcontactus.id)
                   
                }
			}
            
        });
	});
/* $("#nailcourse").submit(function(event) {
	var name = $('#full_name').val();
	var custemail = $('#emailID').val();
	var dial_code = $('#dial_code').val();
	var number = $('#phonecourse').val();
	var url = "{{ route('nailCoursecontactus') }}";
	event.preventDefault();
	$.ajax({
		url,
		type: 'POST',
		data: $('#nailcourse').serialize(),
		success: function(response) {
			console.log(response);
			window.location.href = response.url;
		},
		error: function(xhr, status, error) {
		}
	});
}); */

$("#nailcourse").submit(function(event) {
		if ($('#otp_coupan_nailcourse').val()) {
             var url = "{{ route('nail.submitOtpRegister') }}";
        } else {
            var url = "{{ route('nailCoursecontactus') }}";
        }
		var form = document.getElementById('nailcourse');
        var formData = new FormData(form);
		//alert(url);
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
                        $('.' + index + '_errors').text(value);
                        $('.' + index + '_errors').show('active');
                    });
                    if (response && response.error_message1) {

                        $(".otp_error").text(response.error_message1);
                        $(".otp_error").show("active");
                    }
                    $(':input[type="submit"]').prop('disabled', false);
                }else {
					//alert('yese');
					/* console.log(response);
                    toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 3000;
                    toastr.success(response.success_message);
                    $('#nailcourse .coupon_otp_box').show();
                    $('#nailCourseverifyOtpButton1').show();
                    $('#nailCoursesendOtpButton1').hide();  */

                    $.each(response.request, function(index, value) {
                       // $('.' + index + 's').attr('disabled', true);
                    });

                    if (response.is_relode == 'yes') {
								var Name = $('#full_name').val();
								var custemail = $('#emailID').val();
								var number = $('#phonecourse').val();
								var formData = {
									Name: $('#full_name').val(),
									custemail: $('#emailID').val(),
									DialCode: $('#dial_code').val(),
									number: $('#phonecourse').val(),
									fromwhere:'1',
								};
								$.ajax({
									url: 'https://wigomania.co.uk/crm/hyderabad_nail/index.php/Websitedata/DataFromWebsitetopracto',
									type: 'POST',
									data: formData,
									success: function(r) {
										var url = "https://wigomania.com/blueskynailacademy.hyderabad/registercourse?";
										url += "name=" +  encodeURIComponent(Name);
										url += "&email=" +  encodeURIComponent(custemail);
										url += "&number=" +  encodeURIComponent(number);
										//alert(url);
										//window.location.href = url;
										window.location.assign(thankuUrl);
									},
									error: function(xhr, status, error) {
									}
								}); 
					
                    }
					console.log(response.nailCourseus.id);
					$('#nailCourseus').val(response.nailCourseus.id)
                }
			}
        });
	});
	
});
// Gallery image hover
$( ".img-wrapper" ).hover(
  function() {
    $(this).find(".img-overlay").animate({opacity: 1}, 600);
  }, function() {
    $(this).find(".img-overlay").animate({opacity: 0}, 600);
  }
);

// Lightbox
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

// Add overlay
$overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
$("#Gallery").append($overlay);

// Hide overlay on default
$overlay.hide();

// When an image is clicked
$(".img-overlay").click(function(event) {
  event.preventDefault();
  // Adds href attribute to variable
  var imageLocation = $(this).prev().attr("href");
  // Add the image src to $image
  $image.attr("src", imageLocation);
  // Fade in the overlay
  $overlay.fadeIn("slow");
});

// When the overlay is clicked
$overlay.click(function() {
  // Fade out the overlay
  $(this).fadeOut("slow");
});

// When next button is clicked
$nextButton.click(function(event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").next().find("img"));
  // All of the images in the gallery
  var $images = $("#image-gallery img");
  // If there is a next image
  if ($nextImg.length > 0) { 
    // Fade in the next image
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  } else {
    // Otherwise fade in the first image
    $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
  }
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When previous button is clicked
$prevButton.click(function(event) {
  // Hide the current image
  $("#overlay img").hide();
  // Overlay image location
  var $currentImgSrc = $("#overlay img").attr("src");
  // Image with matching location of the overlay image
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  // Finds the next image
  var $nextImg = $($currentImg.closest(".image").prev().find("img"));
  // Fade in the next image
  $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  // Prevents overlay from being hidden
  event.stopPropagation();
});

// When the exit button is clicked
$exitButton.click(function() {
  // Fade out the overlay
  $("#overlay").fadeOut("slow");
});
</script>
<style>
.toprow{
	margin-top:0px !important;
}
.NailCoursesinner #nailcourse .elementor-field-group {
    position: relative;
    min-height: 1px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    width: 100%;
    padding-right: calc(15px / 2);
    padding-left: calc(15px / 2);
    margin-bottom: 15px;
}
.NailCoursesinner #nailcourse .elementor-field {
    background-color: #ee4695;
    border-color: transparent;
    border-radius: 0px 0px 0px 0px;
    font-size: 15px;
    font-weight: 400;
    color: #000;
    flex-basis: 100%;
    max-width: 100%;
    border-bottom: 1px solid #000;
    vertical-align: middle;
    flex-grow: 1;
    padding: 0.75em;
    height: auto;
    vertical-align: middle;
    flex-grow: 1;
    min-height: 40px;
    line-height: 1.4;
}
.ContactusMaindivinner{
	padding-bottom: 80px;
}
.twocolumnsaboutinnder.aboutsusbox2 .imageaboutsus{
	width: 100%;
    margin-left: 40px;
}
.twocolumnsaboutinnder.aboutsusbox2 .imageaboutsus video{
	width: 100%;
    height: 600px;
    object-fit: cover;
}
.contactvideodiv img{
	margin-top: 80px;
    border: 0;
    max-width: 100%;
    width: 100%;
    height: 475px;
    object-fit: cover;
    object-position: center center;
    vertical-align: middle;
    display: inline-block;
}
.maincourse{
	justify-content: center;
}
.NailCourses .maincourse .maincourseslider1{
	width: 40%;
}
.NailCourses .maincourse .maincourseslider2{
	width: 40%;
	background: transparent;
    border: none;
	margin-right: 0px;
}
#nailcourse button.btn.btn-dark.home_form{
	width:100%;
}
.NailCourses .maincourse .maincourseslider1 img{
	width: 100%;
}
#nailcourse{
	display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}
}
.ArtistryDestinationbox1 .elementor-heading-title{
	padding: 10px 20px 20px 0px
}
.youtubehomepage{
	margin-right: 10px;
}
#aboutus .youtubehomepage{
	margin-right: 10px;
	width: 100%;
}
.youtubehomepage.lastvideo{
	margin-right:0px;
}
.bannerimages{
	display: flex;
    flex-direction: row;
    min-height: 80vh;
    justify-content: center;
}
.bannerimages img{
	width: 67vh;
    padding-bottom: 30px;
    margin-top:200px;
	
}
.studiovideoinner video{
	width: 67vh;
    padding-bottom: 30px;
    margin-top: 50px;
    object-fit: cover;
}
.formfield label{
	color:#000;
}
.img-wrapper {
  position: relative;
  margin-top: 5px;
  img {
    width: 100%;
  }
}
.studiovideo{
	float: left;
    width: 100%;
}
.intro{
	scroll-margin-top: 100px;
}
#Gallery{
	padding-top:5px;
	padding-bottom:5px;
	width: 100%;
    float: left;
}
.coupon_otp_box{
	padding-right: calc(15px / 2);
    padding-left: calc(15px / 2);
}
#popup .coupon_otp_box{
	padding-right:0px;
    padding-left: 0px;
}
.formfield input{
	width: 100%;
    margin-bottom: 8px;
    height: 35px;
    padding-left: 5px;
    padding-left: calc(15px / 2);
}
#popup .formfield input{
	width: 90%;
}
#popup .PhonECode{
	margin-top: 10px;
}
#popup .namefield{
	margin-top: 0px;
}
.img-overlay {
  background: rgba(0,0,0,0.7);
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  i {
    color: #fff;
    font-size: 3em;
  }
}

#overlay {
  background: rgba(0,0,0,0.7);
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 999;
  // Removes blue highlight
  -webkit-user-select: none;
  -moz-user-select: none;    
  -ms-user-select: none; 
  user-select: none; 
  img {
    margin: 0;
    width: 80%;
    height: auto;
    object-fit: contain;
    padding: 5%;
    @media screen and (min-width:768px) {
        width: 60%;
    }
    @media screen and (min-width:1200px) {
        width: 50%;
    }
  }
}

#nextButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
  &:hover {
    opacity: 0.7;
  }
  @media screen and (min-width:768px) {
    font-size: 3em;
  }
}

#prevButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
  &:hover {
    opacity: 0.7;
  }
  @media screen and (min-width:768px) {
    font-size: 3em;
  }
}

#exitButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
  position: absolute;
  top: 15px;
  right: 15px;
  &:hover {
    opacity: 0.7;
  }
  @media screen and (min-width:768px) {
    font-size: 3em;
  }
}

.galleryiamges{
	display: grid;
    grid-template-columns:repeat(4, 4fr);
    grid-auto-rows: auto;
    grid-auto-flow: dense;
    justify-items: stretch; 
    align-items: stretch; 
    gap: 2svmin;
	padding-top: 60px;
    padding-bottom: 60px;
    width: 90%;
    margin: 0 auto;
    color: #fff;
    text-align: center;
}
.galleryiamges img {
   width:100%;
   aspect-ratio: 16 / 9;
   object-fit: cover;
   transition: 0.25s;
}
.galleryiamges img:hover {
  transform: scale(0.97);
}
.modal {
  visibility: hidden;
  opacity: 0;
  transition: opacity 0.25s linear;
  position: fixed;
  z-index: 9999;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.9);
  -webkit-backdrop-filter: blur(7px);
  backdrop-filter: blur(7px);
}

.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  border-radius: 5px;
}

.close {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  padding: 0px 0px 6px 0px;
  top: 35px;
  right: 35px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  border: none;
  cursor: pointer;
  transition: transform 0.3s;
}

button {
  background: none;
  border: none;
}

.close:hover {
  transform: scale(0.9);
}

#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  white-space: pre-line;
  text-align: center;
  color: #ccc;
  padding: 25px 0px 35px 0px;
  height: 150px;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.25s ease, visibility 0.25s;
}
.whyusmain,.ArtistryDestination,.NailCourses,.NailAboutus{
	background: #ee4695;
	width:100%;
	float:left;
}
.ArtistryDestinationinner{
	display:flex;
}
.ArtistryDestinationinner .ArtistryDestinationbox1{
	width:34.453%;
	padding-right: 30px;
	flex-grow: 0;
    flex-shrink: 0;
}
.ArtistryDestinationbox1 .Artistryinertext{
	margin-bottom:20px;
}
.ArtistryDestinationinner img{
	height: 445px;
    object-fit: cover;
    object-position: center center;
	vertical-align: middle;
    display: inline-block;
	max-width: 100%;
	border: none;
    border-radius: 0;
    box-shadow: none;
}
.ArtistryDestinationinner .ArtistryDestinationbox2{
	width:33%;
	flex-grow: 0;
    flex-shrink: 0;
}

.NailCoursesinner,.NailAboutusinner{
	padding-top:20px;
	padding-bottom:20px;
	width: 90%;
    margin: 0 auto;
	color: #000;
	text-align: center;
}
#image-gallery .row>*{
	padding-right: 0px;
    padding-left: 5px;
}
.whyusmaininner{
	padding-bottom:10px;
	width: 90%;
    margin: 0 auto;
	color: #000;
	text-align: center;
}
.ArtistryDestinationbox1 h2{
	text-align:left;
    font-weight: 700;
    font-style: normal;
    letter-spacing: 0.4px;
}
.ArtistryDestinationbox3 .elementor-icon-box-content{
	padding: 10px 20px 20px 0px;
}
.Artistryinertext{
	text-align:left;
}
.ArtistryDestinationbox3{
	text-align: left;
    padding-left: 22px;
}
.whyusmaininner .elementor-heading-title elementor-size-default{
	font-size: 45px;
    font-weight: 500;
}
.whyusmaininner .whyusmaininnerheading{
	padding-top:0px;
	padding-bottom:5px;
	text-align: center;
    color: #000;
    font-size: 2rem;
    font-weight:700;
}
.whyusmaininner .elementor-icon-box-icon svg{
	color: #000;
	fill: #000;
}
.whyusmaininner .elementor-icon-box-content h3,.whyusmaininner .elementor-icon-box-content p{
	color: #000;
}
.whyusmaininner .anyinquires .elementor-icon-box-icon svg{
	color: #000;
	fill: #000;
}
.whyusmaininner .innerbox{
	color: #fff;
}
.whyusmaininnerheading{
	color:#000;
}
.whyusmaininnerEmpower h2{
	font-size:23px;
	letter-spacing:1px;
}
.twocolumnsabout{
	color: #000;
}
.whyusmaininnerfourcolumn,.imagewithslider,.twocolumnsabout{
	display: flex;
    flex-direction: row;
    width: 100%;
	margin-top:0px;
}
.whyusmain .innerbox{
	width: 25%;
    background: #fff;
    padding: 35px 29px 35px 29px;
	margin-right: 2%;
	border: 3px solid #000;
} 
.elementor-icon-box-icon{
	margin-bottom: 19px;
}
.elementor-animation-bounce-in:active, .elementor-animation-bounce-in:focus, .elementor-animation-bounce-in:hover {
    transform: scale(1.2);
    transition-timing-function: cubic-bezier(0.47,2.02,.31,-.36);
}
.elementor-animation-bounce-in {
    transition-duration: .5s;
}
.elementor-icon-box-icon svg{
	fill: #000;
    color: #000;
	width: 1em;
    height: 1em;
    position: relative;
    display: block;
}
.elementor-animation-bounce-in{
	font-size: 60px;
	    justify-content: center;
    align-items: center;
    display: flex;
}
.anyinquires{
	padding:10px 0px 10px 0px;
	margin-top: 100px;
}
button.btn.btn-dark.home_form{
	background: #fff;
	border: 1px solid #fff;
	color:#000;
	font-weight:700;
}

.anyinquires .elementor-icon-box-wrapper{
	display: flex;
    text-align: left;
    flex-direction: row;
    align-items: center;
}
.anyinquires .elementor-icon{
    font-size: 23px;
    margin-right: 15px;
}
.anyinquires .elementor-icon-box-icon{
	display: inline-flex;
    flex: 0 0 auto;
}
.anyinquires .elementor-icon-box-description{
	font-size: 20px;
    font-weight: 700;
}
.NailCourses .sliderboxescmmon{
	border: 3px solid #000;
	background:#fff;
    padding-top: 0px;
    padding-bottom: 15px;
	margin-right:30px;
	margin-bottom:5px;
	width:20%;
}
.NailCourses .maincourseslider1.sliderboxescmmon{
	margin-bottom:20px;
}
.NailCourses .imagediv img{
	height: auto;
    max-width: 100%;
    border: none;
    border-radius: 0;
    box-shadow: none;
    vertical-align: middle;
    display: inline-block;
}
.NailCourses .textafteriamge{
	margin-top: 20px;
}
.NailCourses .textafteriamge h2{
	font-size:15px;
    font-weight:600;
    line-height: 1.3em;
    text-align: center;
}
.aboutsusbox1{
	width:60%;
	text-align: left;
}
.aboutsusbox2{
	width:40%;
}
.aboutsusbox1 .headingmain,.NailCoursesinner .headingmain{
	font-size: 2rem;
    font-weight: 700;
    font-style: normal;
    letter-spacing: 0.4px;
}
.aboutsusbox1 h2.headingmaisub,.NailCoursesinner .headingsub{
	font-size: 23px;
    font-style: normal;
    line-height: 54px;
}
.ArtistryDestinationbox3 .elementor-icon-box-title span{
	font-size: 2rem;
    text-align: left;
    font-weight: 700;
    font-style: normal;
    letter-spacing: 0.4px;
} 

.ArtistryDestinationbox3 p{
	font-size: 1.2rem;
	line-height: 1.5;
} 
.elementor-icon-box-title span{
	font-size:23px;
	font-weight: 700;
}
.Artistryinertext{
	font-size: 1.2rem;
}
.aboutscontent{
	font-size: 1.2rem;
    font-weight: normal;
    line-height: 1.5;
    padding: 5px 0px 15px 0px;
}
.aboutsusbox2 img{
    max-width: 100%;
}
.Aboutuscontainer{
	padding: 15px 0px 15px 0px;
    border-style: solid;
    border-width: 1px 0px 1px 0px;
    border-color: #0000001a;
}
.Aboutuscontainer .elementor-icon-box-wrapper{
	flex-direction: row;
    text-align: left;
    display: flex;
}
.Aboutuscontainer .elementor-icon-box-icon{
	display: inline-flex;
    flex: 0 0 auto;
    margin-left: 0;
    margin-bottom: unset;
    margin-right: 15px;
}
.Aboutuscontainer .elementor-icon{
	font-size: 31px;
    padding: 0.5em
    margin-bottom: unset;
    margin-right: 15px;
}
.Aboutuscontainer .elementor-icon-box-title{
	font-size: 18px;
    font-weight: 400;
    line-height: 1.4em;
}
.ContactusMaindiv{
	width:100%;
	background:#ee4695;
	display: flex;
    justify-content: flex-end;
    align-items: center;
}
.ContactusMaindivinner{
	display: flex;
    width: 100%;
}
.contactvideodiv{
	width: 40%;
}
.contactvideodiv video{
	width: 100%;
    height: 578.889px;
    object-fit: contain;
}
.contactForm{
	width: 60%;
	padding: 25px 25px 0px 135px;
	color:#000;
}
.contactForm .elementor-form-fields-wrapper{
	width: 60%;
}
.contactForm .headingone{
	padding-top: 50px;
    font-size: 2rem;
    font-weight: 700;
    color: #000;
    line-height: 1.2;
    letter-spacing: 0.4px;
} 
.contactForm .headingtwo{
	font-size: 23px;
    font-weight: 500;
    line-height:54px;
} 
.contactForm .elementor-field-group{
	position: relative;
    min-height: 1px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    width: 100%;
    padding-right: calc(15px / 2);
    padding-left: calc(15px / 2);
    margin-bottom: 15px;
}
.contactForm .elementor-button{
	background: #fff;
    border: none;
    color: #ee4695;
	min-height: 40px;
}
.contactForm .elementor-field-group .elementor-field-textual:focus{
	outline: 0;
}
::placeholder {
  color: #000;
}
.contactForm .elementor-field{
	background-color: #ee4695;
    border-color: transparent;
    border-radius: 0px 0px 0px 0px;
    font-size: 15px;
    font-weight: 400;
    color: #000;
    flex-basis: 100%;
    max-width: 100%;
    border-bottom: 1px solid #000;
    vertical-align: middle;
    flex-grow: 1;
    padding: 0.75em;
    height: auto;
    vertical-align: middle;
    flex-grow: 1;
    min-height: 40px;
    line-height: 1.4;
}
.contactForm button.btn.btn-dark.home_form{
	 width: 100% !important;
	 color: #000;
    font-weight: 700;
}
.studiovideoinner{
	display: flex;
    flex-direction: row;
    min-height: 80vh;
    position: relative;
    justify-content: center;
}

.textafteriamge span{
	border: 1px solid #000;
    margin-top: 10px;
    padding: 8px;
    display: flex;
    width: 80%;
    justify-content: center;
    font-weight: 600;
    font-size: 12px;
	cursor: pointer;
}
.textafteriamge .contactusbutton{
	text-align: center;
    margin: 0 auto;
    width: 100%;
    display: flex;
    justify-content: center;
}
@media (min-width:500px) {
   figure {
   grid-template-columns: repeat(2, 1fr);
   }  
   img:nth-of-type(11) {
   grid-row: span 2 / auto;
  }
}
@media (max-width: 768px) {
	.NailCourses .maincourse .maincourseslider2{
		width:100%;
	}
	#image-gallery .row>*{
		padding-left: 0px;
	}
	#image-gallery .row div:nth-child(1) .img-wrapper{
		margin-top: 0px !important;
	}
	#image-gallery .img-wrapper.toprow{
		margin-top: 5px !important;
	}
	.youtubehomepage{
		margin-top: 5px;
		margin-bottom: 5px;
		height: auto;		
	} 
	.NailCoursesinner .headingmain{
		font-size: 1.7rem;
	}
	 
	.whyusmaininnerfourcolumn .elementor-icon-box-icon{
		margin-bottom: 0px;
	}
	.youtubehomepage i{
		right: 0px;
	}
	.contactForm .elementor-field-group{
		margin-bottom: 0px;
	}
	.aboutsusbox2 img{
		margin-top:5px;
		position: relative;
		left: -35px;
	}
	.studiovideoinner {
		width: 100%;
	}
	.NailCourses .maincourse .maincourseslider1{
		width: 100%;
	}
	.NailCourses .maincourse .maincourseslider1 img{
		width:100%;
	}
	.imagewithslider{
		display: block;
	}
	.NailCourses .sliderboxescmmon{
		width: 100%;
		float: left;
		margin-bottom:0px;
		margin-top:5px;
	}
	.ArtistryDestinationbox1 .Artistryinertext{
		text-align: justify;
	}
	.ArtistryDestinationinternal .elementor-icon-box-content p{
		    text-align: justify;
			margin-bottom:5px;
	}
	#Gallery{
		padding-top: 5px !important;
		padding-bottom: 5px !important;
	}
	#Gallery .img-wrapper{
		margin-top: 5px;
	}
	.ArtistryDestinationinner{
		display: inline-block;
		width: 100%;
	}
	.ArtistryDestinationbox1 .elementor-heading-title{
		padding: 0px 0px 20px 0px;
	}
	.anyinquires{
		margin-top:20px;
	}
	.ArtistryDestinationinner .ArtistryDestinationbox2{
		width: 90%;
		margin: 0 auto;
		margin-bottom: 30px;
	}
	.ContactusMaindivinner{
		display: inline-block;
		width: 100%;
		padding-bottom:0px;
	}
	.contactvideodiv{
		width: 90%;
		text-align: center;
		margin: 0 auto;
	}
	.contactvideodiv img{
		margin-top: 20px;
		border: 0;
		max-width: 100%;
		width: 100%;
		height: 475px;
		object-fit: cover;
		object-position: center center;
		vertical-align: middle;
		display: inline-block;
		left: -5px;
		position: relative;
	}
	.contactForm{
		width: 100%;
		padding: 0px 20px;
		margin-bottom: 110px;
	}
	.contactForm textarea.elementor-field-textual.elementor-field{
		    height: 60px;
	}
	.ContactusMaindiv .contactForm{
		margin-bottom: 40px;
	}
	.contactForm .elementor-form-fields-wrapper{
		width: 100%;
	}
	.ArtistryDestinationbox3 .elementor-icon-box-content{
		padding: 0px 20px 20px 0px;
	}
	#aboutus .twocolumnsabout,#image-gallery .row div:nth-child(1) .img-wrapper{
		margin-top: 0px;
	}
	#Gallery {
		padding-top: 20px;
		padding-bottom: 20px;
	}
	.ArtistryDestinationinner .ArtistryDestinationbox1{
		width: 90%;
		margin: 20px auto;
		padding-right:0px;
	}
	.studiovideoinner{
		display: inline-block;
	}
	.whatsapp-chat1{
		width: 9.3% !important;
	}
	.aboutsusbox1 h2.headingmaisub, .NailCoursesinner .headingsub{
		
		line-height:normal;
	}
	.aboutsusbox1 h2.headingmaisub{
		text-align:center;
	}
	.whyusmaininner .whyusmaininnerheading{
		padding-top: 0px;
		padding-bottom: 0px;
	}
	
	.whyusmaininnerfourcolumn{
			display: block;
	}
	.whyusmain .innerbox{
		width:100%;
		margin-bottom:5px;
		    padding: 0px 15px
	}
	.bannerimages .bannerimagesinerimages .Firstiamge{
		margin-top: 230px;
	}
	.bannerimages .bannerimagesinerimages .img1,.bannerimages .bannerimagesinerimages .img3{
		display:none !important;
	}
	.bannerimages{
		min-height: 61vh;
	}
	
	.bannerimages img{
		margin-top: 0px;
	}
	.twocolumnsabout{
		display: block;
		width: 100%;
	}
	.twocolumnsaboutinnder{
		width: 100%;
	}
}

@media (min-width:1000px) {
   galleryiamges{
	   grid-template-columns: repeat(4, 1fr);
	   gap: 1svmin;
   }  
  
   .galleryiamges img:where(:nth-of-type(3), :nth-of-type(12)) {
	   grid-row: span 2 / auto;
	   grid-column: span 2 / auto;
	}

   .galleryiamges img:nth-of-type(5) {
	grid-column: span 2 / auto;
   }
  
   .galleryiamges img:nth-of-type(15) {
	grid-column: span 2 / auto;
   }
}
</style>

@endsection