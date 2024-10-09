@extends('frontend.layouts.app')
@section('title', ucwords(str_replace('-', ' ', $Products->slug)))
@section('content')

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" data-pagespeed-no-defer>
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" data-pagespeed-no-defer>
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" data-pagespeed-no-defer>
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js" data-pagespeed-no-defer></script>
<script src="https://kit.fontawesome.com/adbce29e29.js" crossorigin="anonymous" data-pagespeed-no-defer></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="{{ asset('frontend/js/jquery.min.js') }}" data-pagespeed-no-defer></script>
<style>
.activeImage {
    border: 1px solid #ee4695;
}
</style>
<section class="new-gallery-section-1 test" id="second">
    <div class="row gallery_category ">
        <div class="col-lg-4">
            
			<picture>
    <source srcset="{{ asset($Products->sub_image) }}"
            media="(orientation: portrait)">
    <img src="{{ asset($Products->sub_image) }}" alt="" srcset="{{asset($Products->sub_image)}} 480w, {{asset($Products->sub_image)}} 1080w" sizes="50vw">
</picture>
        </div>
        <div class="col-lg-8 gallery-col">
            <h1 class="gallery_heading_w mb-4 text-light ">{{$Products->title}}</h1>
            <div class="gallery_para2 text-light">{!! $Products->description !!}</div>

        </div>
    </div>
</section>

<section class="review-section fort new-class-product">
    <div class="row">

        <div class="col-lg-1 scroll-div">
            @if($Products)
            @foreach ($Products->products as $key => $product)
            
				
				 <img src="{{ asset(isset($product->images->gallery) ? $product->images->gallery : 'image/no-image.jpg') }}"
                alt="{{$product->images->image_title}}" title="closure "
                class="{{ $key == 0 ? 'forte-category_img_n ' : 'forte-category_img' }} imageSlider"
                data-id="{{ $product->id }}" data-detail="{{ json_encode($product->toArray()) }}">
            @endforeach
            @endif
        </div>
        
        <div class="col-lg-5 crausal_div">
            
        </div>
        <div class="col-lg-6 left-div descriptionDiv">
            
        </div>
    </div>
</section>

@if (count($Reviews) > 0)
<section class="review-section" id="reviewSection">
    <div class="container">
        <div class="row" bis_skin_checked="1">
            <div class="col-md-12 " bis_skin_checked="1">
                <p>Customer Reviews</p>
                <h3>What The People Think About Us</h3>
                <div class="divider" bis_skin_checked="1"></div>
            </div>
            <div class="col-lg-12">
                @foreach ($Reviews as $review)
                <div class="review-div mt-3">

                    <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                        @if ($review->rating > 0)
                        @for ($i = 1; $i < $review->rating; $i++)
                            <i class="fa fa-star" aria-hidden="true"></i>
                            @endfor
                            @endif
                    </p>
                    <p class="review-name-1">{{ ucwords(trim($review->name)) }}</p>
                    <p class="review-text-1">{{ $review->description }}</p>
                    <p class="review-date-1">{{ Carbon\Carbon::parse($review->review_date)->format("M d, Y") }}</p>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
@endif

<script>
$(document).ready(function() {

    $('.imageSlider').click(function() {
        $('.imageSlider').removeClass('activeImage');
        var id = $(this).attr('src');
        var details = $(this).attr('data-detail');
        details = JSON.parse(details)
        htmlReplace(details)
        $(this).addClass('activeImage');
        $('.forte-category_img_1').attr('src', id);
    });
})
url = "{!! env('APP_URL') !!}";


function htmlReplace(details) {
    var html = crausals_html = div_img = does_work = '';

    $.each(details.howdoesitswork, function(index, value) {
        does_work +=
            `<object
  style="width: 215px; height: 215px; float: none; clear: both; margin: 2px auto;"
  data="${value.youtube}">
</object>`;
    });



    html = `
            <h2 class="forte-category-1">${details.product_name}</h2>
                <div id="myWizard">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#step1" class="info-btn info-active"" data-toggle="tab" >INFO</a></li>
                                ${details.howdoesitswork.length > 0 ? '<li><a href="#step2" class="info-btn" data-toggle="tab">HOW DOES IT WORK </a></li>' : ''}

                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active forte-category-2 mt-2" id="step1">
                            ${details.description}
                        </div>
                        <div class="tab-pane" id="step2">
                            <div class="second-tab mt-2">
                               ${does_work}
                            </div>
                        </div>
                    </div>
                </div>
                `;

    $('.descriptionDiv').html(html);
    $.each(details.galleries, function(index, value) {

         div_img += `<div class="carousel-item ${index == 0? 'active' : ''}">
                        <img class="d-block w-100" src="${ value.gallery ? (url+ value.gallery) : url+ 'image/no-image.jpg'}" alt="${value.image_title}">
                    </div>`;
    });

    crausals_html = `<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner">
                        ${div_img}
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>`;
    $('.crausal_div').html(crausals_html)

    $('.carousel').carousel();

    $(function() {
        $('.popup-youtube, .popup-vimeo').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });
}
</script>

<script>
$('.next').click(function() {
    var nextId = $(this).parents('.tab-pane').next().attr("id");
    $('[href=#' + nextId + ']').tab('show');
})
$('.first').click(function() {
    $('#myWizard a:first').tab('show')
})
</script>

<script>
$(function() {
    $('.popup-youtube, .popup-vimeo').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});
$(document).on("click", ".info-btn", function() {
    $('.info-btn').removeClass("info-active");
    $(this).addClass("info-active");
});
$(document).on("click", ".info-btn", function() {
    $('.info-btn').removeClass("info-btn:after");
    $(this).addClass("info-btn:after");
});


$(document).ready(function() {

    $('.forte-category_img_n').trigger('click');
    $(".forte-category_img_n").click();
});
</script>

@endsection