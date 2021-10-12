 <!-- ========== Left Sidebar Start ========== -->
 <div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{ route('admin_dashboard') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a  href="{{ route('admin_dashboard') }}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    {{-- <span class="badge bg-success float-end">4</span> --}}
                    <span>@lang('navbar.dashboard')</span>
                </a>
                {{-- <div class="collapse" id="sidebarDashboards">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="dashboard-analytics.html">Analytics</a>
                        </li>
                        <li>
                            <a href="dashboard-crm.html">CRM</a>
                        </li>
                        <li>
                            <a href="index.html">Ecommerce</a>
                        </li>
                        <li>
                            <a href="dashboard-projects.html">Projects</a>
                        </li>
                    </ul>
                </div> --}}
            </li>

            {{-- <li class="side-nav-title side-nav-item">Apps</li>

            <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Calendar </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="apps-chat.html" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Chat </span>
                </a>
            </li> --}}

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                 aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> @lang('navbar.user management') </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        @can('role-list')
                        <li><a class="nav-link" href="{{ route('roles.index') }}">@lang('navbar.roles')</a></li>
                         @endcan
                         @can('permission-list')
                                <li><a class="nav-link" href="{{ route('permissions.index') }}">@lang('navbar.permissions')</a></li>
                            @endcan

                        @can('user-list')
                        <li><a class="nav-link" href="{{ route('users.index') }}">@lang('navbar.users')</a></li>
                          @endcan

                    </ul>
                </div>
            </li>







            <li class="side-nav-title side-nav-item mt-1">@lang('navbar.master datas')</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI"
                 class="side-nav-link">
                    <i class="uil-box"></i>
                    <span>@lang('navbar.master settings') </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarBaseUI">
                    <ul class="side-nav-second-level">
                        @can('category-list')
                        <li>
                            <a href="{{ route('categories.index') }}">@lang('navbar.categories')</a>
                        </li>
                        @endcan

                        @can('foodType-list')
                        <li>
                            <a href="{{ route('subcategory.index') }}">@lang('navbar.sub categories')</a>
                        </li>
                        @endcan

                        @can('foodType-list')


                        <li>
                            <a href="{{ route('food_type.index') }}">@lang('navbar.food types')</a>
                        </li>
                        @endcan



                    </ul>
                </div>

            </li>





            <li class="side-nav-title side-nav-item mt-1">@lang('navbar.restaurant settings')</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#restaurantsettings" aria-expanded="false" aria-controls="restaurantsettings"
                 class="side-nav-link">
                    <i class="uil-box"></i>
                    <span>@lang('navbar.restaurant settings') </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="restaurantsettings">
                    <ul class="side-nav-second-level">
                        @can('restaurant-list')
                        <li>
                            <a href="{{ route('restaurant.index') }}">@lang('navbar.restaurant list')</a>
                        </li>
                        @endcan
                        <li>
                            <a href="{{ route('dishes.index') }}">@lang('navbar.list dishes')</a>
                        </li>
                        <li>
                            <a href="{{ route('menus.index') }}">@lang('navbar.menus')</a>
                        </li>


                    </ul>
                </div>

            </li>






            <li class="side-nav-title side-nav-item mt-1">@lang('navbar.global settings')</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#globalsettings" aria-expanded="false" aria-controls="globalsettings"
                 class="side-nav-link">
                    <i class="uil-box"></i>
                    <span>@lang('navbar.global settings') </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="globalsettings">
                    <ul class="side-nav-second-level">
                        @can('currency-list')
                        <li>
                            <a href="{{ route('currency.index') }}">@lang('navbar.list currency')</a>
                        </li>
                        @endcan


                    </ul>
                </div>

            </li>



        </ul>

        <!-- Help Box -->
        {{-- <div class="help-box text-white text-center">
            <a href="javascript: void(0);" class="float-end close-btn text-white">
                <i class="mdi mdi-close"></i>
            </a>
            <img src="assets/images/help-icon.svg" height="90" alt="Helper Icon Image">
            <h5 class="mt-3">Unlimited Access</h5>
            <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
            <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Upgrade</a>
        </div> --}}
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
