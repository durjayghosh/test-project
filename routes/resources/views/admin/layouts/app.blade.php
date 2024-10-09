<!DOCTYPE html>
<html>
<head>
  @include('admin.common.meta')
</head>
<body>
    <!--*******************
      Preloader start
    ********************-->
    <div id="preloader">
      <div class="loader"></div>
    </div>
    <!--*******************
      Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{ route('admin.dashboard') }}">
                    <div class="logo-abbr">W</div>
                    <span class="brand-title" ><img src="{{ isset($GeneralSetting->logo) ? asset($GeneralSetting->logo) :  asset('frontend/images/logo.png') }}" alt="Wig-O-Maniya" class="w-50" style="margin-top: -20px;"></span>
                </a>
            </div>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        @include('admin.common.header')


        @include('admin.common.sidebar')

        @yield('content')

        @include('admin.common.footer')

        @include('admin.common.sidebar-right')

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

</div>
<!-- ./wrapper -->

@include('admin.common.footer-js')
</body>
</html>
