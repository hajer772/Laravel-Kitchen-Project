<!-- Start Footer -->
<footer class="footer-style-1 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-md-6">
                <div class="footer-social">
                    <ul class="list-unstyled">
                        @foreach ($contacts as $contact)
                            <li><a class="wow fadeInUp" href="{{ $contact->contact }}" target="_blank"><i aria-hidden="true"
                                        class="{{ $contact->icon }}"></i></a></li>
                        @endforeach




                        {{-- <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                    class="fab fa-twitter"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true"
                                    class="fab fa-google-plus-g"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true"
                                    class="fab fa-instagram"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                    class="fab fa-pinterest-p"></i></a></li> --}}
                    </ul>
                </div>
            </div>
            <!--Text-->
            <div class="col-md-6 text-md-right">
                <p class="company-about fadeIn pr-0 pr-md-1">&copy; 2023 MegaOne. Made With Love By <a
                        href="javascript:void(0);">Themesindustry</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
