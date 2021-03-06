
<header class="site-header header-style-1 ">

   <!-- <div class="top-bar">
        <div class="container show_on_desktop_only">
            <div class="row">
                <div class="wt-topbar-left clearfix ">
                    <ul class="list-unstyled e-p-bx">
                        <li><a href="mailto:{{ get_static_option('email') }}"><i class="fa fa-envelope"></i></a><span
                                class="topemail">{{ get_static_option('email') }}</span></li>
                        <li><i class="fa fa-phone"></i><span
                                class="topphone">{{ get_static_option('mobile') }}</span></li>
                    </ul>
                </div>
                <div class="wt-topbar-right clearfix">
                    <ul class="social-bx list-inline pull-right">
                        <li><a href="{{ get_static_option('facebook') }}" class="fa fa-facebook"></a></li>
                        <li><a href="{{ get_static_option('youtube') }}" class="fa fa-youtube"></a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Search Link -->

    <!-- Search Form -->

    <div class="sticky-header main-bar-wraper" style="margin-top:-10px">
        <div class="main-bar bg-white">
            <div class="container">
                <div class="logo-header">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset(get_static_option('logo') ?? 'assets/frontend/images/logo.png') }}"
                            width="316" height="57" alt="" />
                    </a>
                </div>
                <!-- NAV Toggle Button -->
                <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- SITE Search -->
                <div id="search">
                    <span class="close"></span>
                    <form role="search" id="searchform" action="#" method="get" class="radius-xl">
                        <div class="input-group">
                            <input value="" name="q" type="search" placeholder="Type to search" />
                            <span class="input-group-btn"><button type="button" class="search-btn"><i
                                        class="fa fa-search"></i></button></span>
                        </div>
                    </form>
                </div>

                <!-- MAIN Vav -->
                <div class="header-nav navbar-collapse collapse ">
                    <ul class=" nav navbar-nav">
                        <li class=""><a href="{{ url('/') }}">Home</a></li>
                        <li class=""><a href="{{ url('/service') }}">Services</a></li>
                        <li class=""><a href="{{ url('/booking') }}">Booking</a></li>
                        <li class=""><a href="{{ url('/about') }}">About</a></li>
                        <li class=""><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li class=""><a href="{{ url('/contact-us') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
