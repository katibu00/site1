<header class="site-header header-sass header-transparent header-fixed" data-header-fixed="true" data-mobile-menu-resolution="992">
    <div class="container">
        <div class="header-inner">

            <nav id="site-navigation" class="main-nav">

                <div class="site-logo">
                    <a href="#" class="logo">
                        <img src="/logos/v1.png" width="70%" alt="site logo" class="main-logo">
                        <img src="/logos/v5.png" width="70%" alt="site logo" class="logo-sticky">
                    </a>
                </div>

                <div class="menu-wrapper main-nav-container canvas-menu-wrapper" id="mega-menu-wrap">
                    <div class="canvas-header">
                        <div class="mobile-offcanvas-logo">
                            <a href="#">
                                <img src="/theme/img/logo-saas.png" alt="site logo" class="logo-sticky">
                            </a>
                        </div>

                        <div class="close-menu" id="page-close-main-menu">
                            <i class="ti-close"></i>
                        </div>

                    </div>

                    @guest
                    <ul class="astriol-main-menu">
                      
                        <li class="menu-item-depth-0"><a href="{{ route('home') }}">Home</a></li>
                        <li class="menu-item-depth-0"><a href="{{ route('about') }}">About Us</a></li>
                        <li class="menu-item-depth-0"><a href="{{ route('features') }}">Features</a></li>
                        <li class="menu-item-depth-0"><a href="{{ route('user.blogs.index') }}">Blog</a></li>
                        <li class="menu-item-depth-0"><a href="#">Pricing</a></li>
                        {{-- <li class="menu-item-depth-0"><a href="{{ route('support') }}">Support</a></li> --}}
                        {{-- <li class="menu-item-depth-0"><a href="#">Resources</a></li> --}}
                        <li class="menu-item-depth-0"><a href="{{ route('user.contact.index') }}">Contact Us</a></li>
                    </ul>
                    @endguest

                    @auth
                    <ul class="astriol-main-menu">
                      
                        <li class="menu-item-depth-0"><a href="{{ route('admin.blogs.index') }}">Blogs</a></li>
                        <li class="menu-item-depth-0"><a href="{{ route('admin.demos.index') }}">Demo Requests</a></li>
                        <li class="menu-item-depth-0"><a href="#">Contact Us</a></li>
                        <li class="menu-item-depth-0"><a href="{{ route('logout') }}">Logout</a></li>
                       
                    </ul>
                    @endauth
                </div>

                <div class="nav-right">
                    <a href="{{ route('try') }}" class="nav-btn gp-btn color-two btn-circle py-2">Try Free</a>

                    <div class="astriol-burger-menu" id="mobile-menu-open">
                        <span class="bar-one"></span>
                        <span class="bar-two"></span>
                        <span class="bar-three"></span>
                    </div>
                </div>

            </nav>
        </div>
    </div>
</header>