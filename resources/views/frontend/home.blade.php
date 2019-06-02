@extends(_get_frontend_layout_path('temp'))

@section('content')

    @include('frontend.sections.search')
    @include('frontend.sections.sliders')
    @include('frontend.sections.postrequest')
    @include('frontend.sections.trendingproducts')
    @include('frontend.sections.partner')
    @include('frontend.sections.ourservices')

<!--Testimonials-->
<section class="sptb">
    <div class="container">
        <div class="section-title center-block text-center">
            <h1>Testimonials</h1>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                    @for($i=0;$i<3;$i++)
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <div class="testimonia-img mx-auto mb-3">
                                            <img src="../assets/images/faces/female/11.jpg" class="img-thumbnail rounded-circle alt=" alt="">
                                        </div>
                                        <p>
                                            <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam.
                                        </p>
                                        <div class="testimonia-data">
                                            <h4 class="fs-20 mb-1">Heather Bell</h4>
                                            <div class="rating-stars">
                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="{{ 5-$i }}">
                                                <div class="rating-stars-container">
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-star sm">
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Testimonials-->

<!--App Store-->
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title center-block text-center">
            <h1>Available on App store</h1>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="center-block text-center app-btn">
                    <a href="#" class="btn btn-lg  btn-info"><i class="fa fa-windows fa-1x"></i> Windows Store</a>
                    <a href="#" class="btn btn-lg btn-primary"><i class="fa fa-apple fa-1x"></i> Apple Store</a>
                    <a href="#" class="btn btn-lg btn-pink"><i class="fa fa-android fa-1x"></i> Android Store</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/App Store-->


<!--Newsletter-->
<section class="sptb bg-white border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-xl-6 col-md-12">
                <div class="sub-newsletter">
                    <h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Newsletter</h3>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
            </div>
            <div class="col-lg-5 col-xl-6 col-md-12">
                <div class="input-group sub-input mt-1">
                    <input type="text" class="form-control input-lg " placeholder="Enter your Email">
                    <div class="input-group-append ">
                        <button type="button" class="btn btn-primary btn-lg br-tr-7 br-br-7">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Newsletter-->
@endsection
