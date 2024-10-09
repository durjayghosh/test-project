<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<meta name="description" content="{{ isset($Page->meta_description) ? $Page->meta_description : '' }}">
<meta name="author" content="{{ isset($Page->meta_title) ? $Page->meta_title : '' }}">
<meta name="keywords" content="{{ isset($Page->meta_keyword) ? $Page->meta_keyword : '' }}">
<?php
$current_url = url()->full();

?>
<link rel="canonical" href="{{$current_url}}" />

<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/style.css') }}?=<?php echo(rand(10,1000));?>" rel="stylesheet">

<script src="{{ asset('frontend/js/jquery.min.js') }}" data-pagespeed-no-defer></script>

<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="storage/gallery/1674023520logo.png" sizes="32x32" type="image/png">
<link rel="icon" href="storage/gallery/1674023520logo.png" sizes="16x16" type="image/png">
<!--<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">-->
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/storage/gallery/1674023520logo.png">
<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="{{ asset('frontend/css/toastr.css') }}" rel="stylesheet" />


<script src="{{ asset('frontend/js/adbce29e29.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('frontend/js/toastr.js') }}"></script>
<link rel="stylesheet" href="{{asset('frontend/build/css/intlTelInput.css')}}">