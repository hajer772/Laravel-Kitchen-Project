
<!-- Start Inner Page -->
<section class="main" id="main">
    <!-- Content -->
    <div class="blog-content">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- Start Heading Section -->
                    <div class="standalone-detail">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                <p class="sub-heading text-center text-blue">Most flexible one page</p>
                                <h1 class="heading">StandAlone Page</h1>
                                <p class="para_text m-auto">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="standalone-area">

                        @php
                            $counter = 0;
                            
                        @endphp

                        @foreach ($contentInnerPages as $contentInnerPage)
                            @php
                                $counter++;
                            @endphp
                            <div class="row standalone-row align-items-center no-gutters">
                                <div class="col-lg-6 {{ $counter === 2 ? 'order-lg-2' : '' }}">
                                    <div
                                        class="blog-image wow hover-effect {{ $counter == 2 ? 'fadeInRight' : 'fadeInLeft' }} text-center {{ $counter == 2 ? 'text-lg-right' : 'text-lg-left' }}">
                                        <img src="{{ $contentInnerPage->image }}" alt="image"
                                            style="width: 500px !important; height: 500px !important">
                                    </div>
                                </div>
                                <div class="col-lg-6 stand-img-des">
                                    <div class="d-inline-block">
                                        <p class="sub-heading text-center ">
                                            {{ $contentInnerPage->subtitle }}</p>
                                        <h2 class="heading-text">{{ $contentInnerPage->title }}</h2>
                                        <p class="para_text">{{ $contentInnerPage->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End Heading Section -->

        
                    </div>
                    <!-- End Heading Section -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Inner Page -->