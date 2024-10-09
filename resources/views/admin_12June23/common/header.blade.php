<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content clearfix">

        {{--  <div class="header-left">
            <div class="input-group icons">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent border-0" id="basic-addon1"><i class="icon-magnifier"></i></span>
                </div>
                <input type="search" class="border-0" placeholder="Search Dashboard" aria-label="Search Dashboard">
                <div class="drop-down animated flipInX d-md-none">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>  --}}
        <div class="header-right">


            <ul class="clearfix">

                {{--  <li class="icons d-none d-md-flex">
                    <a href="javascript:void(0)" class="window_fullscreen-x">
                        <i class="icon-frame"></i>
                    </a>
                </li>
                <li class="icons">
                    <a href="javascript:void(0)" class="">
                        <i class="icon-envelope"></i>
                        <span class="badge badge-danger">3</span>
                    </a>
                    <div class="drop-down animated flipInX">
                        <div class="dropdown-content-body">
                            <ul>
                                <li class="notification-unread">
                                    <a href="javascript:void()">
                                        <img class="float-left mr-3 avatar-img" src="{{ asset('admin-assets/images/avatar/1.jpg') }}" alt="avatar">
                                        <div class="notification-content">
                                            <div class="notification-text">Hey, What's up! You have a good news !!!</div>
                                            <div class="notification-timestamp">08 Hours ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-unread">
                                    <a href="javascript:void()">
                                        <img class="float-left mr-3 avatar-img" src="{{ asset('admin-assets/images/avatar/2.jpg') }}" alt="avatar">
                                        <div class="notification-content">
                                            <div class="notification-timestamp">08 Hours ago</div>
                                            <div class="notification-text">Can you do me a favour?</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <img class="float-left mr-3 avatar-img" src="{{ asset('admin-assets/images/avatar/3.jpg') }}" alt="avatar">
                                        <div class="notification-content">
                                            <div class="notification-text">Hey!</div>
                                            <div class="notification-timestamp">08 Hours ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <img class="float-left mr-3 avatar-img" src="{{ asset('admin-assets/images/avatar/4.jpg') }}" alt="avatar">
                                        <div class="notification-content">
                                            <div class="notification-text">And what do you do?</div>
                                            <div class="notification-timestamp">08 Hours ago</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a class="d-flex justify-content-center bg-primary px-4 text-white" href="email-inbox.html">
                                <span>See all messagese </span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="icons">
                    <a href="javascript:void(0)" class="">
                        <i class="icon-bell"></i>
                        <span class="badge badge-primary">3</span>
                    </a>
                    <div class="drop-down animated flipInX dropdown-notfication">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="javascript:void()">
                                        <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-calender"></i></span>
                                        <div class="notification-content">
                                            <h5 class="notification-heading">Event Started</h5>
                                            <span class="notification-text">One hour ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-calender"></i></span>
                                        <div class="notification-content">
                                            <h5 class="notification-heading">Event Started</h5>
                                            <span class="notification-text">One hour ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-calender"></i></span>
                                        <div class="notification-content">
                                            <h5 class="notification-heading">Event Started</h5>
                                            <span class="notification-text">One hour ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-calender"></i></span>
                                        <div class="notification-content">
                                            <h5 class="notification-heading">Event Started</h5>
                                            <span class="notification-text">One hour ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a class="d-flex justify-content-between bg-primary px-4 text-white" href="javascript:void()">
                                <span>All Notifications</span>
                                <span><i class="icon-settings"></i></span>
                            </a>
                        </div>
                    </div>
                </li>  --}}
                <script>
                    $( Document ).on('change', '#brandOption', function(){
                        $( "#brandForm" ).submit();
                    })

                </script>

                <li class="icons">
                    {{--  <div class="header-left">
                        <div class="input-group icons">
                            <form action="{{ route('admin.dashboard.brand') }}" id="brandForm" method="post">
                                @csrf
                                <div class="pr-4">
                                    <select name="brand" id="brandOption" {{ Auth::user()->role != 1 ? 'disabled' : '' }} class="form-control">
                                        @if(Auth::user()->role == 1)
                                            <option value="">Select Brand</option>
                                            @foreach(session('Brand') as $key => $brand)
                                                <option value="{{ $brand['id'] }}" {{ session('brand_id') == $brand['id'] ? 'selected' : '' }}> {{ $brand['brand'] }}</option>
                                            @endforeach
                                        @else if
                                            @foreach(session('Brand') as $key => $brand)
                                                <option value="{{ $brand['id'] }}" {{ $brand['id'] == Auth::user()->brand_id ? 'selected' : '' }}> {{ $brand['brand'] }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </form>
                            <div class="drop-down animated flipInX d-md-none">

                            </div>
                        </div>
                    </div>  --}}

                    <div class="user-img c-pointer-x">
                        <span class="activity active"></span>
                        @if(auth()->user()->profile_image == '' && auth()->user()->profile_image == null)
                            <img src="{{ asset('profile/1655448941user_placeholder.png') }}" height="40" width="40" alt="avatar">
                        @else
                        <img src="{{ asset('profile/') }}/{{auth()->user()->profile_image}}" height="40" width="40" alt="avatar">
                        @endif
                    </div>
                    <div class="drop-down dropdown-profile animated flipInX">
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="{{Auth::user()->role != 2 ? route('admin.edit',['id' => auth()->user()->id]) : route('admin.restaurant.edit',['id' => auth()->user()->id])}}"><i class="icon-user"></i> <span>My Profile</span></a>
                                </li>
                                <li><a href="{{route('admin.edit-password')}}"><i class="icon-key"></i> <span>Change Password</span></a>

                                <li><a href="{{route('admin.logout')}}"><i class="icon-logout"></i> <span>Logout</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->
