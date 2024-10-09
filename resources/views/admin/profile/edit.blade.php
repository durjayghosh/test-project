@extends('admin.layouts.app')
@section('content')
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <!-- <div class="breadcrumb-range-picker">
                <span><i class="icon-calender"></i></span>
                <span class="ml-1">{{ date("M d, Y") }}</span>
            </div> -->
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-between mb-3">
            <div class="col-12 ">
                <h2 class="page-heading">Edit Profile</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Edit Profile</h4>
                        <div class="server-messages">
                        @if( Session::has( 'success' ))
                        <div class="alert alert-success">
                            {{ Session::get( 'success' ) }}
                        </div>
                        @elseif( Session::has( 'error' ))
                        <div class="alert alert-danger">
                            {{ Session::get( 'error' ) }}
                        </div>
                        @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                        <form method="post" action="{{ route('admin.profile.update') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" value="{{ $user->first_name }}">
                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('first_name') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" value="{{ $user->last_name }}">
                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('last_name') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ $user->email }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter phone" name="phone" value="{{ $user->phone }}">
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('phone') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="profile_image" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                    @if ($errors->has('profile_image'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('profile_image') }}
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <button type="submit" name="update" id="update" class="btn btn-primary">Update</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://domicileready.com/assets/web_assets/js/bootstrap.bundle.min.js"></script>
<script src="https://domicileready.com/assets/web_assets/js/bootstrap.min.js"></script>
<script src="https://domicileready.com/assets/web_assets/js/main.js"></script>
<script src="https://domicileready.com/assets/web_assets/js/jumble.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://use.fontawesome.com/f8bd46a8ed.js"></script>
<script src="https://domicileready.com/assets/web_assets/js/carousel.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkAmiEffMR4r0r9zziv66pyEGNJSSnGN0&libraries=places&callback=initialize"
    async defer> </script>

<script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false }, 'google_translate_element');
        }
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
    type="text/javascript"></script>
<script>
    // window.setInterval(function(){
    //     var lang = $(".goog-te-menu-value span:second").text();
    //     alert(lang);
    //     if(lang == "English") {
    //         $("#English").hide();
    //         $("#Spanish").show();
    //     } else {
    //         $("#Spanish").hide();
    //         $("#English").show();
    //     }
    // },5000);
    function translateLanguage(lang) {

        var $frame = $('.goog-te-menu-frame:first');
        if (!$frame.length > 0) {
            alert("Error: Could not find Google translate frame.");
            return false;
        }
        if(lang == "English") {
            localStorage.setItem("lang", "English");
            $("#English").hide();
            $("#Spanish").show();
        } else {
            localStorage.setItem("lang", "Spanish");
            $("#Spanish").hide();
            $("#English").show();
        }
        $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
        $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
        return false;
    }
</script>

<script src="https://domicileready.com/assets/web_assets/js/jquery.easyResponsiveTabs.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {

        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

        $('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });

    });
</script>
<!--**********************************
    Content body end
***********************************-->
@endsection
