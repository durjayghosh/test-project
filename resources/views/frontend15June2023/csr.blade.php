@extends('frontend.layouts.app')
@section('title', 'CSR')
@section('content')
@php
$Banner = $PageSections
->where('section', 'banner')
->first()
->sectionList->first();

$Section1 = $PageSections
->where('section', 'section_1')
->first()
->sectionList->first();
@endphp

    <section class="review-banner"  style="background-image: url({{ asset(@$Banner->image) }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" >
                    <h2 class="review-banner-heading">{{ @$Banner->heading }}</h2>
                    <!--<div class="review-banner-para"> {!! @$Banner->description !!}</div>-->
                </div>
            </div>
        </div>
    </section>

    <section class="csr-section">
        <div class="container">
            <div class="row csr-heading">
                <div class="col-md-7 p-0">
                    <div class="csr-wrapper">
                        {!! @$Section1->description !!}
                    </div>
                </div>
                <div class="col-md-5 p-0">
                    <div class="title-wrapper">
                        <h1>{{  @$Section1->heading   }}</h1>
                    </div>
                </div>
            </div> 

            <div class="row">
                <div class="col-md-7 p-0 csr-left">
                    @if(count(@$Csrs) > 0)
                        @foreach (@$Csrs as $csr)
                            <div class="csr-block">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>{{ @$csr->full_name }}</h4>
                                        <h5>{{ @$csr->designation }}</h5>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        <img loading="lazy" class="comp alignnone wp-image-699 size-full lazyloaded"
                                            src="{{ asset(@$csr->logo) }}" alt="csr" title="blogs" data-ll-status="loaded">
                                    </div>
                                    <div class="col-md-3">
                                        <img loading="lazy" class="alignnone size-full wp-image-396 lazyloaded"
                                            src="{{ asset(@$csr->image) }}" alt="{{@$csr->image_title}}" title="csr"
                                            width="135" height="134" sizes="(max-width: 135px) 100vw, 135px">
                                    </div>
                                    <div class="col-md-9">
                                        {!! @$csr->about !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif



                </div>
                <div class="col-md-5 p-0 csr-right ">

                    <div class="row">
                        <p class="text-right"> <img loading="lazy" class="s"
                                src="{{ asset(@$MessageFromCeo->image) }}" alt="{{$MessageFromCeo->image_title}}"  tytle="mess'from CEO" data-ll-status="loaded"></p>

                        <h3>Message from CEO</h3>
                       {!! @$MessageFromCeo->message !!}
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
