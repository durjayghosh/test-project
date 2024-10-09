@php
    $Sliders = $Sliders ? $Sliders->first()->sectionList : [];
@endphp
<div id="myCarousel" class="carousel slide carousel-fade home-section home-slider customcarousel" data-bs-ride="carousel">
    <div class="carousel-indicators carousel-indicator">
        @if (count($Sliders) > 0)
            @foreach ($Sliders as $keys => $Slider)
            <?php
			//echo '<pre>';print_r($Slider);
                $cat_name_sl = DB::table('product_categories')->where('id',$Slider->heading)->first()->category_name;
				
            ?>
                <li type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $keys }}"
                    class=" {{ $keys == 0 ? 'active' : '' }}" aria-current="{{ $keys == 0 ? 'true' : '' }}" aria-label="Slide {{ $keys + 1 }}"> <span
                        class="banner-span">{{ $cat_name_sl }}</span><i></i></li>
            @endforeach
        @endif
    </div>
    <div class="carousel-inner home-carousel">
        @if (count($Sliders) > 0)
            @foreach ($Sliders as $key => $Slider)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="row">
                        <div class="col-md-7 slide-left text-end p-0">
                            <img src="{{ asset($Slider->image) }}"  alt="{{$Slider->title_image}}" tltle="hair loss solution" >
                        </div>
                        <div class="col-md-5 slide-right">
                            <div class="slide-right-inner">
                                <div class="text-start">
                                    <?php
                                        $cat_name = DB::table('product_categories')->where('id',$Slider->heading)->first()->category_name;
                                    ?>
                                    <h2>{{ $cat_name }}</h2>
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
            <img src="{{ asset('frontend/images/bannerTxt.png') }}" alt="main" title="toppers" class="mainTxt" >
        </div>
    </div>
</div>
<section class="mobile-banner ">
    <div id="carouselExampleIndicators" class="carousel slide customcarousel" data-ride="carousel">
        <ol class="carousel-indicators">
            @if (count($Sliders) > 0)
                @foreach ($Sliders as $keys => $Slider)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $keys }}" class="{{ $keys == 0 ? 'active' : '' }}"></li>
                @endforeach
            @endif
        </ol>
        <div class="carousel-inner">
            @if (count($Sliders) > 0)
                @foreach ($Sliders as $key => $Slider)

                 <?php
                                        $cat_name = DB::table('product_categories')->where('id',$Slider->heading)->first()->category_name;
                                    ?>
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        
						
						<picture class="d-block w-100"  style="height: auto !important;
  width: 90% !important;">
    <source srcset="{{ asset($Slider->image) }}" 
            media="(orientation: portrait)" class="d-block w-100"  style="height: auto !important;
  width: 100% !important;">
  <img class="d-block w-100" src="{{ asset($Slider->image) }}" alt="{{$Slider->title_image}}" title="wigomania uk hair brand" style="height: auto !important;
  width: 100% !important;">
	</source>
</picture>
                        <div class="carousel-caption banner-div">
                            <h5 class="banner-heading">{{ $cat_name }}</h5>
                            <p class="banner-para">{{ $Slider->description }}</p>
                           
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
<script>
$(document).ready(function(){
    $('.customcarousel').carousel({
		interval: 2000  // Time in milliseconds before transitioning to the next slide (e.g., 2000ms = 2 seconds)
	});
});
</script>