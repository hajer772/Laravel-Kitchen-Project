<!-- Start Footer Section -->
<footer >
    <div class="container standalone-footer bg-light">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-12 text-center">
                <div class="footer-social stand">
                    <ul class="list-unstyled social-icons social-icons-simple">
                        @foreach ($contacts as $contact)
                        <li><a class="wow fadeInUp" href="{{ $contact->contact }}" target="_blank"><i aria-hidden="true"
                                    class="{{ $contact->icon }}"></i></a></li>
                    @endforeach
                        {{-- <li><a class="social-icon wow fadeInUp" href="javascript:void(0)"><i class="fab fa-facebook-f" aria-hidden="true"></i> </a> </li>
                        <li><a class="social-icon wow fadeInDown" href="javascript:void(0)"><i class="fab fa-twitter" aria-hidden="true"></i> </a> </li>
                        <li><a class="social-icon wow fadeInUp" href="javascript:void(0)"><i class="fab fa-google-plus-g" aria-hidden="true"></i> </a> </li>
                        <li><a class="social-icon wow fadeInDown" href="javascript:void(0)"><i class="fab fa-linkedin-in" aria-hidden="true"></i> </a> </li>
                        <li><a class="social-icon wow fadeInUp" href="javascript:void(0)"><i class="fab fa-instagram" aria-hidden="true"></i> </a> </li>
                        <li><a class="social-icon wow fadeInUp" href="javascript:void(0)"><i class="fab fa-pinterest-p" aria-hidden="true"></i> </a> </li> --}}
                    </ul>
                </div>
                <!--Text-->
                <p class="company-about fadeIn"> {{ __("words.footer-website") }} &copy; 2024</p>
            </div>
        </div>
    </div>

    <div class="developed-footer-style company-about bg-dark text-white">
        <p>{{ __("words.footer-developer") }} &copy; 2024</p>
    </div>
</footer>
<!-- End Footer Section -->