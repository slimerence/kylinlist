<!doctype html>
<html lang="en" dir="ltr">
@include('backend.layouts.head')
<body class="app sidebar-mini">
<div id="loading"></div>
<div class="page">
    <div class="page-main">
        @include('backend.layouts.elements.top')
        @include('backend.layouts.elements.menu')
        @yield('content')
    </div>

    <!--footer-->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                    Copyright © 2019 <a href="{{ url('/') }}">Kylinlist</a>. Designed by <a href="https://kongfuseo.com.au/">Kongfuseo</a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer-->
</div>
<!-- Back to top -->
<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

@include('backend.layouts.js')
@yield('js')
</body>
</html>
