<!--**********************************
    Sidebar start
***********************************-->
@php
    $Sliders = $Sliders ? $Sliders->first()->sectionList : [];
@endphp
<div id="myCarousel" class="carousel slide carousel-fade home-section mobile_num home-slider" data-bs-ride="carousel">
    <div class="carousel-indicators carousel-indicator">
        @if (count($Sliders) > 0)
            @foreach ($Sliders as $keys => $Slider)
                <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $keys }}"
                    class=" {{ $keys == 0 ? 'active' : '' }}" aria-current="{{ $keys == 0 ? 'true' : '' }}"
                    aria-label="Slide {{ $keys + 1 }}"> <span
                        class="banner-span">{{ $Slider->heading }}</span><i></i></li>
            @endforeach
        @endif
    </div>
    <div class="carousel-inner home-carousel">
        @if (count($Sliders) > 0)
            @foreach ($Sliders as $key => $Slider)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="row">
                        <div class="col-md-7 slide-left text-end p-0">
                            <img src="{{ asset($Slider->image) }}" alt="main">
                        </div>
                        <div class="col-md-5 slide-right">
                            <div class="slide-right-inner">
                                <div class="text-start">
                                    <h2>{{ $Slider->heading }}</h2>
                                    <p class="slide-para">{{ $Slider->description }}</p>
                                    @if ($Slider->link)
                                        <p><a class="btn sliderShow" href="{{ $Slider->link }}" data-id="{{ str_replace('#','',$Slider->link) }}">Learn More</a></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="">
            <img src="{{ asset('frontend/images/bannerTxt.png') }}" alt="main" class="mainTxt">
        </div>
    </div>
</div>
<section class="mobile-banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @if (count($Sliders) > 0)
                @foreach ($Sliders as $keys => $Slider)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $keys }}" class="{{ $keys == 0 ? 'active' : '' }}"></li>
                @endforeach
            @endif
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">

                <div class="carousel-caption banner-div">
                    <h5 class="banner-heading">Mens Hair System</h5>
                    <p class="banner-para">Long lasting without risk of allergy & discomfort</p>
                    <a href="" class="banner_pink_a">Learn More</a>
                </div>
            </div>

            @if (count($Sliders) > 0)
                @foreach ($Sliders as $key => $Slider)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ asset($Slider->image) }}" alt="First slide">
                        <div class="carousel-caption banner-div">
                            <h5 class="banner-heading">{{ $Slider->heading }}</h5>
                            <p class="banner-para">{{ $Slider->description }}</p>
                            @if ($Slider->link)
                                <a href="{{ $Slider->link }}" class="banner_pink_a">Learn More</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</section>

<!--**********************************
    Sidebar end
***********************************-->
