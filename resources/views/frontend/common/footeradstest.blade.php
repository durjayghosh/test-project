<div class="popup footerads" id="popup" style="display: none;">
    <div class="center_popup">
        <div class="popupscreen">
            <span class="closePop closeForm" onclick="closePop();">
            <img alt="closepopup"
                    src="{{asset('image/closePop.png')}}" class="lazyloaded" data-ll-status="loaded" loading="lazy"  ><noscript><img
                        src="{{asset('image/closePop.png')}}" alt="closePopImage" loading="lazy"></noscript></span>
            <div class="coupontxt">
                <p style="color: black; font-weight: bold;padding:0px 20px">Don’t Miss Out: Get 15% Off on MRP + Free Demo & Consultation!</p>
            </div>
            <div class="DiscountCoupon">
                <div class="imageDiv">
                    <div class="mySlides">
                        <img src="{{asset('image/21.webp')}}" alt="Hair Extension Shops" class="lazyloaded ritu123 123"
                            data-ll-status="loaded" loading="lazy" />
                        <noscript><img src="{{asset('image/21.webp')}}" alt="Hair Extension Shops" loading="lazy" >
                        </noscript>
                    </div>
                </div>

                <div class="leftdiv">
                    <div class="rightdiv">
                        <form class="contactForm" method="post" action="#" id="formSubmits">
                            @csrf
                            <div class="formfield PhonECode">
                                <label>Name: </label>
                                <input type="text" name="full_name" class="full_names" id="full_namesformSubmits" data-class-name="full_names" placeholder="Enter Your Name"><br>
                                <span class="error_class full_name_errors new_span_error"></span>
                            </div>
                            <div class="formfield PhonECode">
                                <label>WhatsApp Number: </label>
								<select name="dial_code" id="dial_codeformSubmits" style="width: 30%;height: 30px;">
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
                                <input type="tel" name="mobile_number" class="mobile_numbers" id="phoneformSubmits"
                                    data-class-name="mobile_numbers" maxlength="10" onkeypress="return onlyNumberKey(event);" placeholder="Enter Whatsapp Number" style="width: 59% !important;"><br>
                                <input type="hidden" id="country_data" name="country_data" value="in">
                                <!--<input type="hidden" class="dial_code" id="dial_code" name="dial_code" value="">-->
                                <span class="error_class mobile_number_errors"></span>
                            </div>
                            <div class="formfield">
                                <label>Email: </label>
                                <input type="text" name="email" id="email_idformSubmits" placeholder="Enter Your Email" data-class-name="emails"
                                    class="emails"><br>
                                <span class="error_class email_errors new_span_error"></span>
                            </div>
                            <div class="formfield">
                                <label>What are looking for:</label>
                                <textarea rows="5" col="50" name="purpose_of_enquery"
                                    data-class-name="purpose_of_enquerys" placeholder="Enter Your Subject" id="purpose_of_enqueryformSubmits" class="purpose_of_enquerys"></textarea><br>
                                <span class="error_class purpose_of_enquery_errors new_span_error"></span>
                            </div>
                            {{--  <div class="formfield">
                                <label>Enter OTP</label>
                                <input type="number" name="mobile_number" class="mobile_numbers"><br>
                                <span class="error_class purpose_of_enquery_errors"></span>
                            </div>  --}}
                            <div class="formfield  mb-1">
                                {{--  {{ app('mathcaptcha')->reset(); }}  --}}
                                <label for="mathgroup">Please solve the following math function: {{ app('mathcaptcha')->label() }}</label>
                                {!! app('mathcaptcha')->input(['class' => 'mathcaptchas', 'id' => 'mathgroup']) !!}
                                <span class="error_class mathcaptcha_errorss new_span_error"></span>
                            </div>
                            <div class="formfield coupon_otp_box" style="display: none;margin-top:5px;">
                                <label style="color: white;">OTP</label>
                                <input type="number" name="otp" class="contactFormInp" id="otp_coupan"
                                    autocomplete="off">
                                <span class="error_class otp_errors new_span_error"></span>
                                <input type="hidden" name="reachus_id" class="reachus_id" id="reachus_id" value="" autocomplete="off">
								<input type="hidden" name="receivedfrom_add" class="reachus_ids ritu" id="receivedfrom_addIDs" value="Hair_Wigs_for_Men_in_Chennai" autocomplete="off">
									<span class="error_class otp_error"></span>
							</div>

                            <div id="">
								<button type="submit" class="btn btn-dark home_form" id="sendOtpButton1">Send</button>
                               <!-- <button type="submit" class="btn btn-dark home_form" id="sendOtpButton1">Send  OTP</button>
                                <button type="submit" class="btn btn-dark home_form" id="verifyOtpButton1">Verify OTP</button>-->
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start: Copyright 2023 TraceMyIP.org Service Code (081718-08052023)- DO NOT MODIFY //-->
<div id="elemID031021" style="line-height:16px;text-align:center;position:relative;z-index:100000;"><script async type="text/javascript" src="//s2.tracemyip.org/vLg/lgUrl.php?pidnVar2=97081&amp;prtVar2=5&amp;stlVar2=1500~1691223416~14*2~0F5999*F7FFE6*537899*000000~1*1*1*1*1&amp;rgtype=4684NR-IPIB&amp;scvVar2=12"></script><noscript><a href="https://www.tracemyip.org/tools/cookie-free-tracking-analytics-eu-cookie-law-solution/"><img src="//s2.tracemyip.org/vLg/1500~1691223416~14*2~0F5999*F7FFE6*537899*000000~1*1*1*1*1/4684NR-IPIB/97081/5/12/ans/" alt="Cookieless user user tracker" referrerpolicy="no-referrer-when-downgrade" style="border:0px;"></a></noscript></div> 
<!-- End: TraceMyIP.org Service Code //-->
<div class="chat-section">
    <div class="row">
        <div class="col-md-6 text-start">
			<div class="whatsapp-chat">
                <a target="_blank" href="https://wa.me/+919962831281?text=Hello%20Wigomania" rel="noreferrer"
                    class="img-icon-a nofocus">
                    <i class="fab fa-whatsapp-square" style="font-size: 65px;color: #1DD73F;"></i>
                </a>
            </div>
        </div>
	</div>
