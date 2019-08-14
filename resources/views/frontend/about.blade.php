@extends(_get_frontend_layout_path('temp'))

@section('content')
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg" style="background: url('assets/images/banners/banner2.jpg') center center;">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">About Us</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--section-->
    <section class="sptb">
        <div class="container">
            <div class="text-justify">
                <h1 class="mb-4 text-center">关于麒麟榜</h1>
                <p class="leading-normal">麒麟榜是一个创新的B2B平台，我们联合澳洲每个领域的优质供应商，用最精准的中文把产品和服务全面展示给中国市场，并提供信用验证和中文客服沟通。</p>
                <p class="leading-normal mb-0">“麒，仁兽也，麋身牛尾一角；麐（麟），牝麒也。”我们用麒麟之名实质是取“麒麟含仁怀义”之意。麒麟榜以“含仁怀义”之理念把澳洲每一个行业最优秀的供应商，用中国的文化和文字语言展现在中国的采购商面前 。
                </p>
                <p class="leading-normal">我们创立麒麟榜的初衷，在于我们意识到中国市场上的澳洲品牌良莠不齐，且很多澳洲优质的企业产品和服务并没有得到如实的宣传。
                </p>
                <p class="leading-normal">不同于其他平台，我们奉行“实事求是、严格流程、精心挑选、诚信服务”的原则，确保每个供应商在质量和服务检验上统一标准，在榜上排名位置完全按照自然搜索排名结果原则。即便是在广告位置陈列公司也必须经过所有资格验证。我们的目的一是使得麒麟榜成为一个独立公正的第三方平台，为中国采购商提供甄选并联络澳洲供应商的绝佳平台；二是为澳洲的企业提供一个面向中国市场的公平展示平台，并把营销和沟通成本降至最低。
                </p>

            </div>
        </div>
    </section>
    <!--/section-->

    <!--section-->
    <section class="sptb">
        <div class="container">
            <div class="text-justify">
                <h2 class="mb-4 text-center">麒麟服务</h2>
                <p class="leading-normal">麒麟榜当前提供的服务有两类：澳洲产品和澳洲服务业供应商的线上搜索，以及包括翻译和行程安排在内的澳洲供应商线下会面活动安排。</p>

            </div>
        </div>
    </section>
    <!--/section-->

    <!--How to work-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1>How It Works?</h1>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-pink-transparent icon-bg icon-service text-pink">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Register</h4>
                                    <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-lg-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-purple-transparent icon-bg icon-service text-purple">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Create Account</h4>
                                    <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="mb-sm-0 mb-4">
                            <div class="service-card text-center">
                                <div class="bg-warning-transparent icon-bg icon-service text-warning">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Add Posts</h4>
                                    <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="">
                        <div class="">
                            <div class="service-card text-center">
                                <div class="bg-pink-transparent icon-bg icon-service text-pink">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                <div class="servic-data mt-3">
                                    <h4 class="font-weight-semibold mb-2">Get Earnings</h4>
                                    <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/How to work-->

    <!--post section-->
    <section>
        <div class="cover-image sptb bg-background-color" data-image-src="../assets/images/banners/banner4.jpg">
            <div class="content-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="mb-2">Are you ready for the posting you ads on this Site?</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="mt-5">
                            <a href="ad-posts.html" class="btn btn-pink btn-pill">Free Post Ad</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/post section-->

    <!--section-->
    <section class="sptb">
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
    <!--/section-->

    <!--Statistics-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="statistics-info text-dark">
                <div class="row text-center">

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-status mb-6 mb-lg-0">
                            <div class="counter-icon">
                                <i class="si si-people"></i>
                            </div>
                            <h5>Clients</h5>
                            <h2 class="counter mb-0">2569</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-status mb-6 mb-lg-0">
                            <div class="counter-icon">
                                <i class="si si-rocket"></i>
                            </div>
                            <h5>Total Sales</h5>
                            <h2 class="counter mb-0">1765</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-status mb-6 mb-sm-0">
                            <div class="counter-icon">
                                <i class="si si-docs"></i>
                            </div>
                            <h5>Total Projects</h5>
                            <h2 class="counter mb-0">846</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-status">
                            <div class="counter-icon">
                                <i class="si si-emotsmile"></i>
                            </div>
                            <h5>Happy Customers</h5>
                            <h2 class="counter mb-0">7253</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Statistics-->


    @include('frontend.sections.news_letter')
@endsection
