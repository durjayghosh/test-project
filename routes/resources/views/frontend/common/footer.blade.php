<!--**********************************
    Footer start
***********************************-->
<footer class="container footer-1">
    <!-- <p class="float-end"><a href="#">Back to top</a></p> -->
    <div class="row">
        <div class="col-md-6">
            @if($GeneralSetting->copyright)
                <p class="copyright">{{ $GeneralSetting->copyright }}
                    <script type="text/javascript">
                        document.write((new Date()).getFullYear());
                    </script>
                    | &nbsp;&nbsp; <a href="{{ route('sitemap') }}">Site Map</a>
                </p>
            @endif
        </div>
        <div class="col-md-6">
            <div class="footRight">
                <div class="footSocial">
                    @if($GeneralSetting->facebook)
                        <a href="{{ $GeneralSetting->facebook }}" target="_blank">
                            <img src="{{ asset('image/f-logo.webp') }}" style="width: 25px;" alt="main">
                        </a>
                    @endif
                    @if($GeneralSetting->instagram)
                        <a href="{{ $GeneralSetting->instagram }}" target="_blank">
                            <img src="{{ asset('image/i-logo.png') }}" style="width: 25px;" alt="main">
                        </a>
                    @endif
                    @if($GeneralSetting->wordpress)
                        <a href="{{ $GeneralSetting->wordpress }}" target="_blank">
                            <img src="{{ asset('image/w.jpg') }}" style="width: 25px;" alt="main">
                        </a>
                    @endif
                    @if($GeneralSetting->youtube)
                        <a href="{{ $GeneralSetting->youtube }}" target="_blank">
                            <img src="{{ asset('image/y-logo.png') }}" style="width: 25px;" alt="main">
                        </a>
                    @endif
                </div>
                <div class="footDtls">
                    @if($GeneralSetting->footer_website_name)
                        <h4>{{ $GeneralSetting->footer_website_name }}</h4>
                    @endif
                    @if($GeneralSetting->youtube)
                        <a href="mailto:{{ $GeneralSetting->email }}">
                            <span>
                                <img src="https://wigomania.com/images/mail.png" alt="main">
                            </span>
                            {{ $GeneralSetting->email }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="popup" id="popup" style="display: none;">

    <div class="center_popup">
        <div class="popupscreen">
                    <span class="closePop closeForm" onclick="closePop();"><img alt="closepopup" src="https://wigomania.com/assets/error_wigomania-child/images/closePop.png" class="lazyloaded" data-ll-status="loaded"><noscript><img
                                src="https://wigomania.com/assets/error_wigomania-child/images/closePop.png" alt="closePopImage"></noscript></span>
            <div class="coupontxt">
                <p style="color: black; font-weight: bold;padding:0px 20px">We offer you 15% DISCOUNT OFF MRP + FREE DEMO AND
                    CONSULTATION at any of our hair studios. Kindly
                    complete the form</p></div>
            <div class="DiscountCoupon">
                <div class="imageDiv">
                    <div class="mySlides">
                        <img src="https://wigomania.com/assets/error_wigomania-child/images/21.jpg" alt="coupon" class="lazyloaded" data-ll-status="loaded">
                        <noscript><img src="https://wigomania.com/assets/error_wigomania-child/images/21.jpg" alt="coupon">
                        </noscript>
                    </div>
                </div>

                <div class="leftdiv">
                    <div class="rightdiv">
                        <form class="contactForm" method="post" action="{{ route('contact.reachUsStore') }}" id="formSubmits">
                           @csrf
                           <div class="formfield PhonECode">
                                <label>Name: </label>
                                <input type="text" name="full_name" class="full_names" data-class-name="full_names" placeholder="Enter Your Name" maxlength="10"><br>
                                <span class="error_class full_name_errors new_span_error" ></span>
                            </div>
                            <div class="formfield PhonECode">
                                <label>WhatsApp Number: </label>
                                <input type="tel" name="mobile_number" class="mobile_numbers" id="phone" data-class-name="mobile_numbers"  maxlength="10"><br>
                                <input type="hidden" id="country_data" name="country_data" value="in">
                                <input type="hidden" class="dial_code" id="dial_code" name="dial_code" value="">
                                <span class="error_class mobile_number_errors"></span>
                            </div>
                            <div class="formfield">
                                <label>Email: </label>
                                <input type="text" name="email" placeholder="Enter Your Email" data-class-name="emails" class="emails"><br>
                                <span class="error_class email_errors new_span_error"></span>
                            </div>
                            <div class="formfield">
                                <label>What are looking for:</label>
                                <textarea rows="5" col="50" name="purpose_of_enquery" data-class-name="purpose_of_enquerys" placeholder="Enter Your Subject" class="purpose_of_enquerys"></textarea><br>
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
                                <span class="error_class mathcaptcha_errors new_span_error"></span>
                            </div>
                            <div class="formfield coupon_otp_box" style="display: none;margin-top:5px;">
                                <label style="color: white;">OTP</label>
                                <input type="number" name="otp" class="contactFormInp" id="otp" autocomplete="off" >
                                <span class="error_class otp_errors new_span_error"></span>
                                <input type="hidden" name="reachus_id" class="reachus_id" id="reachus_id" value="" autocomplete="off" >
                            </div>

                            <div id="">
                                {{--  <input type="button" name="input" class="contactFormSubmit" id="sendCouponOTP" value="Send OTP">  --}}
                                <button type="submit" class="contactFormSubmit">Send OTP</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="chat-section">
    <div class="row">
        <div class="col-md-6 text-start">
            <div class="whatsapp-chat">
                <img src="{{ asset('frontend/images/whatsapp.png') }}" alt="WhatsApp chat">
            </div>
        </div>
        {{--  <div class="col-md-6 text-end">
            <div class="tawk-chat">
                <img src="{{ asset('frontend/images/tawk.png') }}" alt="WhatsApp chat">
            </div>
        </div>  --}}
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index: 10101010;">
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
                        <input type="text" class="form-control" name="full_name" >
                        <span class="error_class full_name_errorsss"></span>
                    </div>
                     <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="email" >
                        <span class="error_class email_errorsss"></span>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Mobile Number:</label>
                        <input type="tel" name="mobile_number" class="form-control" id="bookapointment_number" data-class-name="mobile_numbers"  maxlength="10"><br>
                        <input type="hidden" id="country_data" name="country_data" value="in">
                        <input type="hidden" class="dial_code" id="dial_code" name="dial_code" value="">
                        <span class="error_class mobile_number_errorsss"></span>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Date:</label>
                        <input type="date" class="form-control" name="date" >
                        <span class="error_class date_errorsss"></span>
                    </div>

                </div>
                <div class="modal-footer header_pink">
                    <button type="button" class="btn btn-secondary btn-new-1 closeForm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-new">Book An Appointment</button>
                </div>
            </form>
        </div>
    </div>
</div>

</main>
<!--**********************************
    Footer end
***********************************-->


<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
{{--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('frontend/build/js/intlTelInput.js') }}"></script>
{{--  Model Box start  --}}
{{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>  --}}
{{--  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>  --}}

{{--  Model box end  --}}
<script>
    $(document).ready(function(){
        jQuery(function(){
            var popup = window.localStorage.getItem('popup');
            var popupCloseCount = window.sessionStorage.getItem('popupClose');
            if(popup != 1){
                if(popupCloseCount == 1 || popupCloseCount > 1){
                    jQuery('.popup').hide();
                }else{
                    setTimeout(function(){
                        jQuery('.popup').show();
                    },15000);
                }
            }
        });

        $('.couponModal').click(function(){

            jQuery('.popup').show();
        })
    })

function closePop(){

    jQuery('.popup').hide();
    $('.popup').modal('hide');
    var popupClose = window.sessionStorage.getItem('popupClose');
    if(popupClose==undefined || popupClose=='' || popupClose==null){
        window.sessionStorage.setItem('popupClose',1);
    }else{
        popupClose = parseInt(popupClose)+1;
        window.sessionStorage.setItem('popupClose',popupClose);
    }
}

    $(function() {
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            items: 3,
            margin: 10,
            loop: true,
            nav: true
        });
    });
