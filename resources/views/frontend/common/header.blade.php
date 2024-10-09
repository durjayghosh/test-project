<header class="regular-header sticky_gallery">
    @section('content')
        @php

            use App\Models\ {ProductCategory};

            $ProductCategory = ProductCategory::get();

        @endphp


        <div class="mobile-line">
            <div class="leftside col-lg-7">
                <span class="btn btn-light couponModal headtop" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#popup">Get additional 15% Discount on MRP@Wig-O-Mania.</span>
            </div>
            <div class="rightsidetext">
                <div class="headerinner">
                    <a class="btn btn-light" href="{{ route('reachUs') }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book an Appointment</a>
                    <span class="btn btn-light couponModal" href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#popup">Coupon</span>
                    @if(isset($GeneralSetting->contact_number))
                        <a href="tel:+919962831281" class="btn btn-outline-light mobile_num"><i class="fa fa-mobile"></i>+91-{{ wordwrap($GeneralSetting->contact_number, 5, "-", true) }}</a>
                    @endif
                    {{--  @if(isset($GeneralSetting->alternate_contact_number))
                        <a href="tel:{{ $GeneralSetting->alternate_contact_number }}" class="btn btn-outline-light mobile_num"><i class="fa fa-phone"></i>+91-{{ wordwrap($GeneralSetting->alternate_contact_number, 5, "-", true) }}</a>
                    @endif  --}}

                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-white main-nav customtesting">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ isset($GeneralSetting->logo) ? asset($GeneralSetting->logo) : asset('frontend/images/logo.png') }}" alt="logo" title="logo" >
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars new_menu" aria-hidden="true"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active behind-brand" aria-current="page" href="{{ route('behindTheBrand') }}">Behind the Brand</a>
                        </li>
                        <li class="nav-item menu-item">
                            <span class="nav-link goto-review" href="javascript:void(0);">Our Forte</span>

                            <ul class="drop-menu">

                                <li class="drop-menu-item">
                                    <a href="{{ route('product', $ProductCategory[0]->slug) }}">{{ $ProductCategory[0]->category_name}}</a>
                                </li>
                                <li class="drop-menu-item">
                                    <a href="{{ route('product', $ProductCategory[1]->slug) }}">{{ $ProductCategory[1]->category_name}}</a>
                                </li>
                                <li class="drop-menu-item">
                                    <a href="{{ route('product', $ProductCategory[2]->slug) }}">{{ $ProductCategory[2]->category_name}}</a>
                                </li>
                                <li class="drop-menu-item">
                                    <a href="{{ route('product', $ProductCategory[3]->slug) }}">{{ $ProductCategory[3]->category_name}}</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link goto-review" href="{{ route('home', '#studio') }}">Our Studio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link goto-review" href="{{ route('review') }}">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('partnership') }}">Partnership Opportunity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('csr') }}">CSR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link goto-review" href="{{ route('gallery') }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link reach-us" href="{{route('home.blog')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link reach-us" href="{{ route('reachUs') }}">Reach Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link reach-us" href="{{ route('nailacademy') }}">Nail Academy </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
</header>
<style>
    .header-phone {
        position: absolute;
        top: 1px;
        right: 5px;
    }
    .whatsapp-chat {
        position: fixed;
        top: auto;
        right: 0;
        z-index: 99;
        display: block;
        bottom:90px;
    }
    .mobile-line{
        display: inline-block !important;
        width: 100%;
    }
    .leftside {
        float: left;
        width:50%;
    }
    .rightsidetext{
        float: right;
        width:50%;
    }
    .rightsidetext .headerinner{
        text-align: right;
    }
    @media screen and (max-width: 1360px){
        .regular-header .main-nav {
            padding: 17px 0 0;
        }
    }
    @media (max-width: 768px) {
        .regular-header .main-nav{
            margin-top:0px;
            padding-top:0px;
            padding-bottom:0px;
        }
        .mobile-line .col-lg-7{
            display:block !important;
            text-align:center;
        }
        .whatsapp-chat {
            top: auto;left: 0;
            right: 0;
            bottom:90px;
        }
        .whatsapp-chat img {
            width: auto;
        }
    }
    @media screen and (max-width:568px){
        .regular-header .main-nav{
            margin-top:0px;
            padding-top:0px;
            padding-bottom:0px;
        }
        .customtesting.navbar .container-fluid{
            padding-top:0px !important;
            padding-bottom:0px !important;
        }
        .navbar-brand img{
            width: 70px;
        }
        button.navbar-toggler{
            margin-top: 0px !important;
        }
        .rightsidetext .headerinner{
            margin-top:8px;
        }
        section.review-banner{
            padding:111px 0px;
        }
        .leftside{
            width:100%;
        }
        .rightsidetext{
            width:100%;
        }
        .regular-header .main-nav{
            margin-top: -8px;
        }
        .navbar-brand{
            padding-top: 0px;
            padding-bottom: 0.5125rem;
        }
    }
    @media screen and (max-width: 480px){

        .regular-header .main-nav{
            margin-top: 0px;
        }
        .whatsapp-chat{
            width:10%;
        }

    }

    .navbar .container-fluid {
        padding: 12px 25px !important;
    }
</style>
