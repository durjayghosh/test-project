<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Google tag (gtag.js)
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122468699-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-122468699-1');
	</script> -->
	
	
	<meta name="viewport" content="width=device-width">
    <title>Nail Art Course in Hyderabad | Bluesky Nail Academy</title>
	<meta name="description" content="Discover the artistry of nail design with our Nail Art Course in Hyderabad. Perfect your skills in intricate designs, trends, and techniques under expert guidance.">
	<meta name="google-site-verification" content="uXTqgwKJWF6D2opxIR0dYvC_SmV5NWHthuO-lf3uDNU" />
	<meta name="author" content="Nail Art Classes in Hyderabad">
	<meta name="keywords" content="nail designs course, nail art classes, nail designs course,nail painting course">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @include('frontend.common.meta')
    <?php
    use App\Models\{GeneralSetting};
    $setting = GeneralSetting::first();
    ?>
    <?php //echo $setting->header_css ?>
    <?php //echo $setting->header_script ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M3LWSR92');</script>
<!-- End Google Tag Manager -->

<script src="https://browser.sentry-cdn.com/<VERSION>/bundle.min.js"></script>
</head>

<body class="page-home">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3LWSR92"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    @include('frontend.common.header_nail')
	@yield('content')
	@include('frontend.common.footer_nail')
</body>
</html>