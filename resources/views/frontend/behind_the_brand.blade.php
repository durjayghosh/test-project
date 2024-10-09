@extends('frontend.layouts.app')
@section('title', 'Behind The Brand')
@section('content')
@php

$PageSections = $PageSections
->where('section', 'section_1')
->first()
->sectionList->first();
@endphp

    <section class="row page-section about-section ab-sec" id="aboutSection">
        <div class="col-md-7 page-left" style="background-image: url('{{ asset($PageSections->image) }}');">
            <div class="page-image">
                <img src="{{ asset($PageSections->image) }}" alt="{{$PageSections->image_title}}"  title="hair loss solution" class="bgImg">
            </div>
            <div class="page-content">
                <h1>{{ $PageSections->heading }}</h1>
                {!! $PageSections->description !!}
            </div>
        </div>
        <div class="col-md-5 page-right">
            <div class="page-right-content">
                <div class="panelLinks">
                    <a href="{{ route('behindTheBrandFamily') }}">
                        <img src="{{asset('image/family.png')}}" alt="main" title="hair loss solution" class="lazyloaded"
                            data-ll-status="loaded">
                        <img src="{{asset('image/family.png')}}" alt="main" title="hair loss solution">
                        <strong>WIG-O-MANIA </strong>Family</a>
                    <a href="{{ route('csr') }}"><img src="{{asset('image/csr.png')}}" alt="main" title="hair loss solution" class="lazyloaded"
                            data-ll-status="loaded">
                        <img src="{{asset('image/csr.png')}}" alt="main" title="hair loss solution">
                        <strong>CSR</strong>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
