@extends('frontend.layouts.app')
@section('title', 'Partnership')
@section('content')
    <section class="row page-section opportunity-section">
        <div class="col-md-7 page-left p-0">
            <div class="opportunity-block">
                <h2>An Opportunity</h2>
                <div class="d-flex align-items-start opportunity-tab">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-invest-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-invest" type="button" role="tab" aria-controls="v-pills-invest"
                            aria-selected="true">Why invest?</button>
                        <button class="nav-link" id="v-pills-Niche-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-Niche" type="button" role="tab" aria-controls="v-pills-Niche"
                            aria-selected="false">Niche Concept</button>
                        <button class="nav-link" id="v-pills-Mania-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-Mania" type="button" role="tab" aria-controls="v-pills-Mania"
                            aria-selected="false">Why Wig-O-Mania?</button>
                        <button class="nav-link" id="v-pills-Income-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-Income" type="button" role="tab" aria-controls="v-pills-Income"
                            aria-selected="false">Income Streams</button>
                        <button class="nav-link" id="v-pills-takes-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-takes" type="button" role="tab" aria-controls="v-pills-takes"
                            aria-selected="false">Do you have what it takes?</button>
                        <button class="nav-link" id="v-pills-Franchisee-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-Franchisee" type="button" role="tab"
                            aria-controls="v-pills-Franchisee" aria-selected="false">Franchisee Financials</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-invest" role="tabpanel"
                            aria-labelledby="v-pills-invest-tab" tabindex="0">
                            <div class="wpb_wrapper">
                                <h3>Why invest?</h3>
                                <ul>
                                    <li>Beauty industry growth rate of more than 20%
                                    </li>
                                    <li>Growth of urban population and an increased
                                        number of middle-class sections of society
                                        turning to beauty care
                                    </li>
                                    <li>Social media is now accessible to the mass
                                        creating an awareness of the options available
                                    </li>
                                </ul>
                                <p>
                                    <a href="partner-opportunity.html">Know
                                        More</a>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Niche" role="tabpanel" aria-labelledby="v-pills-Niche-tab"
                            tabindex="0">
                            <div class="wpb_wrapper">
                                <h3>Niche Concept</h3>
                                <ul>
                                    <li>One of a kind brand in India from UK</li>
                                    <li>1<sup>st</sup>&nbsp;hair store concept in India</li>
                                    <li>Unique franchise opportunity</li>
                                </ul>
                                <p>
                                    <a href="partner-opportunity.html">Know
                                        More</a>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Mania" role="tabpanel" aria-labelledby="v-pills-Mania-tab"
                            tabindex="0">
                            <div class="wpb_wrapper">
                                <h3>Why Wig-O-Mania?</h3>
                                <ul>
                                    <li>1<sup>st</sup> UK &amp; Western brand to offer
                                        an entire array of products catering to a very
                                        wide segment of the market
                                    </li>
                                    <li>Exclusivity region wise</li>
                                    <li>Minimal completion in terms of quality and
                                        pricing
                                    </li>
                                    <li>No background requirements or preset experience
                                        needed
                                    </li>
                                </ul>
                                <p>
                                    <a href="https://wigomania.com/partner-opportunity#why-wig-o-mania">Know
                                        More</a>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Income" role="tabpanel" aria-labelledby="v-pills-Income-tab"
                            tabindex="0">
                            <div class="wpb_wrapper">
                                <h3>Income Streams</h3>
                                <ul>
                                    <li>Retail Sales</li>
                                    <li>Corporate Sales</li>
                                    <li>Client Location Service</li>
                                    <li>Online Sales</li>
                                </ul>
                                <p>
                                    <a href="partner-opportunity.html">Know
                                        More</a>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-takes" role="tabpanel" aria-labelledby="v-pills-takes-tab"
                            tabindex="0">
                            <div class="wpb_wrapper">
                                <h3>Do you have what it takes?</h3>
                                <ul>
                                    <li>Do you see yourself as an entrepreneur?</li>
                                    <li>Are you a people’s person?</li>
                                    <li>Are you passionate to work a unique brand?</li>
                                    <li>Willing to learn and adapt</li>
                                </ul>
                                <p>
                                    <a href="partner-opportunity.html">Know
                                        More</a>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Franchisee" role="tabpanel"
                            aria-labelledby="v-pills-Franchisee-tab" tabindex="0">
                            <div class="wpb_wrapper">
                                <h3>Franchisee Financials</h3>
                                <p class="text-dark">We would love to hear from you. Follow the link to
                                    complete the form and we will contact you.</p>
                                <p>
                                    <a href="partner-opportunity.html">Know
                                        More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('frontend/images/oppertunity-bg.webp') }}" width="100%" class="opp_img">
        </div>
    </section>
@endsection