</div>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index: 10101010;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header_pink">
                <h5 class="modal-title" id="staticBackdropLabel">Book an Appointment</h5>
                <button type="button" class="btn-close closeForm" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="#" id="book_an_appointment">
                <div class="modal-body header_pink">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" name="full_name">
                        <span class="error_class full_name_errorsss"></span>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="email">
                        <span class="error_class email_errorsss"></span>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Whatsapp Number:</label><br>
						<select name="dial_code" id="" style="    width: 30%;
    height: 35px;">
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
                        <input type="tel" name="mobile_number" class="form-control" id="bookapointment_number"
                            data-class-name="mobile_numbers" maxlength="10" style="    float: right !important;width:69% !important;"><br>
                        <input type="hidden" id="country_data" name="country_data" value="in">
                        <!--<input type="hidden" class="dial_code" id="dial_code" name="dial_code" value="">-->
                        <span class="error_class mobile_number_errors"></span>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Date:</label>
                        <input type="date" class="form-control" name="date">
                        <span class="error_class date_errors"></span>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Purpose:</label>
                        <textarea class="form-control" name="purpose"></textarea>
                        <span class="error_class date_errors"></span>
                    </div>
					<!--<div class="formfield  mb-3">
                         {{--  {{ app('mathcaptcha')->reset(); }}  --}}
						<label for="mathgroup">Please solve the following math function: {{ app('mathcaptcha')->label() }}</label>
						{!! app('mathcaptcha')->input(['class' => 'mathcaptchas', 'id' => 'mathgroup']) !!}
						<span class="error_class mathcaptcha_errors new_span_error"></span>
					</div>-->
					<div class="mb-3 formfield coupon_otp_box" style="display: none;margin-top:5px;">
                                <label style="color: white;">OTP</label>
                                <input type="number" name="otp" class="contactFormInp" id="otp_coupan_Appointment" autocomplete="off">
                                <span class="error_class otp_errors new_span_error"></span>
                                <input type="hidden" name="reachus_id" class="reachus_idsss" id="reachus_idssss" value="" autocomplete="off">
                                <span class="error_class otp_error"></span>
                            </div>
                   <div class="modal-footer header_pink">
                        <button type="button" class="btn btn-secondary btn-new-1 closeForm"
                            data-bs-dismiss="modal">Close</button>
                        <!--<button type="submit" class="btn btn-primary btn-new">Book An Appointment</button>-->
						<div id="">

                                <button type="button" class="btn btn-dark home_form" id="sendOtpButton2" style="background: #fff;
    width: 100%;
    color: #333;
    margin-top: 0px;
    /* height: 35px; */
    padding: 5px;">Send
                                    OTP</button>
                                <button type="submit" class="btn btn-dark home_form" id="verifyOtpButton2" style="    background: #fff;
    width: 100%;
    color: #333;
    margin-top: 0px; display:none;
    /* height: 35px; */
    padding: 5px;">Book An Appointment</button>
                            </div>
                    </div>
            </form>
        </div>
    </div>
