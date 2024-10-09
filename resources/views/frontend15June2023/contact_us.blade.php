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
                <label for="" class="form-label">WhatsApp Number</label>
                <input type="tel" name="mobile_number" value="{{ old('mobile_number') }}"
                    class="form-control mobile_numbers" data-class-name="mobile_numbers" maxlength="10"
                    id="phones_reachus">
                <input type="hidden" id="country_data" name="country_data" value="in">
                <input type="hidden" class="dial_code" id="dial_code" name="dial_code" value="">
                <span class="error_class mobile_number_errorss"></span>
            </div>

            <div class="mb-3">
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
            <div class="mb-3">
                <label for="" class="form-label">Please solve the following math function:
                    {{ app('mathcaptcha')->label() }}</label>
                {!! app('mathcaptcha')->input(['class' => 'form-control', 'id' => 'mathgroup']) !!}
                <!--<input type="text" data-class-name="purpose_of_enquerys" name="purpose_of_enquery" value="{{ old('purpose_of_enquery') }}" class="form-control purpose_of_enquerys" id="">-->
                <span class="error_class mathcaptcha_errorss"></span>
            </div>
            {{--  <!--<div class="form-group">-->
                <!--    {{ app('mathcaptcha')->reset(); }}-->
            <!--    <label for="mathgroup">Please solve the following math function: {{ app('mathcaptcha')->label() }}</label>-->
            <!--    {!! app('mathcaptcha')->input(['class' => 'form-control', 'id' => 'mathgroup']) !!}-->
            <!--    <span class="error_class mathcaptcha_errorss"></span>--> --}}

            <!--</div>-->


            <div class="mb-3 coupon_otp_boxs" id="coupon_otp_boxs" style="display: none;margin-top:5px;">
                <label for="" class="form-label">OTP</label>
                <input type="text" name="otp" class="form-control contactFormInp" id="otp" autocomplete="off">

                <input type="hidden" name="reachus_id" class="reachus_id" id="reachus_ids" value="" autocomplete="off">
                <span class="error_class otp_error"></span>
            </div>
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
                        window.location.assign(thankuUrl); {
                            {
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);
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