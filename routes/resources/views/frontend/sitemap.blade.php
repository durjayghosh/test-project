@extends('frontend.layouts.app')
@section('title', 'Sitemap')
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
    <section class="review-section" id="reviewSection">
        <div class="container">
            <div class="row" bis_skin_checked="1">
                <div class="col-md-12 review-header" bis_skin_checked="1">
                    <p></p>
                    <h2>SITE MAP OF WIG-O-MANIA WEBSITE</h2>
                    <div class="divider" bis_skin_checked="1"></div>
                </div>
                <div class="site-main-div">
                    <div class="first-div">
                        <h3 class="site-h3">Home</h3>
                        <ul class="sitemap-ul">
                            <li class="sitemap-li mt-3"><a href="{{ route('home') }}" class="site-a">Behind The Brand</a></li>
                            <li class="sitemap-li"><a href="{{ route('home', '#forte') }}" class="site-a">Our Forte</a></li>
                            <li class="sitemap-li"><a href="{{ route('home', '#studio') }}" class="site-a">Our Studios</a></li>
                            <li class="sitemap-li"><a href="{{ route('review') }}" class="site-a">Reviews</a></li>
                            <li class="sitemap-li"><a href="{{ route('partnership') }}" class="site-a">Partner Opportunity</a></li>
                            <li class="sitemap-li"><a href="{{ route('gallery') }}" class="site-a">Gallery</a></li>
                            <li class="sitemap-li"><a href="{{ route('csr') }}" class="site-a">CSR</a></li>
                            <li class="sitemap-li"><a href="{{ route('reachUs') }}" class="site-a">Reach Us</a></li>
                        </ul>
                    </div>
                    <div class="second-div">
                        <h3 class="site-h3">Fashion</h3>
                        <ul class="sitemap-ul">
                            <li class="sitemap-li mt-3"><a href="" class="site-a">Semi-Permanent Extension</a></li>
                            <li class="sitemap-li"><a href="" class="site-a">Clip & Go Extensions</a></li>
                            <li class="sitemap-li"><a href="" class="site-a">V Patch</a></li>
                            <li class="sitemap-li"><a href="" class="site-a">Wigs</a></li>

                        </ul>
                    </div>
                    <div class="third-div">
                        <h3 class="site-h3">Partner Opportunity</h3>
                        <ul class="sitemap-ul mt-3">
                            <li class="sitemap-li"><a href="" class="site-a">Why invest?</a></li>
                            <li class="sitemap-li"><a href="" class="site-a">Niche Concept</a></li>
                            <li class="sitemap-li"><a href="" class="site-a">Why Wig-O-Mania?</a></li>
                            <li class="sitemap-li"><a href="" class="site-a">Income Streams</a></li>
                            <li class="sitemap-li"><a href="" class="site-a">Do you have what it takes?</a></li>
                            <li class="sitemap-li"><a href="" class="site-a">Franchisee Financials</a></li>

                        </ul>
                    </div>
                    <div class="fourth-div">
                        <h3 class="site-h3">Advice</h3>
                        <ul class="sitemap-ul">
                            <li class="sitemap-li mt-3"><a href="" class="site-a">Expert Advice</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Advice</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Extensions</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Hair Systems</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Wigs</a></li>
                        </ul>
                    </div>
                </div>
                <div class="site-main-div">
                    <div class="third-div">
                        <h3 class="site-h3">Brochure</h3>
                        <ul class="sitemap-ul mt-3">
                            <li class="sitemap-li"><a href="#" class="site-a">Franchisee Brochure</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Product Brochure</a></li>

                        </ul>
                    </div>
                    <div class="second-div">
                        <h3 class="site-h3">Necessity Wearers</h3>
                        <ul class="sitemap-ul">
                            <li class="sitemap-li mt-3"><a href="" class="site-a">Wigs</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Closures For Scanty Hair</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Ladies Toupee for Alopecia</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Men’s Hair System</a></li>

                        </ul>
                    </div>
                    <div class="first-div">
                        <h3 class="site-h3">Behind the Brand</h3>
                        <ul class="sitemap-ul">
                            <li class="sitemap-li mt-3"><a href="#" class="site-a">Wig-O-Mania Profile</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Wig-O-Mania Family</a></li>

                        </ul>
                    </div>

                    <div class="fourth-div">
                        <h3 class="site-h3">CSR</h3>
                        <ul class="sitemap-ul">
                            <li class="sitemap-li mt-3"><a href="#" class="site-a">Blog</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Hair Academy</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Reach Us</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Hair Systems</a></li>
                            <li class="sitemap-li"><a href="#" class="site-a">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>


            </div>
            <div>
    </section>
@endsection
