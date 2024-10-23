    <!-- Start Testimonials -->
    <section class="our-clients" id="testimonials" dir="{{ App::isLocale('ar') ? 'ltr' : 'ltr' }}">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-12 text-center">
                    <div class="heading-area">
                        <span class="sub-heading mb-2">{{ __('words.client-subheading') }}</span>
                        <h4 class="heading main-font">{{ __('words.client-headingPart1') }} <span class="d-block">
                                {{ __('words.client-headingPart2') }}</span></h4>
                    </div>
                </div>
                <div class="testimonial-owl owl-testimonial owl-carousel owl-theme">
                    @foreach ($testimonials as $testimonial)
                        <!-- Item-1 -->
                        <div class="item">
                            <div class="testimonial-box">
                                <div class="quote_box">
                                    <i class="fas fa-quote-right quote"></i>
                                </div>
                                <p class="info infot_margin text">{{ $testimonial->description }}</p>

                                <div class="testimonial_img">
                                    <img src="{{ $testimonial->image }}" alt="testimonial picture">
                                </div>
                                <div class="text1 mt-3">
                                    <p class="testimonial_name">{{ $testimonial->client_name }}</p>
                                    <p class="info text-red">{{ $testimonial->position }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials -->


    <!-- Start Client -->
    <section class="bg-light-black" id="client" dir="{{ App::isLocale('ar') ? 'ltr' : 'ltr' }}">
        <h2 class="d-none">hidden</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--Client Slider-->
                    <div class="owl-carousel partners-slider">

                        @foreach ($clients as $client)
                            <!--Item-->
                            <div class="logo-item"><img alt="client-logo" src="{{ $client->image }}"></div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Client End -->


    <!-- Start Map -->
    <div class="p-0 bg-light-black map-area">
        <div class="container">
            <!--Map Initialize-->
            <div class="full-map" id="map"></div>
        </div>
    </div>
    <!-- End Map -->
