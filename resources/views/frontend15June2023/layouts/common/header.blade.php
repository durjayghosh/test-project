<header class="regular-header sticky_gallery">
    <nav class="navbar navbar-expand-md main-nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ isset($GeneralSetting->logo) ? asset($GeneralSetting->logo) : asset('frontend/images/logo.png') }}">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars new_menu" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active behind-brand" aria-current="page" href="{{ route('behindTheBrand') }}">Behind the Brand</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link goto-review" href="{{ route('home', '#forte') }}">Our Forte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link goto-review" href="{{ route('home', '#studio') }}">Our Studio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link goto-review" href="{{ route('review') }}">Reviews</a>
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
                        <a class="nav-link reach-us" href="{{ route('reachUs') }}">Reach Us</a>
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="header-phone">
                    <a href="{{ route('customer.review') }}"><img src="{{ asset('frontend/images/review1.gif') }}" class="review_btn"></a>
                    <a class="btn btn-light" href="{{ route('reachUs') }}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Book an Appointment</a>
                    @if(isset($GeneralSetting->contact_number))
                        <a href="tel:{{ $GeneralSetting->alternate_contact_number }}" class="btn btn-outline-light mobile_num"><i class="fa fa-mobile"></i>+91-{{ wordwrap($GeneralSetting->contact_number, 5, "-", true) }}</a>
                    @endif
                    @if(isset($GeneralSetting->alternate_contact_number))
                        <a href="tel:{{ $GeneralSetting->alternate_contact_number }}" class="btn btn-outline-light mobile_num"><i class="fa fa-phone"></i>+91-{{ wordwrap($GeneralSetting->alternate_contact_number, 5, "-", true) }}</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>
