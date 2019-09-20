<!doctype html>
<html lang="en" dir="ltr">
@include(_get_frontend_layout_path('_head'))
<body>
<!--Loader-->
<div id="loading"></div>

@include(_get_frontend_layout_path('_header'))

@yield('content')

@include(_get_frontend_layout_path('_footer'))

<!-- Back to top -->
<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>
@include(_get_frontend_layout_path('js'))

@yield('js')
</body>
</html>
