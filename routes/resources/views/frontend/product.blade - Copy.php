@extends('frontend.layouts.app')
@section('title', ucwords(str_replace('-', ' ', $Products->slug)))
@section('content')
<style>
    .activeImage {
        border: 1px solid #ee4695;
    }
</style>
<section class="gallery-section_1" id="second">
    <div class="container">
        <div class="row gallery_category ">
            <div class="col-lg-4">
                @if($Products->sub_image)
                <img src="{{ asset($Products->sub_image) }}" class="gallery_img">
                @endif
            </div>
            <div class="col-lg-8 gallery-col">
                <h3 class="gallery_heading_w mb-4 text-light ">{{ $Products->product_sub_title }}</h3>
                {!! $Products->product_sub_description !!}
                {{-- <p class="gallery_para text-light">
                    Ladies suffering from scanty hair, balding patches due to Alopecia and other medical and non-medical
                    reasons need a Closure. These are small Hair Patches that sit neatly on top of the head attached
                    with clips specially designed for ladies who suffer from Hair Loss on the top scalp above the
                    forehead. These come in various specs and sizes of base, and lengths of hair. It is easy to fit and
                    use with basic knowledge. It’s after care is minimal with a long life span too as its made in
                    Natural Hair.
                </p> --}}
            </div>
        </div>
    </div>
</section>
<section class="review-section fort ">
    <div class="row">
        <div class="col-lg-1">
            @if(count($Products->galleries) > 0)
            @foreach ($Products->galleries as $key => $gallery)
            <img src="{{ asset($gallery->gallery) }}"
                class="{{ $key == 0 ? 'forte-category_img_n ' : 'forte-category_img' }} imageSlider"
                data-id="{{ $gallery->id }}">
            @endforeach
            @endif
        </div>
        <div class="col-lg-5">
            <img src="{{ asset(isset($Products->galleries[0]->gallery) ? $Products->galleries[0]->gallery : '') }}"
                class="forte-category_img_1">
        </div>
        <div class="col-lg-6 left-div">
            <p class="forte-category">UNIQUELY CUSTOMIZED</p>
            <h2 class="forte-category-1">{{ $Products->product_title }}</h2>
            {!! $Products->description !!}
            {{-- <p class="forte-category-2">Our exclusively designed Closures are made in various types of base
                material and
                size. Hair length too can be from 6” to 16”. The base size varies from 2*5” , 4*4” and 5*5” and hence
                suitable for any area required
            </p>
            <p class="forte-category-2">This is a specially designed 3-parting lace front closure that offers an instant
                solution for ladies who have thinning hair or bald patches on the parting area of the head. It can be
                used for ladies who want the option of parting their hair from the middle or sides. Its lace front gives
                a very natural hair line as if hair is growing from the front.
            </p>
            <p class="forte-category-2">It can be used during the interim period of hair treatments too without causing
                any damage to their hair growth or effecting their treatment.
            </p> --}}
            {{-- <a href="" class="wigo_btn">TAKE YOUR HAIR ASSESSMENT</a> --}}
        </div>
    </div>
</section>

@if(count($Reviews) > 0)
<section class="review-section" id="reviewSection">
    <div class="container">
        <div class="row" bis_skin_checked="1">
            <div class="col-md-12 " bis_skin_checked="1">
                <p>Customer Reviews</p>
                <h2>What The People Think About Us</h2>
                <div class="divider" bis_skin_checked="1"></div>
            </div>
            <div class="col-lg-12">
                @foreach($Reviews as $review)
                <div class="review-div mt-3">

                    <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                        @if($review->rating > 0)
                        @for($i = 1; $i < $review->rating; $i++)
                            <i class="fa fa-star" aria-hidden="true"></i>
                            @endfor
                            @endif
                    </p>
                    <p class="review-name-1">{{ ucwords(trim($review->name)) }}</p>
                    <p class="review-text-1">{!!$review->description !!}</p>
                    <p class="review-date-1">{{ date_format($review->created_at, 'M d, Y' )}}</p>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
@endif

<script>
    $(document).ready(function () {
        $('.imageSlider').click(function () {
            $('.imageSlider').removeClass('activeImage');
            var id = $(this).attr('src');
            $(this).addClass('activeImage');
            $('.forte-category_img_1').attr('src', id);
        });
    })
</script>
@endsection