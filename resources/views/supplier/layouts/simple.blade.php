<!doctype html>
<html lang="en" dir="ltr">
@include('backend.layouts.head')
<body>
<div id="loading"></div>

<!--Page-->
<div class="page ">
    <div class="page-content z-index-10">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
                    <div class="card mb-0">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.layouts.js')
</body>
</html>
