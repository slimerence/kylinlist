@extends(_get_frontend_layout_path('blank'))

@section('content')
    <!--Page-->
    <div class="page ">
        <div class="page-content z-index-10">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 col-xl-7 d-block mx-auto" >
                        <div class="card br-7 p-6 mb-0">

                            <h3 class="mb-0 text-center font-weight-bold display-5">Under Maintenance</h3>
                            <div class="countdown-timer-wrapper">
                                <div class="timer" id="countdown"></div>
                            </div>

                            <p class="mb-5 font-weight-normal">This Service is unavailable at this moment. We are busy to upgrading and currently working with New features
                            </p>

                            <div class="input-group mb-5">
                                <input type="text" class="form-control" placeholder="subscribe">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-pink">Subscribe</button>
                                </div>
                            </div>
                            <h4 class="mb-0"><strong>Contact:</strong><a href="#">Pinlist@demo.com</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Page-->
@endsection
