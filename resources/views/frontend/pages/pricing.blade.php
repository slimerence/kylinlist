@extends(_get_frontend_layout_path('temp'))

@section('content')

    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">Pricing</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Pricing</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->


    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1>Why Choose Us?</h1>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="row ">
                <div class="col-md-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-success mb-3">
                                    <i class="fa fa-bullhorn  text-white"></i>
                                </div>
                                <h3>Provide Free Ads</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-primary mb-3">
                                    <i class="fa fa-heart  text-white"></i>
                                </div>
                                <h3>Best Ad Ratings</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 features">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-pink mb-3">
                                    <i class="fa fa-bookmark  text-white"></i>
                                </div>
                                <h3>Provide Post Features</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 features">
                    <div class="card mb-lg-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-warning mb-3">
                                    <i class="fa fa-line-chart   text-white"></i>
                                </div>
                                <h3>See  your Ad Progress</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 features">
                    <div class="card mb-lg-0 mb-md-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-danger mb-3">
                                    <i class="fa fa-handshake-o   text-white"></i>
                                </div>
                                <h3>User Friendly</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 features">
                    <div class="card mb-0">
                        <div class="card-body text-center">
                            <div class="feature">
                                <div class="fa-stack fa-lg  fea-icon bg-info mb-3">
                                    <i class="fa fa-phone  text-white"></i>
                                </div>
                                <h3>24/7 Support</h3>
                                <p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.sections.pricing_table')
    @include('frontend.sections.news_letter')
@endsection
