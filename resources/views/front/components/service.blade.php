    <!-- Some Services -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="sync2" class="owl-carousel owl-theme services-slider wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="1.5s">
                    @foreach ($sliders as $slider)
                        <div class="item">
                            <div class="service-box">
                                <span><i class="{{ $slider->icon }}"></i></span>
                                <h4 class="my-3">{{ $slider->title }}</h4>
                                <p>{{ $slider->description }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="service-image">
            <img src="{{ asset('front-assets/images/service.jpg') }}" alt="Service">
        </div>
    </div>
    <!-- Some Services -->
