@extends('frontend.layouts.temp')

@section('content')
    <!--Sliders Section-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="/assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">Forgot Password</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Forgot Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Sliders Section-->

    <!--Forgot password-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Forgot password</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label text-dark" for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">Send</button>
                            </div>
                            <div class="text-center text-dark mt-3 ">
                                Forget it, <a href="{{ url('user/login') }}">send me back</a> to the sign in.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Forgot password-->

@endsection
