    <!-- Start About -->
    <section class="about" id="about">
        <div class="container">
            <!--Heading-->
            <div class="row text-center">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 wow zoomIn heading-area"
                    data-wow-duration="1s" data-wow-delay=".1s">
                    <h3 class="heading text-center">We are World’s Leading <span class="d-block"> Kitchen
                            Designers</span></h3>
                    <p class="text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                </div>
            </div>
            <!-- App Detail -->
            <div class="row align-items-center">

                @php
                    $count = 0;
                @endphp
                @foreach ($services as $service)
                    @php
                        $count++;
                    @endphp


                    @if ($count === 1)
                        <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    @endif

                    @if ($count === 3)
                        <div class="col-lg-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"></div>
                        <div class="col-lg-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                    @endif
                    <div class="row app-feature equal-margin">
                        <div class="col-12 col-lg-3 p-lg-0">
                            <h5 class="number">{{ $service->number }}</h5>
                        </div>
                        <div class="col-12 col-lg-9 p-lg-0">
                            <h4 class="my-3">{{ $service->title }}</h4>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>

                    @if ($count === 2 || $count === 4)
              </div>
                     @endif
            @endforeach


        </div>
        <!-- Quote Btn -->
        <div class="row text-center">
            <div class="col-12 wow slideInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="quote-btn">
                    <p>Lorem ipsum dolor sit amet</p>
                    <h4>Let us build your kitchen!</h4>
                    <a href="{{ route('standalone') }}" class="btn btn-medium btn-rounded btn-green">Learn
                        More</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End About -->