</div>
<!--Google Analytics Code -->

<!-- Google Tag Manager (noscript) -->
<noscript defer async ><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NX75J44"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script src="{{ asset('frontend/js/popper.min.js') }}"
     defer async >
</script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"
    defer async >
</script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}" defer async ></script>
<script src="{{ asset('frontend/build/js/intlTelInput.js') }}" defer async ></script>
<script src="{{ asset('frontend/js/custom.js') }}" defer async ></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer async ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script defer async>
 function loadVideo(container) {
        var iframe = document.createElement('iframe');
        iframe.src = 'https://www.youtube.com/embed/bF2ThTFCYng?autoplay=1&mute=1&loop=1&playlist=bF2ThTFCYng';iframe.width = '350';  // Width in pixels
		iframe.height = '622'; // Height in pixels
		iframe.frameBorder = '0'; // Optional: Remove the border
        iframe.allow = 'autoplay; encrypted-media';
        iframe.allowFullscreen = true;
        container.innerHTML = '';
        container.appendChild(iframe);
    }
	
function openpopup(){
	//alert('hello');
	jQuery('.popup').show();
}
jQuery(document).ready(function() {
const items = document.querySelectorAll('.accordion button');

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));
  /*   jQuery(function() {
        var popup = window.localStorage.getItem('popup');
        var popupCloseCount = window.sessionStorage.getItem('popupClose');
        if (popup != 1) {
            if (popupCloseCount == 1 || popupCloseCount > 1) {
                jQuery('.popup').hide();
            } else {
                setTimeout(function() {
                    jQuery('.popup').show();
                }, 120000);
            }
        }
    }); */
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
</script>
<script type="text/javascript" defer async>
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5afa78775f7cdf4f05343a62/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();


$('.iti__country').click(function() {
    var code = $(this).attr('data-country-code');
    $('#country_data').val(code);
    var dial_code = $(this).attr('data-dial-code');
    $('.dial_code').val(dial_code);
});

const thankuUrl = "{{ route('thanku') }}";

const bookingThankuURL = "{{ route('bookingThanku') }}";


$(document).ready(function() {
	$("#book_an_appointment").submit(function(event) {
        $('.error_class').hide('active');
        var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {
            keyboard: false
        })
        var url = "{{ route('bookAnAppointment') }}";
        var form = document.getElementById('book_an_appointment');
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
                    $.each(response.error_message, function(index, value) {
                        $('.' + index + '_errorsss').text(value);
                        $('.' + index + '_errorsss').show('active');
                    });
                } else {
                    toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 1500;
                    toastr.success(response.success_message);
                    window.location.assign(bookingThankuURL);
                }
            },
        });
    });
    $('#verifyOtpButton1').hide();
    $('#verifyOtpButton2').hide();
	
	
	$("#sendOtpButton2").click(function(event) {
        $(':input[type="submit"]').prop('disabled', true);
		if ($('#otp_coupan_Appointment').val()) {
            var url = "{{ route('bookAnAppointment') }}";
        } else {
            var url = "{{ route('contact.reachUsStore') }}";
        }
        var url = "{{ route('contact.reachUsStore') }}";
        //alert(url);
        var form = document.getElementById('book_an_appointment');
        var formData = new FormData(form);
        $('.error_class').hide();
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
                } else {
                    if ($('#otp_coupan').val()) {
                        $(':input[type="submit"]').prop('disabled', true);
                    } else {
                        $(':input[type="submit"]').prop('disabled', false);

                    }
                    toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 3000;
                    toastr.success(response.success_message);
                    $('.coupon_otp_box').show();
                    $('#verifyOtpButton2').show();
                    $('#sendOtpButton2').hide();

                    $.each(response.request, function(index, value) {
                       // $('.' + index + 's').attr('disabled', true);
                    });

                    if (response.is_relode == 'yes') {
                        //window.location.assign(thankuUrl); 
						{
                            {
                                // --setTimeout(function() {
                                //     location.reload();
                                // }, 4000);
                                // --
                            }
                        }
                    }
                    //$('#reachus_id').val(response.ReachUs.id)

                }
            },
        });
    });
	
    $("#formSubmits").submit(function(event) {
		
        $(':input[type="submit"]').prop('disabled', true);
        if ($('#otp_coupan').val()) {
            var url = "{{ route('contact.submitOtp') }}";
        } else {
            var url = "{{ route('contact.reachUsStore') }}";
        }
		
        var form = document.getElementById('formSubmits');
        var formData = new FormData(form);
        $('.error_class').hide();
        event.preventDefault();
        $.ajax({
            url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.error) {
					//$('.mathcaptcha_errors').css('display','none');
                    $.each(response.error_message, function(index, value) {
                        $('.' + index + '_errorss.new_span_error').text(value);
                        $('.' + index + '_errorss.new_span_error').show('active');
                    });
                    if (response && response.error_message1) {

                        $(".otp_error").text(response.error_message1);
                        $(".otp_error").show("active");
                    }
                    $(':input[type="submit"]').prop('disabled', false);
                } else {
                    if ($('#otp_coupan').val()) {
                        $(':input[type="submit"]').prop('disabled', true);
                    } else {
                        $(':input[type="submit"]').prop('disabled', false);

                    }
                    /* toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 3000;
                    toastr.success(response.success_message);
                    $('.coupon_otp_box').show();
                    $('#verifyOtpButton1').show();
                    $('#sendOtpButton1').hide(); */ 

                    $.each(response.request, function(index, value) {
                       // $('.' + index + 's').attr('disabled', true);
                    });

                    if (response.is_relode == 'yes') {
                        window.location.assign(thankuUrl);
                    }
                    $('#reachus_id').val(response.ReachUs.id)

                }
            },
        });
    });
});


