<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- Description -->
    <meta name="description"
        content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with ready home page demos.">
    <!-- Page Title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link href="{{ asset('front-assets/images/logo1-black.png') }}" rel="icon">
    <!-- Bundle -->
    <!-- Revolution Slider CSS Files -->
    <!-- Plugin Css -->
    
    
    
    
    @if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('front-assets/vendor/css/revolution-settings.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/vendor/css/bundle.min.ar.css') }}">
    <link href="{{ asset('front-assets/vendor/css/LineIcons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/css/wow.ar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front-assets/vendor/css/cubeportfolio.min.ar.css') }}">
    <link href="{{ asset('front-assets/css/line-awesome.min.ar.css') }}" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="{{ asset('front-assets/css/style.ar.css') }}" rel="stylesheet">
    
    @else
    
    <link rel="stylesheet" href="{{ asset('front-assets/vendor/css/revolution-settings.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/vendor/css/bundle.min.css') }}">
    <link href="{{ asset('front-assets/vendor/css/LineIcons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/css/jquery.fancybox.min.css') }}" rel="stylesheet">

    <link href="{{ asset('front-assets/vendor/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/css/wow.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front-assets/vendor/css/cubeportfolio.min.css') }}">
    <link href="{{ asset('front-assets/css/line-awesome.min.css') }}" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="{{ asset('front-assets/css/style.css') }}" rel="stylesheet">
        
    @endif

    <link href="{{ asset('front-assets/css/custom.css') }}" rel="stylesheet">

</head>
