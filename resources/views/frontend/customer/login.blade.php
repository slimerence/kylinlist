@extends('frontend.layouts.temp')

@section('content')
    <!--Sliders Section-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="/assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">Login</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Sliders Section-->

    <!--Login-Section-->
    <section class="sptb">
        <div class="container customerpage">
            <div class="row">
                <div class="col-lg-4 d-block mx-auto">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-md-12">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <h3 class="card-title">Login to your Account</h3>
                                </div>
                                <div class="card-body">
                                    @include('frontend.customer.plugin.fast_login')
                                    <form method="post" action="{{ url('user/login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="buyerEmail">Email address</label>
                                            <input type="email" id="buyerEmail" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Enter email" required>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="buyerPassword1">Password</label>
                                            <input type="password" class="form-control  {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="buyerPassword1" placeholder="Password" required>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <a href="{{ url('user/forget-password') }}" class="float-right small text-dark mt-1">I forgot password</a>
                                                <input type="checkbox" class="custom-control-input" name="remember">
                                                <span class="custom-control-label text-dark">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="form-footer mt-2">
                                            <button type="submit" class="btn btn-primary btn-block">SignIn</button>
                                        </div>
                                        <div class="text-center mt-3 text-dark">
                                            Don't have account yet? <a href="{{ url('user/register') }}">SignUp</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Login-Section-->
@endsection
