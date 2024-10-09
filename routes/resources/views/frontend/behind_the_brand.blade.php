@extends('frontend.layouts.app')
@section('title', 'Behind The Brand')
@section('content')
@php

$PageSections = $PageSections
->where('section', 'section_1')
->first()
->sectionList->first();
@endphp
    <section class="row page-section about-section  ab-sec" id="aboutSection">
        <div class="col-md-7 page-left">
            <div class="page-image">
                <img src="{{ asset($PageSections->image) }}" alt="main" class="bgImg">
            </div>
            <div class="page-content">
                <h2>{{ $PageSections->heading }}</h2>
                {!! $PageSections->description !!}
            </div>
        </div>
        <div class="col-md-5 page-right">
            <div class="page-right-content">
                <div class="panelLinks">
                    <a href="{{ route('behindTheBrandFamily') }}">
                        <img src="https://wigomania.com/images/family.png" alt="main" class="lazyloaded"
                            data-ll-status="loaded">
                        <img src="https://wigomania.com/images/family.png" alt="main">
                        <strong>WIG-O-MANIA </strong>Family</a>
                    <a href="{{ route('csr') }}"><img src="https://wigomania.com/images/csr.png" alt="main" class="lazyloaded"
                            data-ll-status="loaded">
                        <img src="https://wigomania.com/images/csr.png" alt="main">
                        <strong>CSR</strong>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
