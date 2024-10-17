 <!-- Start Loader -->
 <div class="loader1">
    <div class="loader-inner">
        <div id="preloader">
            <div id="loader"></div>
        </div>
    </div>
</div>
<!-- End Loader -->

<!-- Start Header -->
<header>
    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
            <a href="{{ route('front.index') }}" title="Logo" class="logo">
                <!--Logo Default-->
                <img src="{{ asset('front-assets/images/logo-white.png') }}" title="logo" alt="logo" class="logo-default">
            </a>

            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="megaone">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link  line" href="{{ route('front.index') }}#slider">Home</a>
                    <a class="nav-link  line" href="{{ route('front.index') }}#about">About Us</a>
                    <a class="nav-link  line" href="{{ route('front.index') }}#portfolio">Kitchen Designs</a>
                    <a class="nav-link  line" href="{{ route('front.index') }}#testimonials">Client Reviews</a>
                    <a class="nav-link  line" href="{{ route('front.index') }}#contact">Contact Us</a>
                </div>
            </div>
        </div>

        <!--Side Menu Button-->
        <div class="navigation-toggle">
            <ul class="slider-social toggle-btn my-0">
                <li>
                    <a href="javascript:void(0);" class="sidemenu_btn" id="sidemenu_toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Side Nav-->
    <div class="side-menu hidden">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <a href="{{ route('front.index') }}" title="Logo" class="logo side-logo">
                <!--Logo Default-->
                <img src="{{ asset('front-assets/images/logo-white.png') }}" alt="logo">
            </a>
            <nav class="side-nav w-100">
                <ul class="navbar-nav side-navbar">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('front.index') }}#slider">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('front.index') }}#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('front.index') }}#portfolio">Kitchen Designs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('front.index') }}#testimonials">Client Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('front.index') }}#contact">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer w-100">
                <ul class="social-icons-simple">
                    <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a> </li>
                    <li><a class="social-icon" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
                <p>&copy; 2023 MegaOne. Made With Love by Themesindustry</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
</header>
<!-- End Header -->