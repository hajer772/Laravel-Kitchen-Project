<!-- Start Footer Section -->
<footer class="standalone-footer bg-light">
    <div class="container">
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
                <p class="company-about fadeIn">&copy; {{ __("words.love_made") }} <a
                    href="javascript:void(0);">{{ __("words.theme") }}</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->