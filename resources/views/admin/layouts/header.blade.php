<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
                <a href="{{ route('admin.home')}} " class="logo">
                    
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <i class="dark-logo fas fa-home text-danger"></i>
                        {{-- <img src="{{asset('admin-assets/assets/images/logo-icon.png')}}" alt="homepage" class="" /> --}}


                        <!-- Light Logo icon -->
                        <i class="light-logo fas fa-home text-warning "></i>

                          
                        {{-- <img src="{{asset('admin-assets/assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" /> --}}
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    {{-- <span class="logo-text">
                        <!-- dark Logo text -->
                        <img src="{{asset('admin-assets/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                        <i class="light-logo fas fa-home "  alt="homepage"></i>
                      
                    </span> --}}
                </a>
                <a class="sidebartoggler d-none d-md-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                    <i class="mdi mdi-toggle-switch mdi-toggle-switch-off font-20"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti-more"></i>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <!-- <li class="nav-item d-none d-md-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                        <i class="mdi mdi-menu font-24"></i>
                    </a>
                </li> -->
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item search-box">
                    <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-magnify font-20 mr-1"></i>
                            <div class="ml-1 d-none d-sm-block">
                                <span>جستجو . . .</span>
                            </div>
                        </div>
                    </a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter">
                        <a class="srh-btn">
                            <i class="ti-close"></i>
                        </a>
                    </form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->

            @auth
                       
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="font-22 mdi mdi-email-outline"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                        <span class="with-arrow">
                            <span class="bg-danger"></span>
                        </span>
                        <ul class="list-style-none">
                            <li>
                                <div class="drop-title text-white bg-danger">
                                    <h4 class="m-b-0 m-t-5">1 پیام جدید </h4>
                                    <span class="font-light">پیام ها</span>
                                </div>
                            </li>
                            <li>
                                <div class="message-center message-body">
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="user-img">
                                            <img src="{{asset('admin-assets/assets/images/test.jpg')}}" alt="user" class="rounded-circle">
                                            <span class="profile-status online pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">کاربر ادمین </h5>
                                            <span class="mail-desc">جهت تست پنل ادمین</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
            
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center link text-dark" href="javascript:void(0);">
                                    <b>نمایش تمام ایمیل ها</b>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown border-right">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-bell-outline font-22"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                        <span class="with-arrow">
                            <span class="bg-primary"></span>
                        </span>
                        <ul class="list-style-none">
                            <li>
                                <div class="drop-title bg-primary text-white">
                                    <h4 class="m-b-0 m-t-5">یک اعلان جدید </h4>
                                    <span class="font-light">اعلانات</span>
                                </div>
                            </li>
                            <li>
                                <div class="message-center notifications">
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="btn btn-danger btn-circle">
                                            <i class="fa fa-link"></i>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title"> ادمین</h5>
                                            <span class="mail-desc">تست کاربر ادمین</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                  
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center m-b-5 text-dark" href="javascript:void(0);">
                                    <strong> بررسی تمام نوتیفیکیشن ها</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('admin-assets/assets/images/test.jpg')}}" alt="user" class="rounded-circle" width="40">
                        <span class="m-l-5 font-medium d-none d-sm-inline-block"> کاربر تست<i class="mdi mdi-chevron-down"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <span class="with-arrow">
                            <span class="bg-primary"></span>
                        </span>
                        <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                            <div class="">
                                <img src="{{asset('admin-assets/assets/images/test.jpg')}}" alt="user" class="rounded-circle" width="60">
                            </div>
                            <div class="m-l-10">
                                <h4 class="m-b-0">کاربر</h4>
                             
                            </div>
                        </div>
                        <div class="profile-dis scrollable">
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="ti-user m-r-5 m-l-5"></i> پروفایل من </a>
                    
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="ti-email m-r-5 m-l-5"></i> پیام ها</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="ti-settings m-r-5 m-l-5"></i> تنظیمات اکانت </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('auth.customer.logout') }}">
                                <i class="fa fa-power-off m-r-5 m-l-5"></i> خروج</a>
                            <div class="dropdown-divider"></div>
                        </div>
                        <div class="p-l-30 p-10">
                            <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">نمایش پروفایل شخصی  </a>
                        </div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
            @endauth

            @guest
            <ul class="navbar-nav float-right">
                      
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('admin-assets/assets/images/test.jpg')}}" alt="user" class="rounded-circle" width="40">
                        <span class="m-l-5 font-medium d-none d-sm-inline-block"> کاربر مهمان<i class="mdi mdi-chevron-down"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <span class="with-arrow">
                            <span class="bg-primary"></span>
                        </span>
                        <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                            <div class="">
                                <img src="{{asset('admin-assets/assets/images/test.jpg')}}" alt="user" class="rounded-circle" width="60">
                            </div>
                            <div class="m-l-10">
                                <h4 class="m-b-0">کاربر مهمان</h4>
                             
                            </div>
                        </div>
                        <div class="profile-dis scrollable">
                            <a class="dropdown-item" href="login-register">
                                <i class="ti-user m-r-5 m-l-5"></i> برای رفتن به پروفایل خود ابتدا ثبت نام کنید یا وارد شوید</a>
                
                        </div>
                       
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
            @endguest
        </div>
    </nav>
</header>