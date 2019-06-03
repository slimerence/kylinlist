@extends(_get_frontend_layout_path('temp'))

@section('content')

    <!--Breadcrumb-->
    <div>
        <div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">Contact Us</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Breadcrumb-->

    <!--Contact-->
    <div class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-12 mx-auto d-block">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name1" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
                            </div>
                            <a href="#" class="btn btn-primary">Send Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact-->

    <!--Statistics-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1>Contact Info</h1>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="support">
                <div class="row text-white">
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="support-service bg-primary br-2 mb-4 mb-xl-0">
                            <i class="fa fa-phone"></i>
                            <h6>+68 872-627-9735</h6>
                            <P>Free Support!</P>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="support-service bg-pink br-2 mb-4 mb-xl-0">
                            <i class="fa fa-clock-o"></i>
                            <h6>Mon-Sat(10:00-19:00)</h6>
                            <p>Working Hours!</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12  col-md-12">
                        <div class="support-service bg-warning br-2">
                            <i class="fa fa-envelope-o"></i>
                            <h6>yourdomain@gmail.com</h6>
                            <p>Support us!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Statistics-->

    @include('frontend.sections.news_letter')
@endsection
