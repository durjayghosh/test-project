<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ isset($Page->meta_description) ? @$Page->meta_description : '' }}">
<meta name="author" content="{{ isset($Page->meta_title) ? @$Page->meta_title : '' }}">
<meta name="keywords" content="{{ isset($Page->meta_keyword) ? @$Page->meta_keyword : '' }}">
<?php
$current_url = url()->full();

?>



<link rel="canonical" href="{{$current_url}}" />
<link rel="preload" href="{{ asset('frontend/css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}"></noscript>
<link rel="preload" href="{{ asset('frontend/css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"></noscript>
<script src="{{ asset('frontend/js/jquery.min.js') }}" ></script>
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180" />
<link rel="icon" href="storage/gallery/1674023520logo.png" sizes="32x32" type="image/png" />
<link rel="icon" href="storage/gallery/1674023520logo.png" sizes="16x16" type="image/png" />
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3" />
<link rel="icon" href="/storage/gallery/1674023520logo.png" />
<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />
<link href="{{ asset('frontend/css/toastr.css') }}" rel="stylesheet" />
<script src="{{ asset('frontend/js/adbce29e29.js') }}" crossorigin="anonymous" defer async ></script>
<script src="{{ asset('frontend/js/toastr.js') }}" crossorigin="anonymous" defer async></script>
<link rel="preload" href="{{ asset('frontend/css/intlTelInput.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('frontend/css/intlTelInput.css') }}"></noscript>
