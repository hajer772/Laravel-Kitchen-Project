    <!-- Start Portfolio -->
    <section id="portfolio" class="cube-portfolio1 padding-top">
        <div class="container">
            <!--Heading-->
            <div class="row text-center">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 wow zoomIn heading-area"
                    data-wow-duration="1s" data-wow-delay=".1s">
                    <span class="sub-heading">{{ __('words.portfolio-subheading') }}</span>
                    <h3 class="heading text-center">{{ __('words.portfolio-headingPart1') }}
                         <span class="text-green js-rotating">{{ __('words.portfolio-heading-greenPart') }}</span>
                         <span class="d-block">
                            {{  __('words.portfolio-headingPart2')}}</span></h3>
                    <p class="text text-center">{{__('words.portfolio-paragraph')}}</p>
                </div>
            </div>
                    <div class="row wow fadeInUp">
                <div class="col-md-12">
                    <!--Portfolio Filters-->
                    <div id="js-filters-mosaic-flat" class="cbp-l-filters-button text-center">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">{{ __('words.portfolio-all-options') }}</div>

                        @foreach ($categories as $category)
                            <span class="text-blue">/</span>
                            <div data-filter=".{{ $category->class_name }}" class="cbp-filter-item">
                                {{ $category->title }}</div>
                        @endforeach

                    </div>

                    <!--Portfolio Items-->
                    <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat row">
                        <div class="col-sm-4 col-md-4 col-lg-3">
                            @foreach ($products as $product)
                                <div class="cbp-item {{ $product->category_name }}  m-2" >
                                    <a href="{{ $product->image }}" class="cbp-caption cbp-lightbox">
                                        <div class="cbp-caption-defaultWrap m-2">
                                            <img src="{{ $product->image }}" alt="port-1">
                                        </div>
                                        <div class="cbp-caption-activeWrap"></div>
                                        <div class="cbp-l-caption-alignCenter center-block">
                                            <div class="cbp-l-caption-body">
                                                <div class="plus"></div>
                                                <h5 class="text-white mb-1">{{ __('words.portfolio-hover-img-title') }}</h5>
                                                <p class="text-white">{{ __('words.portfolio-hover-img-p') }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Portfolio ->


     {{-- Start Booking Area  --}}
    <section class="booking-area">
         {{-- Quote Btn  --}}
        <div class="row text-center">
            <div class="col-12">
                <div class="quote-btn">
                    <p>Lorem ipsum dolor sit amet</p>
                    <h4>Let us build your kitchen!</h4>
                    <a href="#contact" class="scroll btn btn-medium btn-rounded btn-white">Get a Quote</a>
                </div>
            </div>
        </div>
    </section>
     {{-- End Booking Area  --}}
