<!-- leftbar-tab-menu -->
<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a href="{{url('/')}}" class="logo logo-metrica d-block text-center">
            <span>
                <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
            </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard"
                        data-bs-trigger="hover">
                        <a href="#MetricaDashboard" id="dashboard-tab"
                            class="nav-link {{ Request::is('dashboard/costumer/detail') ? 'active' : '' }} {{ Request::is('dashboard') ? 'active' : '' }}">
                            <i class="ti ti-smart-home menu-icon"></i>
                        </a>
                        <!--end nav-link-->
                    </li>
                    <!--end nav-item-->
                  

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages"
                        data-bs-trigger="hover">
                        <a href="#MetricaPages" id="pages-tab" class="nav-link">
                            <i class="ti ti-files menu-icon"></i>
                        </a>
                        <!--end nav-link-->
                    </li>
                    <!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication"
                        data-bs-trigger="hover">
                        <a href="#MetricaAuthentication" id="authentication-tab" class="nav-link">
                            <i class="ti ti-shield-lock menu-icon"></i>
                        </a>
                        <!--end nav-link-->
                    </li>
                    <!--end nav-item-->
                </ul>
                <!--end nav-->
            </div>
            <!--end /div-->
        </div>
        <!--end main-icon-menu-body-->
        <div class="pro-metrica-end">
            <a href="{{url('/')}}" class="profile">
                <img src="{{ asset('admin/assets/images/users/user-4.jpg') }}" alt="profile-user"
                    class="rounded-circle thumb-sm">
            </a>
        </div>
        <!--end pro-metrica-end-->
    </div>
    <!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{url('/')}}" class="logo">
                <span>
                    <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="logo-large"
                        class="logo-lg logo-dark">
                    <img src="{{ asset('admin/assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                </span>
            </a>
            <!--end logo-->
        </div>
        <!--end topbar-left-->
        <!--end logo-->
        <div class="menu-body navbar-vertical tab-content" data-simplebar>
            <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane
                 {{ Str::contains(Request::url(), '/dashboard/costumer/detail/') ? 'active' : '' }}
                 {{ Request::is('dashboard') ? 'active' : '' }}" role="tabpanel" aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Dashboard</h6>
                </div>
                {{-- {{Request::is('dashboard/costumer') ? 'active' : ''}} --}}
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"
                            href="{{ url('dashboard') }}">Home</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/undangan') ? 'active' : '' }}"
                            href="{{ url('dashboard/undangan') }}">Undangan Cetak</a>
                    </li>
                    <!--end nav-item-->


                    <li class="nav-item  ">
                        <a class="nav-link {{ Request::is(['dashboard/costumer/detail/*', 'dashboard/costumer']) ? 'active' : '' }}"
                            href="{{ url('dashboard/costumer') }}">Costumer</a>
                    </li>
                    <!--end nav-item-->
                    @if (Str::contains(Request::url(), '/dashboard/costumer/detail/'))
                    <li class="nav-item d-none">
                        <a class="nav-link {{ Str::contains(Request::url(), '/dashboard/costumer/detail/') ? 'active' : '' }}"
                            href="{{ url('dashboard/costumer/detail/') }}">detail</a>
                    </li>
                    @endif


                    <li class="nav-item">
                        <a class="nav-link {{ Request::is(['dashboard/transaksi', 'dashboard/transaksi/create']) ? 'active' : '' }}"
                            href="{{ url('dashboard/transaksi') }}">Transaksi</a>
                    </li>
                    <!--end nav-item-->
                    @if (Request::is('dashboard/transaksi/create'))
                    <li class="nav-item d-none">
                        <a class="nav-link {{ Str::contains(Request::url(), 'dashboard/transaksi/create') ? 'active' : '' }}"
                            href="{{ url('dashboard/transaksi/create') }}">create transaksi</a>
                    </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is(['dashboard/kategori', 'dashboard/kategori/create']) ? 'active' : '' }}"
                            href="{{ url('dashboard/kategori') }}">Kategori & Jenis</a>
                    </li>
                    <!--end nav-item-->


                </ul>
                <!--end nav-->
            </div><!-- end Dashboards -->
            <div id="MetricaPages" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="pages-tab">
                <div class="title-box">
                    <h6 class="menu-title">Pagessss</h6>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/slide') ? 'active' : '' }}"
                            href="{{ url('dashboard/slide') }}">Slide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/image') ? 'active' : '' }}"
                            href="{{ url('dashboard/image') }}">Image</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/question') ? 'active' : '' }}"
                            href="{{ url('dashboard/question') }}">Question</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/testimonial') ? 'active' : '' }}"
                            href="{{ url('dashboard/testimonial') }}">Testimonial</a>
                    </li>
                </ul>
                <!--end nav-->
            </div><!-- end Pages -->
            <div id="MetricaAuthentication" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="authentication-tab">
                <div class="title-box">
                    <h6 class="menu-title">Authentication</h6>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="auth-login.html">Log in</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="auth-login-alt.html">Log in alt</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="auth-register.html">Register</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="auth-register-alt.html">Register-alt</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="auth-recover-pw.html">Re-Password</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="auth-recover-pw-alt.html">Re-Password-alt</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="auth-lock-screen.html">Lock Screen</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="auth-lock-screen-alt.html">Lock Screen-alt</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="auth-404.html">Error 404</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="auth-404-alt.html">Error 404-alt</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="auth-500.html">Error 500</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="auth-500-alt.html">Error 500-alt</a>
                    </li>
                    <!--end nav-item-->
                </ul>
                <!--end nav-->
            </div><!-- end Authentication-->
        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>
<!-- end leftbar-tab-menu-->