</script>



<script>
	// set focus when modal is opened
{{--  $('#modal-content').on('shown.bs.modal', function () {
    $("#txtname").focus();
});

// show the modal onload
$('#modal-content').modal({
    show: true
});

// everytime the button is pushed, open the modal, and trigger the shown.bs.modal event
$('#openBtn').click(function () {
    $('#modal-content').modal({
        show: true
    });
});  --}}
</script>

<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5afa78775f7cdf4f05343a62/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();


    {{--  $(document).ready(function(){
        $( "#formSubmits" ).submit(function( event ) {

            var routes = "{{ route('contact.reachUsStore') }}";
            var data = $(this);
            $('.error_class').hide('active');
            var full_name = $('.full_names').val();
            var mobile_number = $('.mobile_numbers').val();
            var email = $('.emails').val();
            var purpose_of_enquery = $('.purpose_of_enquerys').val();
            event.preventDefault();
             $.ajax({
                url: routes,
                type: "POST",
                data: {
                    full_name : full_name,
                    mobile_number : mobile_number,
                    email :email,
                    purpose_of_enquery : purpose_of_enquery,
                    "_token": "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response);
                    if(response.error){
                        $.each(response.error_message, function( index, value ) {
                            $('.'+index+'_errors').text(value);
                            $('.'+index+'_errors').show('active');
                          });
                    }else{
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr.options.timeOut = 1500; // 1.5s
                        toastr.success(response.success_message);
                        setTimeout(function(){ location.reload(); }, 2000);
                    }

                },
            });
        });
    })  --}}

    var input = document.querySelector("#phone");
    if(input){
        window.intlTelInput(input, {
            separateDialCode: true,
            hiddenInput: "full_number",
            utilsScript: "{{asset('assets/js/utils.js')}}",
            initialCountry: "{{ 'IN' }}",
        });
    }

    var phonesinput = document.querySelector("#phones");
    if(phonesinput){
        window.intlTelInput(phonesinput, {
            separateDialCode: true,
            hiddenInput: "full_number",
            utilsScript: "{{asset('assets/js/utils.js')}}",
            initialCountry: "{{ 'IN' }}",
        });
    }


    var phones_reachus = document.querySelector("#phones_reachus");
    if(phones_reachus){
        window.intlTelInput(phones_reachus, {
            separateDialCode: true,
            hiddenInput: "full_number",
            utilsScript: "{{asset('assets/js/utils.js')}}",
            initialCountry: "{{ 'IN' }}",
        });
    }

    var bookapointment_number = document.querySelector("#bookapointment_number");
    if(bookapointment_number){
        window.intlTelInput(bookapointment_number, {
            separateDialCode: true,
            hiddenInput: "full_number",
            utilsScript: "{{asset('assets/js/utils.js')}}",
            initialCountry: "{{ 'IN' }}",
        });
    }


    $('.iti__country').click(function() {
        var code = $(this).attr('data-country-code');
        $('#country_data').val(code);
        var dial_code = $(this).attr('data-dial-code');
        $('.dial_code').val(dial_code);
    });

