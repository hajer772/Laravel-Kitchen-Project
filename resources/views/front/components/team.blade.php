
<!-- Start Testimonials -->
<section class="our-clients" id="testimonials" dir="{{ App::isLocale('ar') ? 'ltr' : 'ltr' }}">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-duration="1.5s">
            <div class="col-12 text-center">
                <div class="heading-area">

                    <h3 class="heading main-font">Our Team </h3>
                </div>
            </div>
            <div class="testimonial-owl owl-testimonial owl-carousel owl-theme">
                @foreach ($teams as $team)
                <div class="team-member">
                    <div class="team-member-image">
                        <img src="{{ $team->image }}" class="team-image-wrapper">
                    </div>
                    <div class="team-member-info">
                        <p class="name">
                            {{ $team->team_name }}
                        </p>
                        <p class="position">
                            {{ $team->position }}
                        </p>
                    </div>
                </div>
            @endforeach


            </div>
        </div>
    </div>
</section>
<!-- End Testimonials -->
