@extends('frontend.layouts.app')
@section('title', 'Reach-Us')
@section('content')


<style>
.invalid-feedback {
    display: block;
    color: white;
}
</style>

<section class="row page-section reach-section contact-section" id="reachSection">
    <div class="col-md-7 page-left p-0">
        <img src="{{ asset('frontend/images/reach.PNG') }}" class="reach_img" alt="contect us" title="•wigomania uk hair brand
">
    </div>
    <div class="col-md-5 page-right">
        <h1>Reach Us</h1>

        <form method="POST" action="#" id="formSubmitsReachus" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Your Name</label>
                <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control full_names"
                    id="">
                <span class="error_class full_name_errorss" data-class-name="full_names"></span>
            </div>

            <div class="mb-3">
                <input type="hidden" class="dial_code" id="dial_code" name="frmtype" value="reachus">
				<select name="dial_code" class="dial_codereach" id="dial_codereach" style="width: 32%;height: 26px;    margin-right: 5px;border: 1px solid #ccc;float: left;margin-top: 21px;">
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
<label for="" class="form-label">WhatsApp Number</label>
                <input type="tel" name="mobile_number" value="{{ old('mobile_number') }}"
                    class="form-control mobile_numbers" data-class-name="mobile_numbers" maxlength="10"
                    id="phones_reachus" style="float: left;
    width: 65%;">
                <input type="hidden" id="country_data" name="country_data" value="in">
                <!--<input type="hidden" class="dial_code" id="dial_code" name="dial_code" value="">-->
                <span class="error_class mobile_number_errorss"></span>
            </div>

            <div class="mb-31">
                <label for="" class="form-label">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" data-class-name="emails"
                    class="form-control emails" id="">
                <span class="error_class email_errorss"></span>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">PURPOSE OF INQUIRY?</label>
                <input type="text" data-class-name="purpose_of_enquerys" name="purpose_of_enquery"
                    value="{{ old('purpose_of_enquery') }}" class="form-control purpose_of_enquerys" id="">
                <span class="error_class purpose_of_enquery_errorss"></span>
            </div>
            
         <!--<div class="form-group">
               {{ app('mathcaptcha')->reset(); }}
               <label class="form-label" for="mathgroup">Please solve the following math function: {{ app('mathcaptcha')->label() }}</label>
               {!! app('mathcaptcha')->input(['class' => 'form-control', 'id' => 'mathgroup']) !!}
              <span class="error_class mathcaptcha_errorss"></span>
            </div>-->


            <div class="mb-3 coupon_otp_boxs" id="coupon_otp_boxs" style="display: none;margin-top:5px;">
                <label for="" class="form-label">OTP</label>
                <input type="text" name="otp" class="form-control contactFormInp" id="otp" autocomplete="off">

                <input type="hidden" name="reachus_id" class="reachus_id" id="reachus_ids" value="" autocomplete="off">
                <span class="error_class otp_error"></span>
            </div>
			<!--<button type="submit" class="btn btn-light" id="sendOtpButton">Send</button>-->
            <button type="submit" class="btn btn-light" id="sendOtpButton">Send OTP</button>
            <button type="submit" class="btn btn-light" id="verifyOtpButton3" style="display:none;">Verify OTP</button>
        </form>
    </div>
</section>

<section>

</section>
<script>
// const thankuUrl = "{{ route('thanku') }}";
$(document).ready(function() {

    //$('#verifyOtpButton3').hide();
    $("#formSubmitsReachus").submit(function(event) {

        event.preventDefault();
        $(':input[type="submit"]').prop('disabled', true);
        var form = document.getElementById('formSubmit');
        if ($('#otp').val()) {
            var url = "{{ route('contact.submitOtp') }}";
        } else {
            var url = "{{ route('contact.reachUsStore') }}";
        }
        var form = document.getElementById('formSubmitsReachus');
        var formData = new FormData(form);
        $('.error_class').hide('active');
        $('.error_class').attr("style", "display: none !important")

        $.ajax({
            url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.error) {
                    if (response && response.error_message1) {

                        $(".otp_error").text(response.error_message1);
                        $(".otp_error").show("active");
                    }
                    $(':input[type="submit"]').prop('disabled', false);
                    $.each(response.error_message, function(index, value) {
                        $('.' + index + '_errorss').text(value);
                        $('.' + index + '_errorss').show('active');
                    });

                } else {
                    if ($('#otp').val()) {
                        $(':input[type="submit"]').prop('disabled', true);
                    } else {
                        $(':input[type="submit"]').prop('disabled', false);

                    }
                    console.log('response------------------------');
                    console.log(response);
                    console.log('response------------------------end');
                    toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.positionClass = 'toast-bottom-right';
                    toastr.options.timeOut = 1500;
                    toastr.success(response.success_message);
                    $('.coupon_otp_boxs').show();
                    $('#verifyOtpButton3').show();
                    $('#sendOtpButton').hide();
                    $('.coupon_otp_boxs').show();

                    $.each(response.request, function(index, value) {
                        console.log(index, value);
                        $('.' + index + 's').attr('disabled', false);
                    });

                    if (response.is_relode == 'yes') {
						var formData1 = {
								Name: $('.full_names').val(),
								custemail: $('.emails').val(),
								purpose_of_enquery: $('.purpose_of_enquerys').val(),
								number: $('.mobile_numbers').val(),
								DialCode:$('.dial_codereach').val(),
								DiscountCode:response.coupon,
								form:'Google Search'
							};
							$.ajax({
								url: 'https://wigomania.co.uk/crm/chennai/index.php/Websitedata/DataFromWebsitetopracto',
								type: 'POST',
								data: formData1,
								success: function(r) {
									window.location.assign(thankuUrl);
								},
								error: function(xhr, status, error) {
								}
							});
                        /* window.location.assign(thankuUrl); {
                            {
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);
                            }
                        } */
                    }
                    $('#reachus_ids').val(response.ReachUs.id)
                }
            },
        });
    });
})
</script>
<style>
.reach-section .page-right form{
	width:80% !important;
}
@media screen and (max-width: 568px) {
	.reach-section .page-right form{
		width:100% !important;
	}
	.reach-section .page-right h1{
		margin-top: 0px;
	}
}
</style>


@endsection