const thankuUrl = "{{ route('thanku') }}";




    $(document).ready(function(){
        $( "#formSubmits" ).submit(function( event ) {
            if($('#otp').val()){
                var url = "{{ route('contact.submitOtp') }}";
            }else{
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
                    if(response.error){
                        $.each(response.error_message, function( index, value ) {
                            $('.'+index+'_errors').text(value);
                            $('.'+index+'_errors').show('active');
                          });
                    }else{
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr.options.timeOut = 3000;
                        toastr.success(response.success_message);
                        $('.coupon_otp_box').show();

                        $.each(response.request, function( index, value ) {
                            $('.'+index + 's').attr('disabled', true);
                        });

                        if(response.is_relode == 'yes'){
                            window.location.assign(thankuUrl);
                            {{--  setTimeout(function(){ location.reload(); }, 4000);  --}}
                        }
                        $('#reachus_id').val(response.ReachUs.id)

                    }
                },
            });
        });
    })


    $(document).ready(function(){
        $( "#book_an_appointment" ).submit(function( event ) {
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
                    if(response.error){
                        $.each(response.error_message, function( index, value ) {
                            $('.'+index+'_errorsss').text(value);
                            $('.'+index+'_errorsss').show('active');
                          });
                    }else{
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr.options.timeOut = 1500;
                        toastr.success(response.success_message);
                        window.location.assign(thankuUrl);
                    }
                },
            });
        });

        $(document).on("click", ".closeForm", function(){
            $("form").trigger('reset');
            $('.error_class').hide();
        })

    })
</script>

