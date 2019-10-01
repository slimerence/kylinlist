@extends('frontend.layouts.temp')

@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="/assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">Register</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--Register-section-->
    <section class="sptb">
        <div class="container customerpage">
            <div class="row ">
                <div class="col-lg-4 d-block mx-auto">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-md-12">
                            <div class="card mb-xl-0">
                                <div class="card-header">
                                    <h3 class="card-title">Register</h3>
                                </div>
                                <div class="card-body">
                                    @include('frontend.customer.plugin.fast_login')
                                    <form method="post" action="{{ url('user/register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="buyerEmail" class="form-label text-dark">Email address</label>
                                            <input type="email" class="form-control" name="user[email]" id="buyerEmail" placeholder="Enter email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="buyerPassword1" class="form-label text-dark">Password</label>
                                            <input type="password" class="form-control" name="user[password]" id="buyerPassword1" placeholder="Password" required>
                                        </div>
                                        <hr class="divider">
                                        <div class="form-group">
                                            <label class="form-label text-dark" for="buyerName">Name</label>
                                            <input type="text" class="form-control" name="user[name]" id="buyerName" placeholder="Enter name" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" required>
                                                <span class="custom-control-label text-dark">Agree the <a href="{{ url('terms') }}">terms and policy</a></span>
                                            </label>
                                        </div>
                                        <div class="form-footer mt-2">
                                            <button type="submit" class="btn btn-primary btn-block">Create New Account</button>
                                        </div>
                                        <div class="text-center  mt-3 text-dark">
                                            Already have account?<a href="{{ url('user/login') }}">SignIn</a>
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
    <!--Register-section-->

@endsection
