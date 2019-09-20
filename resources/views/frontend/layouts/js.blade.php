<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="{{ asset('js/vendor.js') }}"></script>

<!--JQuery Sparkline Js-->
<script src="/assets/js/vendors/jquery.sparkline.min.js"></script>

<!-- Circle Progress Js-->
<script src="/assets/js/vendors/circle-progress.min.js"></script>

<!-- Star Rating Js-->
<script src="/assets/plugins/rating/jquery.rating-stars.js"></script>

<!--Owl Carousel js -->
<script src="/assets/plugins/owl-carousel/owl.carousel.js"></script>

<!--Horizontal Menu-->
<script src="/assets/plugins/Horizontal2/Horizontal-menu/horizontal.js"></script>

<!--Counters -->
<script src="/assets/plugins/counters/counterup.min.js"></script>
<script src="/assets/plugins/counters/waypoints.min.js"></script>

<!--Counters -->
<script src="/assets/plugins/count-down/countdown-timer.js"></script>
<script src="/assets/plugins/count-down/countdown.js"></script>

<!--JQuery TouchSwipe js-->
<script src="/assets/js/jquery.touchSwipe.min.js"></script>

@if(isset($googlemap))
    <!-- Google Maps Plugin -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA1k0eloyEVCHACaBc1QVVULyu2inbDHg&callback=initMap" type="text/javascript"></script>
    <script src="/assets/plugins/maps-google/jquery.googlemap.js"></script>
    <script src="/assets/plugins/maps-google/map.js"></script>
@endif

<!--Select2 js -->
<script src="/assets/plugins/select2/select2.full.min.js"></script>
<script src="/assets/js/select2.js"></script>

@if(isset($sidemenu))
<!-- Fullside-menu Js-->
<script src="/assets/plugins/toggle-sidebar/sidemenu.js"></script>
@endif

<!---Tabs JS-->
<script src="/assets/plugins/tabs/jquery.multipurpose_tabcontent.js"></script>
<script src="/assets/js/tabs.js"></script>


<!-- Cookie js -->
<script src="/assets/plugins/cookie/jquery.ihavecookies.js"></script>
<script src="/assets/plugins/cookie/cookie.js"></script>

@if(isset($zoomjs))
    <!--Zoom js -->
    <script src="/assets/plugins/ecomerce/jquery.exzoom.js"></script>
    <script src="/assets/plugins/ecomerce/exzoom.js"></script>
@endif

<!-- Form wizard js -->
<script src="/assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<script src="/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/assets/js/wizard.js"></script>

<!-- Count Down-->
<script src="/assets/plugins/count-down/jquery.lwtCountdown-1.0.js"></script>

<!-- Custom scroll bar Js-->
<script src="/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Swipe Js-->
<script src="/assets/js/swipe.js"></script>

<!-- Typewritter Js-->
<script src="/assets/js/typewritter.js"></script>

<!-- Custom Js-->
<script src="/assets/js/custom.js"></script>
