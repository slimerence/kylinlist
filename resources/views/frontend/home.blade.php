@extends(_get_frontend_layout_path('temp'))

@section('content')
    @include('frontend.sections.search')
    @include('frontend.sections.sliders')
    @include('frontend.sections.postrequest')
    @include('frontend.sections.featured')

<!--Categories-->
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title center-block text-center">
            <h1>Categories</h1>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="item-all-cat center-block text-center">
            <div class="row">
                <div class="col-lg-2 col-md-4">
                    <div class="item-all-card text-dark text-center">
                        <a href="business-list.html"></a>
                        <div class="iteam-all-icon">
                            <img src="../assets/images/products/business2/hotel.png" class="imag-service" alt="Hotel">
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0 text-body">Hotel</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="item-all-card text-dark text-center">
                        <a href="business-list.html"></a>
                        <div class="iteam-all-icon">
                            <img src="../assets/images/products/business2/shopping-bag.png" class="imag-service" alt="Shop & Store">
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0 text-body">Shop & Store</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="item-all-card text-dark text-center">
                        <a href="business-list.html"></a>
                        <div class="iteam-all-icon">
                            <img src="../assets/images/products/business2/woman.png" class="imag-service" alt="Gym">
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0 text-body">Gym</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="item-all-card text-dark text-center">
                        <a href="business-list.html"></a>
                        <div class="iteam-all-icon">
                            <img src="../assets/images/products/business2/coffee-cup.png" class="imag-service" alt="Cafe">
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0 text-body">Cafe</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="item-all-card text-dark text-center">
                        <a href="business-list.html"></a>
                        <div class="iteam-all-icon">
                            <img src="../assets/images/products/business2/airplane.png" class="imag-service" alt="Tours & Travels">
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0 text-body">Tours & Travels</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="item-all-card text-dark text-center">
                        <a href="business-list.html"></a>
                        <div class="iteam-all-icon">
                            <img src="../assets/images/products/business2/dish.png" class="imag-service" alt="Restaurant">
                        </div>
                        <div class="item-all-text mt-3">
                            <h5 class="mb-0 text-body">Restaurant</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <a href="#" class="btn btn-primary">View More</a>
            </div>
        </div>
    </div>
</section>
<!--/Categories-->

<!--Featured Locations-->
<section class="sptb">
    <div class="container">
        <div class="section-title center-block text-center">
            <h1>Featured Locations</h1>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="row business-item">
            <div class="col-xl-4  col-md-12">
                <div class="card overflow-hidden">
                    <div class="item-card">
                        <div class="item-card-desc">
                            <a href="#"></a>
                            <div class="item-card-img">
                                <img src="../assets/images/products/business/hotel.png" alt="img" class="br-tr-7 br-tl-7">
                            </div>
                            <div class="item-card-text">
                                <h4 class="mb-3">Hotels</h4>
                                <button class="btn btn-pink btn-pill">57 Locations</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card overflow-hidden">
                    <div class="item-card">
                        <div class="item-card-desc">
                            <a href="#"></a>
                            <div class="item-card-img">
                                <img src="../assets/images/products/business/cafe.png" alt="img" class="br-tr-7 br-tl-7">
                            </div>
                            <div class="item-card-text">
                                <h4 class="mb-3">Cafe </h4>
                                <button class="btn btn-info btn-pill">48 Locations</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4  col-md-12">
                <div class="card overflow-hidden">
                    <div class="item-card">
                        <div class="item-card-desc">
                            <a href="#"></a>
                            <div class="item-card-img">
                                <img src="../assets/images/products/business/gym.png" alt="img" class="br-tr-7 br-tl-7">
                            </div>
                            <div class="item-card-text">
                                <h4 class="mb-3">Gym</h4>
                                <button class="btn btn-success btn-pill">58 Locations</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4  col-md-12">
                <div class="card mb-xl-0 overflow-hidden">
                    <div class="item-card">
                        <div class="item-card-desc">
                            <a href="#"></a>
                            <div class="item-card-img">
                                <img src="../assets/images/products/business/tours.png" alt="img" class="br-tr-7 br-tl-7">
                            </div>
                            <div class="item-card-text">
                                <h4 class="mb-3">Tour & Travels</h4>
                                <button class="btn btn-danger btn-pill">23 Locations</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card mb-xl-0 overflow-hidden">
                    <div class="item-card">
                        <div class="item-card-desc">
                            <a href="#"></a>
                            <div class="item-card-img">
                                <img src="../assets/images/products/business/shop.png" alt="img" class="br-tr-7 br-tl-7">
                            </div>
                            <div class="item-card-text">
                                <h4 class="mb-3">Shop & Store </h4>
                                <button class="btn btn-warning btn-pill">48 Locations</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4  col-md-12">
                <div class="card mb-0 overflow-hidden">
                    <div class="item-card ">
                        <div class="item-card-desc">
                            <a href="#"></a>
                            <div class="item-card-img">
                                <img src="../assets/images/products/business/restaurent.png" alt="img" class="br-tr-7 br-tl-7">
                            </div>
                            <div class="item-card-text">
                                <h4 class="mb-3">Restaurant</h4>
                                <button class="btn btn-primary btn-pill">33 Locations</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Featured Locations-->
@include('frontend.sections.latestad')

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

<!--Blogs-->
<section class="sptb">
    <div class="container">
        <div class="section-title center-block text-center">
            <h1>News</h1>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">
            @for($i=0;$i<5;$i++)
                <div class="item">
                    <div class="card mb-0">
                        <div class="item7-card-img">
                            <a href="#"></a>
                            <img src="../assets/images/products/products/j2.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="card-body p-4">
                            <div class="item7-card-desc d-flex mb-2">
                                <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2018</a>
                                <div class="ml-auto">
                                    <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
                                </div>
                            </div>
                            <a href="blog-details.html" class="text-dark"><h4 class="fs-20">Sed ut perspiciatis unde iste</h4></a>
                            <p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
                            <div class="d-flex align-items-center pt-2 mt-auto">
                                <img src="../assets/images/faces/male/7.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                                <div>
                                    <a href="profile.html" class="text-default">Tanner Mallari</a>
                                    <small class="d-block text-muted">2 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
<!--/Blogs-->

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
