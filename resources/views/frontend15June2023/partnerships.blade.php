@extends('frontend.layouts.app')
@section('title', 'Partnership')
@section('content')
@php
$PageSections = $PageSections
->where('section', 'banner')
->first()
->sectionList->first();
$franchiseFinancialsRoute = route('franchiseFinancials');
@endphp
<style>
    .partner-div{
        display: block;
    }
    .error_class{
        display: none;
        color: red;
        font-size: 14px;
        margin-left: 15px;
    }
</style>
    <section class="review-banner"  style="background-image: url({{ asset(@$PageSections->image) }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1 class="review-banner-heading">{{ @$PageSections->heading }}</h1>
                    <div class="review-banner-para"> {!! @$PageSections->description !!}</div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-lg-5 partner-col">
                <ul class="nav nav-pills flex-column par-ul" id="myTab" role="tablist">
                    @if(count($PartnerOpportunity) > 0)
                    @foreach($PartnerOpportunity as $key => $oppertunity)
                        <li class="nav-item par-li">
                            <a class="{{ $key == 0 ? 'nav-link active par-a  active show' :'nav-link par-a'  }}" id="contact-tab" data-toggle="tab" href="#{{ $oppertunity->slug }}" role="tab" aria-controls="home" aria-selected="{{ $key == 0 ? 'true' :'false'  }}">{{ $oppertunity->opportunity }}</a>
                        </li>
                    @endforeach
                    @endif
                    <li class="nav-item par-li">
                        <a class="nav-link par-a" href="{{ route('home', '#studio') }}" aria-controls="home" aria-selected="false">{{ 'WIG-O-MANIA Showrooms' }}</a>
                    </li>
                    <li class="nav-item par-li">
                        <a class="nav-link par-a" href="{{ route('brochure') }}" aria-controls="home" aria-selected="false">{{ strtoupper('Download Franchisee Brochure') }}</a>
                    </li>

                    {{--  <li class="nav-item par-li">
                        <a class="nav-link par-a" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">A Niche Concept</a>
                    </li>
                    <li class="nav-item par-li">
                        <a class="nav-link par-a" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Why Wig-O-Mania?</a>
                    </li>
                    <li class="nav-item par-li">
                        <a class="nav-link par-a" id="contact-tab" data-toggle="tab" href="#stream" role="tab"
                            aria-controls="stream" aria-selected="false">Income Stream Flow</a>
                    </li>
                    <li class="nav-item par-li">
                        <a class="nav-link par-a" id="contact-tab" data-toggle="tab" href="#takes" role="tab"
                            aria-controls="takes" aria-selected="false">Do you have what it takes?</a>
                    </li>
                    <li class="nav-item par-li">
                        <a class="nav-link par-a" id="contact-tab" data-toggle="tab" href="#financial" role="tab" aria-controls="financial" aria-selected="false">Franchise Financials</a>
                    </li>
                    <li class="nav-item par-li">
                        <a class="nav-link par-a" id="contact-tab" data-toggle="tab" href="#sf" role="tab"
                            aria-controls="sf" aria-selected="false">Wig-O-Mania Sub-Franchise (SF)</a>
                    </li>
                    <li class="nav-item par-li">
                        <a class="nav-link par-a" id="contact-tab" data-toggle="tab" href="#sff" role="tab"
                            aria-controls="sff" aria-selected="false">Obligations for the Sub-Franchisee (SF)</a>
                    </li>
                    <li class="nav-item par-li">
                        <a class="nav-link par-a" id="contact-tab" data-toggle="tab" href="#sfff" role="tab"
                            aria-controls="sfff" aria-selected="false">Do you have what it takes (SF)</a>
                    </li>
                    <li class="nav-item par-li">
                        <a class="nav-link par-a" href="https://dev.codesmile.in/wigomania/v1/#studio">WIG-O-MANIA
                            Showrooms</a>
                    </li>
                    <li class="nav-item par-li">
                        <a class="nav-link par-a btn-par" href="images/Franchisee-Brochure.pdf" target="_blank">DOWNLOAD FRANCHISEE BROCHURE</a>
                    </li>  --}}
                </ul>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-lg-7 par-co">
                <div class="tab-content" id="myTabContent">
                    @if(count($PartnerOpportunity) > 0)
                    @foreach($PartnerOpportunity as $key => $oppertunity)
                        <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="{{ $oppertunity->slug }}" role="tabpanel" aria-labelledby="{{ $oppertunity->slug }}-tab">
                            <h2 class="partner-h">{{ $oppertunity->oppertunity }}</h2>
                        {!! $oppertunity->about !!}
                        </div>
                    @endforeach
                    @endif

                    {{--  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h2 class="partner-h">A Niche Concept
                        </h2>
                        <p class="partner-p"><strong>WIG-O-MANIA</strong> is a hair brand that is capable of catering to a
                            very wide segment of the Indian market – from high end individuals to the middle an average
                            income. It wants to become a household name for a One-Stop shop for all hair pieces needs for
                            both ladies and gents.</p>
                        <p class="partner-p">The only challenge is to create an awareness in the market. With the right
                            partner this can be achieved – the proposal is to market a product that has a clear monopoly in
                            terms of range, styles, and above all quality.</p>
                        <p class="partner-p">The potential in terms of numbers along with the continuous growth of urban
                            population and mass media at our disposal can generate a multi million dollar corporate.</p>
                        <p class="partner-p">Our franchisee store offers a unique concept, which will give the opportunity
                            to an individual to start and run its own successful business. Our stores offer exemplary
                            service to its clients – both fashion and necessity wearers. Both, franchisee partners and
                            staffs are trained and supported at every step of the way with ongoing updates of new products
                            and it’s applications.</p>
                    </div>  --}}
                    {{--  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <h2 class="partner-h">Why Wig-O-Mania?</h2>
                        <ul class="ul-p">
                            <li class="li-p">1st UK & Western brand of a kind to bring an entire array of products
                                catering to a very wide segment of the market</li>
                            <li class="li-p">Unique franchising opportunity being introduced for the 1st time in India
                                for a limited period only – No upfront fees to buy the franchisee & no royalty on sales</li>
                            <li class="li-p">Exclusive store in the assigned region</li>
                            <li class="li-p">No set background requirements to run our store and become a successful
                                franchisee. Management experience is a definite plus
                            </li>
                            <li class="li-p">Franchiser support includes from site selection, lease negotiations to
                                design & construction support along with selection of staff, comprehensive training programs
                                for management, technical and marketing staff at various levels
                            </li>
                            <li class="li-p">1st preference to all new products introduced</li>
                            <li class="li-p">Financial assistance subject to T & C and approvals from Financial
                                Institutions can be offered</li>
                        </ul>
                    </div>  --}}
                    {{--  <div class="tab-pane fade" id="stream" role="tabpanel" aria-labelledby="contact-tab">
                        <h2 class="partner-h">Income Stream Flow</h2>
                        <table class="par-table">
                            <tr class="par-tr">
                                <th class="par-th1">RETAIL SALES</th>
                                <th class="par-th">CORPORATE SALES</th>
                                <th class="par-th1">IN HOUSE SERVICE</th>
                                <th class="par-th">ONLINE SALES</th>
                            </tr>
                            <tr class="par-tr">
                                <td class="par-td1">Exclusive store in assigned area</td>
                                <td class="par-td">Catering to corporates / salons within assigned region</td>
                                <td class="par-td1">Catering to retail and corporate sales service</td>
                                <td class="par-td">Option to build own exclusive website to promote online</td>
                            </tr>
                            <tr class="par-tr">
                                <td class="par-td1">Offer a complete range of products servicing Fashion and Necessity
                                    wearers</td>
                                <td class="par-td">Assign an exclusive Sales & Marketing team to market products</td>
                                <td class="par-td1">In-store demo and trainings for corporates</td>
                                <td class="par-td">Promote website to generate traffic and online sales</td>
                            </tr>
                            <tr class="par-tr">
                                <td class="par-td1">On site professional support – hair stylist at all times</td>
                                <td class="par-td">Participate in Shows / Exhibitions and Promotion activities</td>
                                <td class="par-td1">Servicing retail clients thereby generating extra income</td>
                                <td class="par-td">Promote on web portals</td>
                            </tr>
                            <tr class="par-tr">
                                <td class="par-td1">Retail store 7 days – 10 hours a day</td>
                                <td class="par-td">Arrange for delivery service of products and trainings on site</td>
                                <td class="par-td1">Home service on offer</td>
                                <td class="par-td">Offer COD services</td>
                            </tr>
                        </table>
                    </div>  --}}
                    {{--  <div class="tab-pane fade" id="takes" role="tabpanel" aria-labelledby="contact-tab">
                        <h2 class="partner-h">Do you have what it takes?</h2>
                        <ul class="ul-p">
                            <li class="li-p">Can you see yourself as an owner of a business that offers not only a range
                                of exclusive products for fashion but also caters to people who are in desperate need of the
                                products being offered?
                            </li>
                            <li class="li-p">Do you have the passion to work on an exclusive brand and range of products
                                that have an almost monopoly in the region as of date?
                            </li>
                            <li class="li-p">Are you a people’s person that has basic entrepreneurial skills, knowledge
                                of the local and cultural climate with a personal network and contacts?
                            </li>
                            <li class="li-p">Do you want the freedom to push your vision across a wide range of people
                                covering a very wide segment of the population who need the products – as a fashion
                                accessory and necessity wear?
                            </li>
                            <li class="li-p">Willing to learn and adapt?
                            </li>
                        </ul>
                        <p><strong>THEN…..</strong></p>
                        <p class="partner-p">Join the Wig-O-Mania family and own a unique, one-of-a-kind retail outlet,
                            under a strong brand umbrella, offering range of products with almost nil competition, and at a
                            low cost of entry than most franchisees. We school you not only our business and range of
                            products, but also our commitment to serve.
                        </p>
                        <p class="partner-p">Wig-O-Mania is not only looking for investment partners, rather places great
                            importance on building partnerships strengthened by the acumen of both the brand owners and
                            franchisee.
                        </p>
                        <p class="partner-p">If you’re ready to take the next steps, we’d love to discuss the opportunity
                            with you and make a mutual decision about whether a Wig-O-Mania franchise is the perfect fit for
                            you.
                        </p>
                        <p class="partner-p">Remember, we are also looking for franchisees who are a perfect fit to help us
                            reach our goals.
                        </p>
                    </div>  --}}
                    {{--  <div class="tab-pane fade" id="financial" role="tabpanel" aria-labelledby="contact-tab">
                        <h2 class="partner-h">Franchise Financials</h2>
                        <p class="pink-para">KINDLY COMPLETE THE FORM AND WE WILL CONTACT YOU WITH DETAILS</p>
                        <form>
                            <div class="partner-div">
                                <input type="text" placeholder="NAME*" class="form-name">
                                <input type="text" placeholder="CONTACT NUMBER*" class="form-name">
                            </div>
                            <div class="partner-div">
                                <input type="email" placeholder="EMAIL ID*" class="form-name">
                                <input type="text" placeholder="QUALIFICATION*" class="form-name">
                            </div>
                            <div class="partner-div">
                                <input type="text" placeholder="MANAGEMENT EXPERIENCE*" class="form-name1">
                            </div>
                            <div class="partner-div">
                                <input type="text" placeholder="YOUR ACHIVEMENTS*" class="form-name1">
                            </div>
                            <div class="partner-div">
                                <input type="text" placeholder="WHY WIGOMANIA*" class="form-name1">
                            </div>
                            <div class="partner-div">
                                <input type="text" placeholder="DO YOU BELIVE YOU HAVE WHAT IT TAKES*"
                                    class="form-name1">
                            </div>
                            <input type="submit" value="Send" class="partner-submit">
                        </form>
                    </div>  --}}
                    {{--  <div class="tab-pane fade" id="sf" role="tabpanel" aria-labelledby="contact-tab">
                        <h2 class="partner-h">Wig-O-Mania Sub-Franchise (SF)</h2>
                        <p class="finance-para">SALIENT FEATURES :-</p>
                        <ul class="ul-p">
                            <li class="li-p">No upfront Franchise Fee</li>
                            <li class="li-p">No commission on Sales</li>
                            <li class="li-p">An area of at least 400sq feet display area for the Brand within an existing
                                retail store that already has an existing consultation and private servicing room</li>
                            <li class="li-p">Hold a complete & exclusive range of Wig-O-Mania products that cater to both
                                Fashion and Necessity Wearers as recommended by the Brand</li>
                            <li class="li-p">Maintaining stocks of projected sales of 2 months at any given time</li>
                            <li class="li-p">Monthly orders based on sales of previous month. Option to order more than
                                once if required.</li>
                            <li class="li-p">In House marketing team that caters to all corporates and salons within the
                                assigned area</li>
                            <li class="li-p">A minimum annual fixed budget for Marketing the Store and the products
                                within the region – comprising of online-offline</li>
                        </ul>
                    </div>  --}}
                    {{--  <div class="tab-pane fade" id="sff" role="tabpanel" aria-labelledby="contact-tab">
                        <h2 class="partner-h">Obligations for the Sub-Franchisee (SF)</h2>
                        <ul class="ul-p">
                            <li class="li-p">External Wig-O-Mania Signage & Branding inside the store within the
                                designated area</li>
                            <li class="li-p">Offer the complete range of the Brand. It will sell the products at its
                                designated area of the retail unit only. Service area, private serviced rooms could be
                                shared with other facilities within the store</li>
                            <li class="li-p">To appoint a dedicated team of trained staff and sales team headed by a
                                Manager whose objective will be to promote the Franchisee business within the store and
                                across the region to cover all corporates, salons and hospitals</li>
                            <li class="li-p">The SF will stock goods of 3 months since it takes approx. 2.5 months to get
                                new goods imported into the country.</li>
                            <li class="li-p">50% payments for all products to be paid at the time of placing order and
                                the balance before products are shipped</li>
                        </ul>
                    </div>  --}}
                    {{--  <div class="tab-pane fade" id="sfff" role="tabpanel" aria-labelledby="contact-tab">
                        <h2 class="partner-h">Do you have what it takes (SF)</h2>
                        <ul class="ul-p">
                            <li class="li-p">Do you have a retail setup that caters to the Fashion or Salon Industry?
                            </li>
                            <li class="li-p">Can you see yourself as owning a unique sub-franchisee of a UK Brand that
                                offers a range of exclusive hair pieces & products for not only the fashion conscious but
                                also for Necessity wearers?</li>
                            <li class="li-p">Are you a people’s person who possesses knowledge and understanding of the
                                local language / /culture , have a personal network of contacts and are compassionate
                                towards offering an instant solution to age-old hair loss problems.
                            </li>
                            <li class="li-p">Do you want the freedom to push your vision across a wide range of people
                                covering an extensive segment of the population, who need the products – as a fashion
                                accessory or as necessity wear?
                            </li>
                            <li class="li-p">Are you willing to learn, adapt and take on a dynamic fashion industry that
                                has made inroads in the daily dressing of every person – making each one a head-turner ?
                            </li>
                        </ul>
                        <p><strong>THEN…..</strong></p>
                        <p class="partner-p">Join the Wig-O-Mania Family and own a unique, one-of-a-kind Sub-Franchisee
                            within your existing Retail Outlet, under a strong brand umbrella , offering range of products
                            with almost nil competition, and at a low cost of entry than most Franchisees . We’ll school you
                            not only our Business, Range of Products but also our commitments to serve. Wig-O-Mania is not
                            only looking for Investment Partners, rather places great importance on building partnerships
                            strengthened by the acumen of both the Brand owners and Franchisee.
                        </p>
                        <p class="partner-p">If you’re ready to take the next steps, we’d love to discuss the opportunity
                            with you and make a mutual decision about whether a Wig-O-Mania Franchise is the perfect fit for
                            you.
                        </p>
                        <p class="partner-p"><strong>Remember, we’re also looking for franchisees who are a perfect fit to
                                help us reach our goals.
                            </strong></p>
                    </div>  --}}
                </div>
            </div>
            <!-- /.col-md-8 -->
        </div>
    </section>


    {{--  <div class="tab-pane fade" id="financial" role="tabpanel" aria-labelledby="contact-tab">
        <h2 class="partner-h">Franchise Financials</h2>
        <p class="pink-para">KINDLY COMPLETE THE FORM AND WE WILL CONTACT YOU WITH DETAILS</p>
        <form method="post" action="javascript:void(0);" id="franchiseFinancialsRoute1" class="row">
            <div class="col-md-6">
                <div class="partner-div">
                    <input type="text" placeholder="NAME*" name="full_name" id="full_name"  class="form-name  w-100">
                    <span class="error_class full_name_error">&nbsp;</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="partner-div">
                    <input type="text" placeholder="CONTACT NUMBER*" name="contact_number" id="contact_number" class="form-name  w-100">
                    <span class="error_class contact_number_error">&nbsp;</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="partner-div">
                    <input type="email" placeholder="EMAIL ID*" name="email" id="email" class="form-name w-100">
                    <span class="error_class email_error">&nbsp;</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="partner-div">
                    <input type="text" placeholder="QUALIFICATION*" name="qualification" id="qualification" class="form-name w-100 ">
                    <span class="error_class qualification_error">&nbsp;</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="partner-div">
                    <input type="text" placeholder="MANAGEMENT EXPERIENCE*" name="management_experirnce" id="management_experirnce" class="form-name1">
                    <span class="error_class management_experirnce_error">&nbsp;</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="partner-div">
                    <input type="text" placeholder="YOUR ACHIVEMENTS*" name="achivements" id="achivements" class="form-name1">
                    <span class="error_class achivements_error">&nbsp;</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="partner-div">
                    <input type="text" placeholder="WHY WIGOMANIA*" name="why_wigomania" id="why_wigomania" class="form-name1">
                    <span class="error_class why_wigomania_error">&nbsp;</span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="partner-div">
                    <input type="text" placeholder="DO YOU BELIVE YOU HAVE WHAT IT TAKES*" name="believe" id="believe" class="form-name1">
                    <span class="error_class believe_error">&nbsp;</span>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" value="Send" class="partner-submit">
            </div>
        </form>
    </div>  --}}


    <script>
        const thankuUrlss = "{{ route('thanku') }}";
        $(document).ready(function(){
            $( "#franchiseFinancialsRoute" ).submit(function( event ) {
                $('.error_class').hide('active');
                var full_name = $('#full_name').val();
                var contact_number = $('#contact_number').val();
                var email = $('#email').val();
                var qualification = $('#qualification').val();
                var management_experirnce = $('#management_experirnce').val();
                var achivements = $('#achivements').val();
                var why_wigomania = $('#why_wigomania').val();
                var believe = $('#believe').val();
                console.log(full_name);
                event.preventDefault();
                 $.ajax({
                    url: "{{ $franchiseFinancialsRoute }}",
                    type: "POST",
                    data: {
                        full_name : full_name,
                        contact_number : contact_number,
                        email :email,
                        qualification : qualification,
                        management_experirnce : management_experirnce,
                        achivements : achivements,
                        why_wigomania : why_wigomania,
                        believe : believe,
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        console.log(response);
                        if(response.error){
                            $.each(response.error_message, function( index, value ) {
                                $('.'+index+'_error').text(value);
                                $('.'+index+'_error').show('active');
                                {{--  alert( index + ": " + value );  --}}
                              });
                        }else{
                            window.location.assign(thankuUrlss);
                            toastr.options.positionClass = 'toast-bottom-right';
                            toastr.options.timeOut = 1500; // 1.5s
                            toastr.success(response.success_message);
                            {{--  setTimeout(function(){ location.reload(); }, 2000);  --}}
                        }

                    },
                });
            });
        })
    </script>
@endsection
