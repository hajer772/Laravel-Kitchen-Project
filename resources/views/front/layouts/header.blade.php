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
    @if ($errors->any())
    <div class="message error" >
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@elseif (session()->has('success'))
    <div id='flash-message' class="message alert alert-success alert-dismissible text-center">
        <span class="close">&times;</span>
        <strong> {{ __('words.message-confirmation') }}</strong>
    </div>
@endif
     <!--Navigation-->
     <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
         <div class="container">
             <!--Nav Links-->
             <div class="collapse navbar-collapse" id="megaone">
                 <a href="{{ route('front.index') }}" title="Logo" class="logo">
                     <!--Logo Default-->
                     <img src="{{ asset('front-assets/images/logo1.png') }}" title="logo" alt="logo"
                         class="logo-default">
                 </a>


                 <div class="navbar-nav ml-auto">
                     <a class="nav-link  line" href="{{ route('front.index') }}#slider">{{ __('words.home') }}</a>
                     <a class="nav-link  line" href="{{ route('front.about') }}">{{ __('words.about-us') }}</a>
                     <a class="nav-link  line" href="{{ route('front.design') }}">{{ __('words.design') }}</a>
                     <a class="nav-link  line"
                         href="{{ route('front.index') }}#testimonials">{{ __('words.review') }}</a>
                     <a class="nav-link  line"
                         href="{{ route('front.contact-us') }}">{{ __('words.contact-us') }}</a>
                 </div>

                 <!--begin::Languages-->

                 <div class="text-white line">
                     @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                         <a class="{{ LaravelLocalization::getCurrentLocaleNative() == $properties['native'] ? 'd-none' : '' }}"
                             rel="alternate" hreflang="{{ $localeCode }}"
                             href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                             <span class="symbol  symbol-30 ">
                                 @if ($localeCode == 'en')
                                     <span class="navi-text">{{ __('words.english') }}</span>
                                 @elseif ($localeCode == 'ar')
                                     <span class="navi-text">{{ __('words.arabic') }}</span>
                                 @else
                                     <span class="navi-text">{{ $properties['native'] }}</span>
                                 @endif
                             </span>
                         </a>
                     @endforeach
                 </div>
                 <!--end::Languages-->
             </div>


         </div>

         <!--Side Menu Button-->
         <div class="navigation-toggle side-menu-btn ">
             
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
                 <img src="{{ asset('front-assets/images/logo1.png') }}" alt="logo">
             </a>
             <nav class="side-nav w-100">
                 <ul class="navbar-nav side-navbar">
                     <li class="nav-item">
                         <a class="nav-link " href="{{ route('front.index') }}#slider">{{ __('words.home') }}</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link " href="{{ route('front.about') }}">{{ __('words.about-us') }}</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link " href="{{ route('front.design') }}">{{ __('words.design') }}</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link "
                             href="{{ route('front.index') }}#testimonials">{{ __('words.review') }}</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link "
                             href="{{ route('front.contact-us') }}">{{ __('words.contact-us') }}</a>
                     </li>

                     <li class=" nav-item text-white line">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="{{ LaravelLocalization::getCurrentLocaleNative() == $properties['native'] ? 'd-none' : '' }}"
                                rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <span class="symbol  symbol-30 ">
                                    @if ($localeCode == 'en')
                                        <span class="navi-text">{{ __('words.english') }}</span>
                                    @elseif ($localeCode == 'ar')
                                        <span class="navi-text">{{ __('words.arabic') }}</span>
                                    @else
                                        <span class="navi-text">{{ $properties['native'] }}</span>
                                    @endif
                                </span>
                            </a>
                        @endforeach
                    </li>
                 </ul>
             </nav>

             <div class="side-footer w-100">
                 <ul class="social-icons-simple">
                     @php
                         $counter = 0;
                     @endphp
                     @foreach ($contacts as $contact)
                         @php
                             $counter++;
                         @endphp

                         @if ($counter === 3 || $counter === 6)
                             @continue
                         @endif
                         <li><a class="" href="{{ $contact->contact }}" target="_blank"><i
                                     class="{{ $contact->icon }}"></i> </a></li>
                     @endforeach
                 </ul>
                 <p>&copy; {{ __('words.love_made') }} {{ __('words.theme') }}
                 </p>
             </div>
         </div>
     </div>
     <a id="close_side_menu" href="javascript:void(0);"></a> 
 </header>
 <!-- End Header -->
