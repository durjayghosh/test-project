@extends('frontend.layouts.app')
@section('title', 'Gallery')
@section('content')
@php
$PageSections = $PageSections
->where('section', 'banner')
->first()
->sectionList->first();
@endphp
<section class="review-banner"  style="background-image: url({{ asset(@$PageSections->image) }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2 class="review-banner-heading">{{ @$PageSections->heading }}</h2>
                <div class="review-banner-para"> {!! @$PageSections->description !!}</div>
            </div>
        </div>
    </div>
</section>

    <section class="gallery-sec" style="margin-bottom:60px">
        <div class="container">
            <div class="row">
                <div class="gallery_btn text-center">
                    @foreach($GalleryCategory as $key => $categoryId)
                        <a href="#{{ $categoryId->id }}" class="gallery_a">{{ $categoryId->category }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @foreach($GalleryCategory as $key => $categoryId)
        <section class="{{ $key % 2 != 0 ? 'gallery-section_1' : 'gallery-section' }}" id="{{ $categoryId->id }}" >
            <div class="container main-container">
                <div class="row gallery_category ">
                    @if(isset($categoryId->gallery->heading))
                        <h2 class="{{ $key % 2 != 0 ? 'gallery_heading_w mb-4  text-center' : 'gallery_heading  mb-4 text-center' }} text-center mb-4 mt-3 gallery_mainheading">{{ $categoryId->gallery->heading }}</h2>
                    @endif
                    @if($categoryId->gallery->sub_heading)
                    <h3 class="{{ $key % 2 != 0 ? 'gallery_heading_dynamic' : 'gallery_heading' }}   mb-4 text-center" id="first">{{ $categoryId->gallery->sub_heading }}</h3>
                    @endif
                    <!--<hr class="new-hr">-->
                    <div class="col-lg-6 mt-3">
                        <img src="{{ asset($categoryId->gallery->image) }}" class="gallery_img">
                        <div class="{{ $key % 2 != 0 ? 'gallery_para1' : 'gallery_para' }}  text-light mt-5">{!! $categoryId->gallery->description !!}</div>
                        {{--  <p class="gallery_para"></p>  --}}
                    </div>
                    <div class="col-lg-6 gallery-col new-gal-col mt-3">
                        <iframe width="100%" height="305" src="{{ $categoryId->gallery->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="{{ $key % 2 != 0 ? 'gallery_para1' : 'gallery_para' }} text-light mt-5">{!! $categoryId->gallery->youtube_description !!}</div>


                    </div>
                </div>
            </div>
        </section>
    @endforeach


    {{--  <section class="gallery-section_1" id="second">
        <div class="container">
            <div class="row gallery_category ">
                <h3 class="gallery_heading_w mb-4  text-center">Instant solution - scanty hair - Closures -
                    Alopecia sufferers</h3>

                <div class="col-lg-6">
                    <img src="{{ asset('frontend/images/g2.jpg') }}" class="gallery_img">
                </div>
                <div class="col-lg-6 gallery-col">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/3RJ6HGivjqM"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="gallery_para">Wig-O-Mania offers an Instant solution to age old hair loss problems
                        due to alopecia. No more long drawn expensive treatments that seldom work or painful injections –
                        our exclusively designed hair pieces offer a natural blend to own hair. These are easy to wear and
                        maintain.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section" id="third">
        <div class="container">
            <div class="row gallery_category ">
                <h3 class="gallery_heading  mb-4 text-center">Instant solution – Wigs for baldness – Chemo – acute alopecia
                </h3>
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/images/g3.jpg') }}" class="gallery_img">
                </div>
                <div class="col-lg-6 gallery-col">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/AgTeaTkI518"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="gallery_para">Wig-O-Mania offers an Instant solution to age old hair loss problems due to
                        alopecia. No more long drawn expensive treatments that seldom work or painful injections – our
                        exclusively designed hair pieces offer a natural blend to own hair. These are easy to wear and
                        maintain.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section_1" id="fourth">
        <div class="container">
            <div class="row gallery_category ">
                <h3 class="gallery_heading_w mb-4 text-center">Instant solution – Men’s hair systems</h3>
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/images/g4.jpg') }}" class="gallery_img">
                </div>
                <div class="col-lg-6 gallery-col">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/Xdco_D5HTGc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="gallery_para ">Integrated hair systems by Wig-O-Mania are made from the finest
                        quality of 100% natural human hair hand knotted to perfection offering the most natural look
                        tailor-made for every client. They are a perfect solution to bald patches around the crown area,
                        receding hair line or semi-bald areas on the top of the head. Our products are designed keeping in
                        mind the hot and humid conditions it is generally used – and clients are given two options of either
                        having a system that can be removed daily or glued for a period of 3-4 weeks.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section" id="five">
        <div class="container">
            <div class="row gallery_category ">
                <h3 class="gallery_heading mb-4 text-center">Luscious locks extensions range
                </h3>
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/images/g5.jpg') }}" class="gallery_img">
                </div>
                <div class="col-lg-6 gallery-col">
                    <iframe width="100%" height="305" src="https://www.youtube.com/embed/s9ZK3wW1VJQ"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="gallery_para">Wig-O-Mania hair pieces are specially designed to hide the various effects that hair loss causes. Hair loss is a common problem due to various medical and non-medical reasons resulting in scanty hair, bald patches, receding hair lines & thinning hair around the crown. Opt for a hair piece that fits squarely on the areas needed that blends naturally with your own hair. It is easy to wear, easy to maintain, and long-lasting.

                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section_1" id="six">
        <div class="container">
            <div class="row gallery_category ">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/images/g6.jpg') }}" class="gallery_img">
                </div>
                <div class="col-lg-6 gallery-col">
                    <img src="{{ asset('frontend/images/video_1.png') }}" class="gallery_img1">
                </div>
                <div class="col-lg-6">
                    <p class="gallery_para  mt-5"><b class="text-dark">Skin Weft Extensions</b> They are
                        Wig-O-Mania’s latest addition to its extensive range of Extensions in Remy 100% Human Hair. Skin
                        Weft Extensions are undetectable and most comfortable form of hair extension to date. These
                        extensions are semi-permanent and very easy and fast to apply and hence gaining popularity. They lie
                        flat to the head and feel just like your own natural hair giving the illusion of growing from the
                        scalp.
                    </p>
                </div>
                <div class="col-lg-6 ">
                    <p class="gallery_para  mt-5"><b class="text-dark">Clip-On Extensions</b> are available in most colors. These are temporary wear extensions that can be removed as and when not required. It does not need professional expertise to use/wear them. The quality of the Hair and the clips along with the convenience and easy application method makes it easy for daily use.

                    </p>
                </div>
            </div>
        </div>
    </section>  --}}
@endsection
