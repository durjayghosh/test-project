<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width">
	<?php  $currenturl = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if (strpos($currenturl,'hair-toppers-for-women-chennai') !== false) {?>
			<title>Hair Toppers for women in chennai</title>
		<?php }else{
			echo '<title>Hair Toppers for women in Hyderabad</title>';
		} ?>
	
	<meta name="google-site-verification" content="uXTqgwKJWF6D2opxIR0dYvC_SmV5NWHthuO-lf3uDNU" />
	<meta name="description" content="Wigomania provides high quality toppers for women. it is best for women who is having thin hair or hair loss"/>
	
	
    @include('frontend.common.metaads')
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
})(window,document,'script','dataLayer','GTM-NX75J44');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NX75J44"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script src="https://browser.sentry-cdn.com/<VERSION>/bundle.min.js"></script>
</head>

<body class="page-home">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NX75J44"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    @include('frontend.common.headerads')
    @include('frontend.common.model_box')
           <?php echo $setting->footer_script ?>
        @yield('content')
     @include('frontend.common.footeradstopper')
</body>
</html>