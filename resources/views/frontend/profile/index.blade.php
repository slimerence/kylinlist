@extends(_get_frontend_layout_path('temp'))

@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">UserProfile</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"> UserProfile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--User Profile-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="wideget-user">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="wideget-user-desc">
                                            <div class="wideget-user-img">
                                                <img class="brround" src="{{ asset('images/others/portrait02.jpg') }}" alt="img">
                                            </div>
                                            <div class="user-wrap wideget-user-info">
                                                <a href="#" class="text-dark"><h4 class="font-weight-semibold">Hunt He</h4></a>
                                                <h6 class="text-muted mb-3"><span class="text-dark">Member Since : </span> November 2018</h6>
                                                <div class="wideget-user-rating">
                                                    <a href="#"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="#"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="#"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="#"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="#"><i class="fa fa-star-o text-warning mr-1"></i></a> <span>5 (3876 Reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="wideget-user-info widget-info-right mt-5 ">
                                            <div class="wideget-user-btn">
                                                <a href="#" class="btn btn-success mb-1"><i class="fa fa-rss"></i> Follow</a>
                                                <a href="#" class="btn btn-purple mb-1"><i class="fa fa-share-alt"></i> Share</a>
                                                <a href="#" class="btn btn-info mb-1"><i class="fa fa-envelope"></i> E-mail</a>
                                            </div>
                                            <div class="wideget-user-icons mt-2">
                                                <a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                                <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="wideget-user-tab">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <ul class="nav">
                                            <li class=""><a href="#tab-5" class="active" data-toggle="tab">Profile</a></li>
                                            <li><a href="#tab-6" data-toggle="tab" class="">Edit Profile</a></li>
                                            <li><a href="#tab-7" data-toggle="tab" class="">My Ads <span class="badge badge-primary badge-pill">20</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="border-0">
                                <div class="tab-content">
                                    @include('frontend.profile.elements.profile')
                                    @include('frontend.profile.elements.edit_profile')
                                    @include('frontend.profile.elements.my_ads')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.sections.news_letter')
@endsection
