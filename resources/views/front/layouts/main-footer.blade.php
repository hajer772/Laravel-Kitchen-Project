<!-- Start Footer -->
<footer >
    <div class="container footer-style-1 bg-light">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-md-6">
                <div class="footer-social">
                    <ul class="list-unstyled">
                        @foreach ($contacts as $contact)
                            <li><a class="wow fadeInUp" href="{{ $contact->contact }}" target="_blank"><i aria-hidden="true"
                                        class="{{ $contact->icon }}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Text-->
            <div class="col-md-6 text-md-right">
                <p class="company-about fadeIn pr-0 pr-md-1">&copy; {{ __("words.love_made") }} <a
                    href="javascript:void(0);">{{ __("words.theme") }}</a></p>
            </div>
        </div>
       
    </div>
    <div class="developed-footer-style company-about bg-dark text-white">
        <p>Designed & Developed by Marwan Group &copy; 2024</p>
    </div>
</footer>

<!-- End Footer -->
