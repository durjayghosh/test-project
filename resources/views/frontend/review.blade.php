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

    <section class="review-section new-review-section" id="reviewSection">
        <div class="row" bis_skin_checked="1">
            <div class="col-md-12 review-header" bis_skin_checked="1">
                <p>{{ @$Section1->heading }}</p>
                <h1 style="padding-bottom: 25px !important;">{{ @$Section1->sub_heading }}</h1>
                <div class="divider" bis_skin_checked="1"></div>
            </div>
            @if (count($Reviews) > 0)
                @foreach ($Reviews as $rkey => $review)
                    <div class="col-sm-4" bis_skin_checked="1">
                        <div class="card review-block" bis_skin_checked="1">
                            <div class="card-body" bis_skin_checked="1">
                                <div class="review-image" bis_skin_checked="1">
                                    <span>{{ substr(ucwords(trim($review->name)), 0, 1) }}</span>
                                </div>
                                <?php
                                    $str_len = strlen($review->description);
                                ?>
                                @if($str_len >= 180)
                                <p class="review-text" style="height: 95px;">{{ Str::limit($review->description, 180) }}<button type="button"
                                        class="modal_review" data-toggle="modal"
                                        data-target="#exampleModalCenter{{ $rkey }}">Read More </button></p>
                                @else
                                <p class="review-text" style="height: 95px;">{{$review->description}}</p>
                                @endif
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter{{ $rkey }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
                                    bis_skin_checked="1">
                                    <div class="modal-dialog modal-dialog-centered" role="document" bis_skin_checked="1">
                                        <div class="modal-content" bis_skin_checked="1">
                                            <div class="modal-header" bis_skin_checked="1">
                                                <p class="review-name">{{ ucfirst($review->name) }}</p>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" bis_skin_checked="1">
                                                <p class="review-date">{{ Carbon\Carbon::parse($review->review_date)->format("d M, Y") }}</p>

                                                <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                                                    @if ($review->rating > 0)
                                                        @for ($i = 1; $i < $review->rating; $i++)
                                                            <i class="fa fa-star"></i>
                                                        @endfor
                                                    @endif
                                                </p>
                                                {{ $review->description }}
                                            </div>
                                            <div class="modal-footer" bis_skin_checked="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end modal-->
                                <div class="divider review-divider" bis_skin_checked="1"></div>
                                <div class="row" bis_skin_checked="1">
                                    <div class="col-md-6" bis_skin_checked="1">
                                        <p class="review-name">{{ ucfirst($review->name) }}</p>
                                        <p class="review-date">{{ Carbon\Carbon::parse($review->review_date)->format("d M, Y") }}</p>
                                    </div>
                                    <div class="col-md-6 text-end" bis_skin_checked="1">
                                        <p class="review-star"><i class="fa fa-star" aria-hidden="true"></i>
                                            @if ($review->rating > 0)
                                                @for ($i = 1; $i < $review->rating; $i++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                            @endif
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="center">
                {{ $Reviews->links() }}
            </div>



        </div>

    </section>

@endsection
