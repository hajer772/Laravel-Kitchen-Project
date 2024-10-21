
<!-- JavaScript -->
<!-- Plugin Js -->


<!-- CUSTOM JS -->

@if (app()->getLocale() == 'ar')
<script src="{{ asset('front-assets/vendor/js/bundle.min.ar.js') }}"></script>
<script src="{{ asset('front-assets/vendor/js/jquery.appear.ar.js') }}"></script>
<script src="{{ asset('front-assets/vendor/js/jquery.fancybox.min.ar.js') }}"></script>
<script src="{{ asset('front-assets/vendor/js/jquery.cubeportfolio.min.ar.js') }}"></script>
<script src="{{ asset('front-assets/vendor/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front-assets/js/script.ar.js') }}"></script>

@else

<script src="{{ asset('front-assets/vendor/js/bundle.min.js') }}"></script>
<script src="{{ asset('front-assets/vendor/js/jquery.appear.js') }}"></script>
<script src="{{ asset('front-assets/vendor/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('front-assets/vendor/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('front-assets/vendor/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front-assets/js/script.js') }}"></script>

@endif

<script src="{{ asset('front-assets/vendor/js/morphext.min.js') }}"></script>

<!-- Map JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4fusEY9kSwNHgtK8KOgyoTsyP5Tb2NXo"></script>
<script src="{{ asset('front-assets/js/map.js') }}"></script>

<script src="{{ asset('front-assets/vendor/js/wow.min.js') }}"></script>
<script src="{{ asset('front-assets/vendor/js/contact_us.js') }}"></script>
