@extends('frontend.blog.master')
@section('title', 'Blog')

@section('css')
    <link href="{{asset('blog_assets')}}/css/style.css" rel="stylesheet">
@endsection
@section('content')


    <?php
    function isMobileBrowser() {
        $mobileKeywords = array(
            'mobile', 'webos', 'iphone', 'ipod', 'android', 'blackberry',
            'windows phone', 'symbian', 'palm', 'opera mini', 'opera mobi'
        );
        $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
        foreach ($mobileKeywords as $keyword) {
            if (strpos($userAgent, $keyword) !== false) {
                return true;
            }
        }
        return false;
    }
    ?>
    <style type="text/css">
        @media screen and (max-width:568px) {
            .coupon-left img,.mySlides {
                display:none !important;
            }
            section.mobile-banner{
                margin-top:130px !important;
            }
            .sticky_gallery{
                border-bottom: 1px solid #ee4695;
            }
            .carousel-caption{
                padding-top: 0.75rem !important;
                padding-bottom: 0rem  !important;
            }
            .whatsapp-chat{
                bottom: 20px;
            }
        }
        .mobile-line .col-lg-7{
            display:none !important;
        }
        .titles {
            margin-top: 20px;
            font-size: 40px;
            font-weight: 700;
            color: #ee4695;
            margin-bottom: 10px;
        }
        .sections {
            margin-top: 40px;
            margin-bottom: 80px;
        }
        .divider {
            position: relative;
            border-bottom: 3px solid #f0f0f0;
            margin-bottom: 30px;
            margin-top: 30px;
            width: 80%;
            margin: auto;
        }

        .divider:before {
            position: absolute;
            width: 30px;
            height: 30px;
            border: 1px solid #f0f0f0;
            left: 50%;
            margin-left: -15px;
            top: 50%;
            background: #fff;
            margin-top: -15px;

        }
        .divider:after {
            position: absolute;
            width: 20px;
            height: 20px;
            border: 1px solid #ee4695;
            left: 50%;
            margin-left: -10px;
            top: 50%;
            background: #ee4695;
            margin-top: -10px;
        }
        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
            margin-bottom: 20px;
            text-align: center;
        }
        .marketing h2 {
            font-weight: normal;
        }
        .marketing .col-lg-4 p {
            margin-right: 10px;
            margin-left: 10px;
        }
        /* Featurettes
        ------------------------- */
        .featurette-divider {
            margin: 80px 0; /* Space out the Bootstrap <hr> more */
        }
        /* Thin out the marketing headings */
        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -1px;
        }
        .review-header.customdesb{
            text-align: center;
            color: #ee4695;
            font-size: 27px;
            font-weight: bold;
        }
    </style>
    <div class="divider"></div>

    <div class="mt-5"></div>
    <!-- Our Forte -->




    <!-- News With Sidebar Start -->
    <div class="container-fluid">




        <div class="container">


            <div class="row">

                <div style="margin-top: 100px!important;">
                    <p><b>WIG-O-MANIA</b> Brand of Hair Products is a UK based company since 2006  that offers a one-stop solution for an exclusive range of Extensions,
                        Wigs & Hair Pieces. Hair is every women’s Crowning Glory. Wig-O-Mania clients can now have hair-wear options they never dreamed possible.
                        Whether it is for a personal use, a social occasion, catwalk show or even a magazine shoot – our versatile and durable styles is aimed at creating a variety of stunning
                        looks with that added sophistication.</p>

                    <p class="page_speed_1736925714">
                        The WOM brand brings with it a wealth of resources of knowledge and experience in all areas related to its business – its Creative Technical Executive offers more than 4 decades of experience in the UK Hair Industry.
                    </p>
                    <p>
                        The Wig-O-Mania Blog is an attempt to share our knowledge and experience of the hair industry
                    </p>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('blog_assets/img/Picture5.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <p>Wigs – An Instant Solution for ladies
                                        suffering from hair loss and baldness
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('blog_assets/img/Picture4.jpg')}}" alt="" class="img-fluid w-50">
                                </div>
                                <div class="col-md-6">
                                    <p>Extensions – Instant length & Volume in various colours and textures

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('blog_assets/img/Picture3.png')}}" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <p>Wigs – An Instant Solution for ladies
                                        suffering from hair loss and baldness
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('blog_assets/img/Picture2.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <p>Wigs – An Instant Solution for ladies
                                        suffering from hair loss and baldness
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('blog_assets')}}/img/news-700x435-1.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                           href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{asset('blog_assets')}}/img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('blog_assets')}}/img/news-700x435-2.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                           href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{asset('blog_assets')}}/img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('blog_assets')}}/img/news-700x435-3.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                           href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{asset('blog_assets')}}/img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('blog_assets')}}/img/news-700x435-4.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                           href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{asset('blog_assets')}}/img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-5">
                            <div class="card review-block">
                                <div class="card-body">
                                    <div class="review-image">
                                        <span>R</span>
                                    </div>

                                    <p class="review-text page_speed_157732544">It’s always the exceptional experience at Wig-O-Mania! The skilled stylists provides personalized service, they always understands my preferences, and delivered a fabulous natural...<button type="button" class="modal_review" data-toggle="modal" data-target="#exampleModalCenter0">Read
                                            More </button></p>

                                    <div class="modal fade" id="exampleModalCenter0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <p class="review-name">Rathesh Kumar</p>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                            style="background: #ee4695; border-radius: 8px; border: none;"
                                                            data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="review-date">
                                                        03 Mar, 2024</p>
                                                    <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </p>
                                                    It’s always the exceptional experience at Wig-O-Mania! The skilled stylists provides personalized service, they always understands my preferences, and delivered a fabulous natural look. The ambiance is clean and always inviting, and the staff's professionalism made my visits enjoyable. I left feeling pampered and confident. I am a customer of Wig-O-Mania for the past two years and I would highly recommend for anyone seeking top-notch hair care!

                                                    My favourite person here is Aysha, she spreads the positivity around the store and keeps the environment pleasant and active. Congratulations on your anniversary, wish you all success in the upcoming years!!
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="divider review-divider"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="review-name">Rathesh Kumar</p>
                                            <p class="review-date">
                                                03 Mar, 2024
                                            </p>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <div class="card review-block">
                                <div class="card-body">
                                    <div class="review-image">
                                        <span>R</span>
                                    </div>

                                    <p class="review-text page_speed_157732544">It’s always the exceptional experience at Wig-O-Mania! The skilled stylists provides personalized service, they always understands my preferences, and delivered a fabulous natural...<button type="button" class="modal_review" data-toggle="modal" data-target="#exampleModalCenter0">Read
                                            More </button></p>

                                    <div class="modal fade" id="exampleModalCenter0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <p class="review-name">Rathesh Kumar</p>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                            style="background: #ee4695; border-radius: 8px; border: none;"
                                                            data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="review-date">
                                                        03 Mar, 2024</p>
                                                    <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </p>
                                                    It’s always the exceptional experience at Wig-O-Mania! The skilled stylists provides personalized service, they always understands my preferences, and delivered a fabulous natural look. The ambiance is clean and always inviting, and the staff's professionalism made my visits enjoyable. I left feeling pampered and confident. I am a customer of Wig-O-Mania for the past two years and I would highly recommend for anyone seeking top-notch hair care!

                                                    My favourite person here is Aysha, she spreads the positivity around the store and keeps the environment pleasant and active. Congratulations on your anniversary, wish you all success in the upcoming years!!
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="divider review-divider"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="review-name">Rathesh Kumar</p>
                                            <p class="review-date">
                                                03 Mar, 2024
                                            </p>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <div class="card review-block">
                                <div class="card-body">
                                    <div class="review-image">
                                        <span>R</span>
                                    </div>

                                    <p class="review-text page_speed_157732544">It’s always the exceptional experience at Wig-O-Mania! The skilled stylists provides personalized service, they always understands my preferences, and delivered a fabulous natural...<button type="button" class="modal_review" data-toggle="modal" data-target="#exampleModalCenter0">Read
                                            More </button></p>

                                    <div class="modal fade" id="exampleModalCenter0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <p class="review-name">Rathesh Kumar</p>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                            style="background: #ee4695; border-radius: 8px; border: none;"
                                                            data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="review-date">
                                                        03 Mar, 2024</p>
                                                    <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </p>
                                                    It’s always the exceptional experience at Wig-O-Mania! The skilled stylists provides personalized service, they always understands my preferences, and delivered a fabulous natural look. The ambiance is clean and always inviting, and the staff's professionalism made my visits enjoyable. I left feeling pampered and confident. I am a customer of Wig-O-Mania for the past two years and I would highly recommend for anyone seeking top-notch hair care!

                                                    My favourite person here is Aysha, she spreads the positivity around the store and keeps the environment pleasant and active. Congratulations on your anniversary, wish you all success in the upcoming years!!
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="divider review-divider"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="review-name">Rathesh Kumar</p>
                                            <p class="review-date">
                                                03 Mar, 2024
                                            </p>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <div class="card review-block">
                                <div class="card-body">
                                    <div class="review-image">
                                        <span>R</span>
                                    </div>

                                    <p class="review-text page_speed_157732544">It’s always the exceptional experience at Wig-O-Mania! The skilled stylists provides personalized service, they always understands my preferences, and delivered a fabulous natural...<button type="button" class="modal_review" data-toggle="modal" data-target="#exampleModalCenter0">Read
                                            More </button></p>

                                    <div class="modal fade" id="exampleModalCenter0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <p class="review-name">Rathesh Kumar</p>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                            style="background: #ee4695; border-radius: 8px; border: none;"
                                                            data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="review-date">
                                                        03 Mar, 2024</p>
                                                    <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </p>
                                                    It’s always the exceptional experience at Wig-O-Mania! The skilled stylists provides personalized service, they always understands my preferences, and delivered a fabulous natural look. The ambiance is clean and always inviting, and the staff's professionalism made my visits enjoyable. I left feeling pampered and confident. I am a customer of Wig-O-Mania for the past two years and I would highly recommend for anyone seeking top-notch hair care!

                                                    My favourite person here is Aysha, she spreads the positivity around the store and keeps the environment pleasant and active. Congratulations on your anniversary, wish you all success in the upcoming years!!
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="divider review-divider"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="review-name">Rathesh Kumar</p>
                                            <p class="review-date">
                                                03 Mar, 2024
                                            </p>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="mt-3"></div>
                        <div class="col-lg-12">
                            <div class="row news-lg mx-0 mb-3">
                                <div class="col-md-6 h-100 px-0">
                                    <img class="img-fluid h-100" src="{{asset('blog_assets')}}/img/news-700x435-5.jpg" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                    <div class="mt-auto p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                               href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                        <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                            rebum clita rebum dolor stet amet justo</p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="{{asset('blog_assets')}}/img/user.jpg" width="25" height="25" alt="">
                                            <small>John Doe</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3"></div>
                        <div class="col-lg-12">
                            <div class="row news-lg mx-0 mb-3">
                                <div class="col-md-6 h-100 px-0">
                                    <img class="img-fluid h-100" src="{{asset('blog_assets')}}/img/news-700x435-5.jpg" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                    <div class="mt-auto p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                               href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                        <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                            rebum clita rebum dolor stet amet justo</p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="{{asset('blog_assets')}}/img/user.jpg" width="25" height="25" alt="">
                                            <small>John Doe</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3"></div>
                        <div class="col-lg-12">
                            <div class="row news-lg mx-0 mb-3">
                                <div class="col-md-6 h-100 px-0">
                                    <img class="img-fluid h-100" src="{{asset('blog_assets')}}/img/news-700x435-5.jpg" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                    <div class="mt-auto p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                               href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                        <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                            rebum clita rebum dolor stet amet justo</p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="{{asset('blog_assets')}}/img/user.jpg" width="25" height="25" alt="">
                                            <small>John Doe</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3"></div>
                        <div class="col-lg-12">
                            <div class="row news-lg mx-0 mb-3">
                                <div class="col-md-6 h-100 px-0">
                                    <img class="img-fluid h-100" src="{{asset('blog_assets')}}/img/news-700x435-5.jpg" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                    <div class="mt-auto p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                               href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                        <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                            rebum clita rebum dolor stet amet justo</p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="{{asset('blog_assets')}}/img/user.jpg" width="25" height="25" alt="">
                                            <small>John Doe</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3"></div>

                    </div>
                </div>

                <div class="col-lg-4">

                    <!-- Important Links Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Important Links</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <ul class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    Privacy Policy
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    Terms & Conditions
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    About Us
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    Contact Us
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    FAQ
                                </a>
                            </ul>
                        </div>
                    </div>
                    <!-- Important Links End -->

                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->



@endsection
