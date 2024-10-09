@extends('frontend.layouts.app')
@section('title', 'Reviews')
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
@endphp
    <section class="review-banner"  style="background-image: url({{ asset(@$Banner->image) }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" >
                    <h2 class="review-banner-heading">{{ @$Banner->heading }}</h2>
                    <div class="review-banner-para"> {!! @$Banner->description !!}</div>
                </div>
            </div>
        </div>
    </section>
      <section>

          <div class="row">
              <div class="col-lg-12">
                  <h2 class="text-center mt-5 mb-5">{{ @$Section1->heading }}</h2>
                  </div>
             </div>


          <div class="row pink-row">
            <div class="col-lg-4 partner-coll scroller">
                <h3 class="text-center text-light mt-4 mb-4">Happy client list</h3>
                <ul class="nav nav-pills flex-column par-ul-c" id="myTab" role="tablist">
                    <li class="nav-item par-li-c">
                    <a class="nav-link aa active par-ac  active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Priyanshu</a>
                    <p class="customer-para">Reviewed on 25 Jan 2019</p>
                    </li>
                    <li class="nav-item par-li-c">
                    <a class="nav-link aa par-ac" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pawan</a>
                    <p class="customer-para">Reviewed on 25 Jan 2019</p>
                    </li>
                    <li class="nav-item par-li-c">
                    <a class="nav-link aa par-ac" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Narendra</a>
                    <p class="customer-para">Reviewed on 25 Jan 2019</p>
                    </li>
                    <li class="nav-item par-li-c">
                    <a class="nav-link aa par-ac" id="contact-tab" data-toggle="tab" href="#stream" role="tab" aria-controls="stream" aria-selected="false">Ashish</a>
                    <p class="customer-para">Reviewed on 25 Jan 2019</p>
                    </li>
                    <li class="nav-item par-li-c">
                    <a class="nav-link aa par-ac" id="contact-tab" data-toggle="tab" href="#takes" role="tab" aria-controls="takes" aria-selected="false">Dhananjay</a>
                    <p class="customer-para">Reviewed on 25 Jan 2019</p>
                    </li>
                    <li class="nav-item par-li-c">
                    <a class="nav-link aa par-ac" id="contact-tab" data-toggle="tab" href="#financial" role="tab" aria-controls="financial" aria-selected="false">Priyanshu</a>
                    <p class="customer-para">Reviewed on 25 Jan 2019</p>
                    </li>
                    <li class="nav-item par-li-c">
                    <a class="nav-link aa par-ac" id="contact-tab" data-toggle="tab" href="#sf" role="tab" aria-controls="sf" aria-selected="false">Priyanshu</a>
                    <p class="customer-para">Reviewed on 25 Jan 2019</p>
                    </li>

                    <li class="nav-item par-li-c">
                    <a class="nav-link aa par-ac" id="contact-tab" data-toggle="tab" href="#sff" role="tab" aria-controls="sff" aria-selected="false">Priyanshu</a>
                    <p class="customer-para">Reviewed on 25 Jan 2019</p>
                    </li>
                    <li class="nav-item par-li-c">
                    <a class="nav-link aa par-ac" id="contact-tab" data-toggle="tab" href="#sfff" role="tab" aria-controls="sfff" aria-selected="false">Priyanshu</a>
                    <p class="customer-para">Reviewed on 25 Jan 2019</p>
                    </li>
                </ul>

            </div>
            <!-- /.col-md-4 -->
            <div class="col-lg-7 par-co">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p class="partner-pc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <p class="partner-pc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                 <p class="partner-pc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

              </div>
              <div class="tab-pane fade" id="stream" role="tabpanel" aria-labelledby="contact-tab">
               <p class="partner-pc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

             </div>
             <div class="tab-pane fade" id="takes" role="tabpanel" aria-labelledby="contact-tab">
               <p class="partner-pc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>



            </div>
            <div class="tab-pane fade" id="financial" role="tabpanel" aria-labelledby="contact-tab">
           <p class="partner-pc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

           </div>
           <div class="tab-pane fade" id="sf" role="tabpanel" aria-labelledby="contact-tab">
           <p class="partner-pc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
          <div class="tab-pane fade" id="sff" role="tabpanel" aria-labelledby="contact-tab">
           <p class="partner-pc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="tab-pane fade" id="sfff" role="tabpanel" aria-labelledby="contact-tab">
         <p class="partner-pc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>



      </div>
    </div>
  </div>
  <!-- /.col-md-8 -->
</div>




</section>



@endsection
