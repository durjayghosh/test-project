@extends('frontend.layouts.nail')
@section('title', 'Thank You!')
@section('content')

{{--  <section class="review-banner"  style="background-image: url({{ asset(@$PageSections->image) }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2 class="review-banner-heading">{{ @$PageSections->heading }}</h2>
                <div class="review-banner-para"> {!! @$PageSections->description !!}</div>
            </div>
        </div>
    </div>
</section>  --}}


<section class="thankyou-section">
    <div class="container">
         <div class="row">
              <div class="col-lg-12">
                  <p class="text-center"><img src="{{ isset($GeneralSetting->logo) ? asset($GeneralSetting->logo) : asset('frontend/images/logo.png') }}" alt="logo" title="LOGO"></p>
                  <h2 class="thankyou-h2">THANK YOU</h2>
                  <h3 class="thankyou-h3">Thank you for your message.We will get in touch with you shortly.</h3>
    </div>
    </div>
    </div>
</section>
<script>
	var  HomeURL = "{{ route('nailacademy') }}";
   jQuery(document).ready(function() {
	   setTimeout( function() {
		 window.location.assign(HomeURL);
	  }, 3000);
	  
   });
</script>

@endsection
