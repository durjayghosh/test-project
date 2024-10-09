<!DOCTYPE html>
<html>
<head>
    <title>{{ isset($Page->title) ? $Page->title : 'Wig-O-Mania' }}</title>
    @include('frontend.common.meta')
</head>
<body class="page-home">


        @include('frontend.common.header')
        @include('frontend.common.model_box')
        <main>

            @yield('content')
            @include('frontend.common.footer')



</body>
</html>
