   
<header class="regular-header sticky_gallery">
    @section('content')
    @php
    // use App\Models\{PageSection};
    use App\Models\ {ProductCategory};
        // $PageSections = PageSection::where('page_id', 1)->with('sectionlist')->get();
$ProductCategory = ProductCategory::get();
        // $PageSections = $PageSections ? $PageSections : [];
        // $Sliders = $PageSections->where('section', 'Slider');
        // $Section1 = $PageSections
        //     ->where('section', 'section_1')
        //     ->first()
        //     ->sectionList->first();
        // $Section2 = $PageSections
        //     ->where('section', 'section_2')
        //     ->first()
        //     ->sectionList->first();
        // $Section3 = $PageSections
        //     ->where('section', 'section_3')
        //     ->first()
        //     ->sectionList->first();
        // $Section4 = $PageSections
        //     ->where('section', 'section_4')
        //     ->first()
        //     ->sectionList->first();
        // $Section5 = $PageSections
        //     ->where('section', 'section_5')
        //     ->first()
        //     ->sectionList->first();
        // $Section6 = $PageSections
        //     ->where('section', 'section_6')
        //     ->first()
        //     ->sectionList->first();
    @endphp
    
    
    <div class="row mobile-line">
      
         <div class="col-lg-7 " style="    padding-right: 0px;text-align:right">
             <p><a style="    font-size: 15px;
                padding: 5px 10px;
                margin-top: 7px;" class="btn btn-light couponModal" href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#popup">Get additional 15% Discount on MRP@Wig-O-Mania. Kindly Fill the coupon to get the discount</a></p>
    </div>
    <div class="col-lg-5 ">
         
    </div>
    </div>    

    <nav class="navbar navbar-expand-lg navbar-light bg-white main-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ isset($GeneralSetting->logo) ? asset($GeneralSetting->logo) : asset('frontend/images/logo.png') }}" alt="logo" title="logo" >
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars new_menu" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active behind-brand" aria-current="page" href="{{ route('behindTheBrand') }}">Behind the Brand</a>
                    </li>
                    <li class="nav-item menu-item">
                        <a class="nav-link goto-review" href="javascript:void(0);">Our Forte</a>
                       
                        <ul class="drop-menu">
                            
                    <li class="drop-menu-item">
                        <a href="{{ route('product', $ProductCategory[0]->slug) }}">{{ $ProductCategory[0]->category_name}}</a>
                    </li>
                    <li class="drop-menu-item">
                        <a href="{{ route('product', $ProductCategory[1]->slug) }}">{{ $ProductCategory[1]->category_name}}</a>
                    </li>
                    <li class="drop-menu-item">
                        <a href="{{ route('product', $ProductCategory[2]->slug) }}">{{ $ProductCategory[2]->category_name}}</a>
                    </li>
                    <li class="drop-menu-item">
                        <a href="{{ route('product', $ProductCategory[3]->slug) }}">{{ $ProductCategory[3]->category_name}}</a>
                    </li>
                </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link goto-review" href="{{ route('home', '#studio') }}">Our Studio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link goto-review" href="{{ route('home', '#reviewSection') }}">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('partnership') }}">Partnership Opportunity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('csr') }}">CSR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link goto-review" href="{{ route('gallery') }}">Gallery</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link reach-us" href="https://blog.wigomania.com">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link reach-us" href="{{ route('reachUs') }}">Reach Us</a>
                    </li>
					
                </ul>
            </div>
            <div class="">

               
                <div class="header-phone">
                    <a href="{{ route('customer.review') }}"><img src="{{ asset('frontend/images/review1.gif') }}" class="review_btn" alt="review" title="review"  ></a>
                    <a class="btn btn-light" href="{{ route('reachUs') }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book an Appointment</a>
                    <a class="btn btn-light couponModal" href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#popup">Coupon</a>
                    @if(isset($GeneralSetting->contact_number))
                        <a href="tel:{{ $GeneralSetting->alternate_contact_number }}" class="btn btn-outline-light mobile_num"><i class="fa fa-mobile"></i>+91-{{ wordwrap($GeneralSetting->contact_number, 5, "-", true) }}</a>
                    @endif
                    {{--  @if(isset($GeneralSetting->alternate_contact_number))
                        <a href="tel:{{ $GeneralSetting->alternate_contact_number }}" class="btn btn-outline-light mobile_num"><i class="fa fa-phone"></i>+91-{{ wordwrap($GeneralSetting->alternate_contact_number, 5, "-", true) }}</a>
                    @endif  --}}

                </div>

            </div>
        </div>
    </nav>
</header>
