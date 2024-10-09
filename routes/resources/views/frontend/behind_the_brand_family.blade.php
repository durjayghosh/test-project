@extends('frontend.layouts.app')
@section('title', 'Behind The Brand Family')
@section('content')
@php
    $PageSections = $PageSections ? $PageSections : [];
    $Banner = $PageSections
        ->where('section', 'banner')
        ->first()
        ->sectionList->first();
    $Section1 = $PageSections
        ->where('section', 'section_1')
        ->first()
        ->sectionList->first();
    $Section2 = $PageSections
        ->where('section', 'section_2')
        ->first()
        ->sectionList->first();

        $str = $Section1->heading;
        $last_word_start = strrpos ( $str , " ") + 1;
        $last_word_end = strlen($str) - 1;
        $last_word = substr($str, $last_word_start, $last_word_end);
        $start_word = substr($str, 0, $last_word_start);


@endphp

    <section class="review-banner"  style="background-image: url({{ asset(@$Banner->image) }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" >
                    <h2 class="review-banner-heading">{{ $Banner->heading }}</h2>
                    <div class="review-banner-para"> {!! @$Banner->description !!}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="review-section1" style="background-image:url('frontend/images/family-bg.jpg');background-size:cover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p></p>
                    <h2 class="main-title">{{ $start_word }} <br> {{ $last_word }}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="para-heading">{{ $Section1->sub_heading }}</h2>
                    <p class="family-para">{!! $Section1->description !!}
                    </p>

                </div>
                <div class="col-lg-6 image-col">
                    <p class="text-center"> <img src="{{ asset($Section1->image) }}" class="family-img"></a>
                </div>
                <div class="col-lg-3">
                    <p class="family-para">{!! $Section1->other_description !!}
                    </p>
                </div>
            </div>
            <div>
    </section>
    <section class="behind-section" id="family">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="behind-heading">{{ $Section2->heading }}</h2>
                    <div class="behind-para"> {!! $Section2->description !!} </div>

                </div>
                <div class="col-lg-5 mt-5 animated_col">
                    <div class="behind_div">
                        <h2 id="demo_heading1" class="full_name">{{ @$OurTeams[0]->full_name }}</h2>
                        <h4 id="demo_designation1" class="designation">{{ @$OurTeams[0]->designation }}</h4>
                        {{--  <p id="demo_para1" class="about"> </p>  --}}
                        <div class="about_del">{!! @$OurTeams[0]->about !!}</div>
                    </div>
                </div>
                <div class="col-lg-7 mt-5 animated_col">
                    <div class="row">
                        @if(count($OurTeams) > 0)
                            @foreach($OurTeams as $key => $value)
                                @if($key == 0)<div class="col-lg-12">@endif
                                @if($key == 3 )<div class="col-lg-12 mt-2">@endif
                                    <img src="{{ asset($value->image) }}" class="animation_img ourteam" data-name="{{ $value->full_name }}" data-designation="{{ $value->designation }}" data-about="{!! $value->about !!}">
                                @if($key == 2 || $key == 5)</div>@endif
                            @endforeach
                        @endif


                            {{--  <img src="{{ asset('frontend/images/mem_4.jpg') }}" class="animation_img" onclick="change4()">
                            <img src="{{ asset('frontend/images/mem_6.jpg') }}" class="animation_img" onclick="change5()">
                            <img src="{{ asset('frontend/images/mem_2.jpg') }}" class="animation_img" onclick="change6()">  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $('.ourteam').click(function(){
                $('.about').hide();
                $('.full_name').text($(this).attr('data-name'));
                $('.designation').text($(this).attr('data-designation'));
                $('.about_del').html($(this).attr('data-about'));
            });
        });
    </script>
@endsection
