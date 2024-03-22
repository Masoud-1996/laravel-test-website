<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">بخش ها </span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-inbox"></i>
                        <span class="hide-menu"> فروشگاه </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.market.category.index')}}" class="sidebar-link">
                                <i class="mdi mdi-email"></i>
                                <span class="hide-menu"> دسته بندی </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.market.property.index')}}" class="sidebar-link">
                                <i class="mdi mdi-email-secure"></i>
                                <span class="hide-menu"> فرم کالا </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.market.product.index')}}" class="sidebar-link">
                                <i class="fas fa-angle-left angle"></i>
                                <span class="hide-menu"> کالاها </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.market.delivery.index')}}" class="sidebar-link">
                                <i class="fas fa-bars"></i>
                                <span class="hide-menu"> روش های ارسال </span>
                            </a>
                        </li>
                      
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-bookmark"></i>
                        <span class="hide-menu"> کاربران </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.user.admin-user.index')}}" class="sidebar-link">
                                <i class="mdi mdi-book-multiple"></i>
                                <span class="hide-menu">  کاربران ادمین </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.user.customer.index')}}" class="sidebar-link">
                                <i class="mdi mdi-book-plus"></i>
                                <span class="hide-menu"> مشتریان </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.user.role.index')}}" class="sidebar-link">
                                <i class="mdi mdi-book-plus"></i>
                                <span class="hide-menu"> سطوح دسترسی </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-gradient"></i>
                        <span class="hide-menu">بخش تنظیمات </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.setting.index')}}" class="sidebar-link">
                                <i class="fas fa-bars"></i>
                                <span class="hide-menu"> تنظیمات </span>
                            </a>
                        </li>
                    </ul>
                </li>
            
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-list-alt"></i>
                        <span class="hide-menu"> بخش محتوا </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ route('admin.content.category.index')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu"> دسته بندی </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.content.menu.index')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu"> منو </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.content.banner.index')}}" class="sidebar-link">
                                <i class="mdi mdi-toggle-switch"></i>
                                <span class="hide-menu"> بنر </span>
                            </a>
                        </li>
                    </ul>
                </li>
           
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('customer.home')}}" aria-expanded="false">
                        <i class="mdi mdi-directions"></i>
                        <span class="hide-menu">خروج از پنل ادمین  </span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
