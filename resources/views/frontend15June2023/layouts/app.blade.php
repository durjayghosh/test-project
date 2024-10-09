<!DOCTYPE html>
<html lang="es">

<head>
    <title>{{ isset($Page->title) ? $Page->title : 'Wig-O-Mania' }}</title>
	
	
	
	<meta name="google-site-verification" content="ywSNZvVBRgLnpO_HuCwSZEeQKsvHWvpWu4ghelsMqaE" />
	
    @include('frontend.common.meta')

    <?php

    use App\Models\{GeneralSetting};

    $setting = GeneralSetting::first();

    ?>
    <?php echo $setting->header_css ?>
    <?php echo $setting->header_script ?>
	
</head>

<body class="page-home">

	
    @include('frontend.common.header')
    @include('frontend.common.model_box')
    <main>
        <?php echo $setting->footer_script ?>
        @yield('content')
        @include('frontend.common.footer')



</body>

</html>