$(document).ready(function() {
	
    

    $(document).on("click", ".closeForm", function() {
        //$("form").trigger('reset');
        $('.error_class').hide();
    })

})
</script>
<script defer async>
$(document).ready(function() {
	var interval = null;
	function blink(){
		if($('a[href*="https://www.tracemyip.org/"]').length > 0){
			console.log('ritu');
			console.log($('a[href*="https://www.tracemyip.org/"]').length);
			
			$('a[href*="https://www.tracemyip.org/"]').css('display','none');
			clearInterval(interval);
		}
	
	}
	interval = setInterval(blink,1500);
	
    $('#verifyOtpButton').hide();
    $("#formSubmit").submit(function(event) {
        //$(':input[type="submit"]').prop('disabled', true);
        var form = document.getElementById('formSubmit');
        if ($('#otps').val()) {
            var url = "{{ route('contact.submitOtp') }}";
            var formData = new FormData(form);
            formData.append('reachus_id', $('.reachus_ids').val());
        } else {
            var formData = new FormData(form);
            var url = "{{ route('contact.reachUsStore_old') }}";
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
                    $(':input[type="submit"]').prop('disabled', false);
                    $.each(response.error_message, function(index, value) {
						
                        $('.' + index + '_errors').text(value[0]);
                        $('.' + index + '_errors').show('active');
                        $('.' + index + '_errors').css('color','red');
                    });
                    if (response && response.error_message1) {
                        $(".otp_error").text(response.error_message1);
                        $(".otp_error").show("active");
                    }
                } else {
                    console.log('response------------------------');
                    console.log(response);
                    console.log('response------------------------end');
                    toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 1500;
                    toastr.success(response.success_message);
                     $('.coupon_otp_boxs').show();
                    $('#verifyOtpButton').show();
                    $('#sendOtpButton').hide(); 
					
					
                    /* $('.coupon_otp_boxs').hide();
                    $('#verifyOtpButton').hide();
                    $('#sendOtpButton').hide();*/ 

                    $.each(response.request, function(index, value) {
                        //$('.' + index + 's').attr('disabled', true);
                    });
                    if (response.is_relode == 'yes') {
						//window.location.assign(thankuUrl);
                    }
                    $('#reachus_id').val(response.ReachUs.id)
                    //     }
                    // }
                    $('#reachus_ids').val(response.ReachUs.id)
                    $(':input[type="submit"]').prop('disabled', false);
                }
            },
        });
    });
})
function onlyNumberKey(evt) {
	// Only ASCII character in that range allowed
	var ASCIICode = (evt.which) ? evt.which : evt.keyCode
	if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
		return false;
	return true;
}
</script>
<style>
html {
    touch-action: manipulation;
}

.contactForm .error_class{color:#fff !important;display: flex;}
.new_span_error{
	margin-top:0px !important;
}
.formfield label{
	 width: 90%;
    float: left;
    color: #fff;
    margin-bottom: 2px;
    font-size: 12px;
    margin-top: 10px;
}
.formfield input,.formfield textarea{
	margin-bottom: 5px;
}
.formfield input{
	height: 28px;
}
.whatsapp-chat .img-icon-a {
  display: block !important;
}
.whatsapp-chat {
	top: auto;
    left: 10px;
    right: 0;
    bottom: 15px;
	width:60px;
}
.coupon_otp_boxs,.coupon_otp_box{
	display:none;
}
#dial_codeformSubmits{
	width: 30%;
    height: 30px;
}
#phoneformSubmits{
	width:59% !important
}

</style>