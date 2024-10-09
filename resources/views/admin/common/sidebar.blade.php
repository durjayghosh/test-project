<!--**********************************
    Sidebar start
***********************************-->
<style>
    #main-wrapper{
        padding-top: 35px !important;
    }
    .nk-sidebar{
        padding-top: 80px !important;
    }
    .nk-sidebar,
    .nav-header,
    .header{
        position: fixed;
        top: 0;
        padding: 0;
    }

    .nk-nav-scroll{

        {{--  height: 90vh !important;  --}}
        {{--  height: inherit !important;  --}}
    }
</style>

<div class="nk-sidebar">
    <div class="nk-nav-scroll" style="">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            @if (Auth::user()->role == 1)
                <li>
                    <a href="{{route('admin.dashboard')}}" aria-expanded="false">
                        <i class="icon-speedometer"></i><span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-label">Management</li>
                {{--  <li><a class="has-arrow" href="{{ route('suncana.index') }}" aria-expanded="false"><i class="fa fa-home"></i><span class="nav-text">Home Page</span></a></li>  --}}


                {{--  <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false"><i class="icon-user"></i><span class="nav-text">User Management</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.agent.add')}}">Add User</a></li>
                        <li><a href="{{route('admin.agent.index')}}">Manage Users</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">Role Management</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.role.add')}}">Add Role</a></li>
                        <li><a href="{{route('admin.role.index')}}">Manage Role</a></li>
                    </ul>
                </li>  --}}

                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">CMS Management</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.page.index')}}">Pages</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void(0);;" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">Review</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.review.add')}}">Add Review</a></li>
                        <li><a href="{{route('admin.review.index')}}">Review</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">Location Gallery</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.location_gallery.add')}}">Add Location Gallery</a></li>
                        <li><a href="{{route('admin.location_gallery.index')}}">Location Gallery</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">Gallery Category</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.gallery_category.add')}}">Add Gallery Category</a></li>
                        <li><a href="{{route('admin.gallery_category.index')}}">Gallery Category</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">Gallery</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.galleries.add')}}">Add Gallery</a></li>
                        <li><a href="{{route('admin.galleries.index')}}">Gallery</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">Our Team</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.ourteam.add')}}">Add Our Team</a></li>
                        <li><a href="{{route('admin.ourteam.index')}}">Our Team</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">Partner Opportunity</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.opportunity.add')}}">Add Partner Opportunity</a></li>
                        <li><a href="{{route('admin.opportunity.index')}}">Partner Opportunity</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">CSR</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.csr.add')}}">Add CSR</a></li>
                        <li><a href="{{route('admin.csr.messageFromCeoIndex')}}">Message From CEO</a></li>
                        <li><a href="{{route('admin.csr.index')}}">CSR</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">Product</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.product_category.index')}}">Product Category</a></li>
                        <li><a href="{{route('admin.product.add')}}">Product Add</a></li>
                        <li><a href="{{route('admin.product.index')}}">Manage Product</a></li>
                    </ul>
                </li>

                <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">Blog</span></a>
                    <ul aria-expanded="false">
                        <li><a href="{{route('admin.blog-category.index')}}">Category</a></li>
                        <li><a href="{{route('admin.blogs.index')}}">Blog</a></li>
                        <li><a href="{{route('admin.custom-link.index')}}">Custom Links</a></li>

                    </ul>
                </li>

                <li><a class="has-arrow" href="{{route('admin.financial.index')}}" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">Franchise Financials</span></a>
                </li>
                <li><a class="has-arrow" href="{{route('admin.BookAnAppointment.index')}}" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">Book an Appointment</span></a>
                </li>

                <li><a class="has-arrow" href="{{route('admin.reachUs.index')}}" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">Reach Us</span></a>
                </li>

                <li><a class="has-arrow" href="{{route('admin.general.setting')}}" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="nav-text">General Settings</span></a>
                    {{--  <ul aria-expanded="false">
                        <li><a href="{{route('admin.gallery.add')}}">Add Gallery</a></li>
                        <li><a href="{{route('admin.gallery.index')}}">Gallery</a></li>
                    </ul>  --}}
                </li>


            @else
                {{--  @if(in_array('admin.dashboard', session('menuPermission')))
                    <li>
                        <a href="{{route('admin.dashboard')}}" aria-expanded="false">
                            <i class="icon-speedometer"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                @endif

                <li class="nav-label">Management</li>
                @if(in_array('admin.agent.add', session('menuPermission')) || in_array('admin.agent.index', session('menuPermission')))
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false"><i class="icon-user"></i><span class="nav-text">User Management</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.agent.add')}}">Add User</a></li>
                            <li><a href="{{route('admin.agent.index')}}">Manage Users</a></li>
                        </ul>
                    </li>
                @endif  --}}


            @endif
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
