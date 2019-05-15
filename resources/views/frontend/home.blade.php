@extends(_get_frontend_layout_path('temp'))

@section('content')

    @include('frontend.sections.search')
    @include('frontend.sections.sliders')
    @include('frontend.sections.postrequest')
    @include('frontend.unused.featured')


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

<!--Latest Ads-->
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title center-block text-center">
            <h1>Latest Ads</h1>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div id="Latest-carousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">

            <div class="item">
                <div class="card mb-0">
                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                    <div class="item-card2-img">
                        <a href="business.html"></a>
                        <img src="../assets/images/products/products/b1.jpg" alt="img" class="cover-image">
                    </div>
                    <div class="item-card2-icons">
                        <a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-paint-brush"></i></a>
                        <a href="#" class="item-card2-icons-r bg-pink"> <i class="fa fa fa-heart-o"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="item-card2">
                            <div class="item-card2-desc">
                                <ul class="d-flex">
                                    <li class=""><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i>Canada</a></li>
                                    <li class=""><a href="#" class="icons"><i class="si si-phone text-muted mr-1"></i> 94 675 65430</a></li>
                                    <li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 12 mins ago</a></li>
                                </ul>
                                <div class="item-card2-text">
                                    <a href="business.html" class="text-dark"><h4 class="fs-20">Model Beaty Spa</h4></a>
                                </div>
                                <p class="">Ut enim ad minima veniam, quis exercitationem ullam corporis suscipit laboriosam</p>
                                <div class="item-card2-rating mb-0">
                                    <div class="rating-stars d-inline-flex" >
                                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
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
                                        </div> (46)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="item-card2-footer">
                            <div class="item-card2-footer-u">
                                <div class="icons text-dark"><i class="si si-user text-muted mr-1"></i>Keith Baker <a href="#" class="ml-1" data-toggle="tooltip" data-placement="top" title="Verified"><i class="si si-check text-success fs-12"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="item-card2-img">
                        <a href="business.html"></a>
                        <img src="../assets/images/products/products/f3.jpg" alt="img" class="cover-image">
                    </div>
                    <div class="item-card2-icons">
                        <a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-cutlery"></i></a>
                        <a href="#" class="item-card2-icons-r bg-pink"> <i class="fa fa fa-heart-o"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="item-card2">
                            <div class="item-card2-desc">
                                <ul class="d-flex">
                                    <li class=""><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i> USA</a></li>
                                    <li class=""><a href="#" class="icons"><i class="si si-phone text-muted mr-1"></i> 14 675 65430</a></li>
                                    <li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 2 mins ago</a></li>
                                </ul>
                                <div class="item-card2-text">
                                    <a href="business.html" class="text-dark"><h4 class="font-weight-semibold">Somik Restaurant</h4></a>
                                </div>
                                <p class="">Ut enim ad minima veniam, quis exercitationem ullam corporis suscipit laboriosam</p>
                                <div class="item-card2-rating mb-0">
                                    <div class="rating-stars d-inline-flex" >
                                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
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
                                        </div> (168)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="item-card2-footer">
                            <div class="item-card2-footer-u">
                                <div class="icons text-dark"><i class="si si-user text-muted mr-1"></i>Steven Wright <a href="#" class="ml-1" data-toggle="tooltip" data-placement="top" title="Verified"><i class="si si-check text-success fs-12"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                    <div class="item-card2-img">
                        <a href="business.html"></a>
                        <img src="../assets/images/products/products/h2.jpg" alt="img" class="cover-image">
                    </div>
                    <div class="item-card2-icons">
                        <a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
                        <a href="#" class="item-card2-icons-r bg-pink"> <i class="fa fa fa-heart-o"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="item-card2">
                            <div class="item-card2-desc">
                                <ul class="d-flex">
                                    <li class=""><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i>UK</a></li>
                                    <li class=""><a href="#" class="icons"><i class="si si-phone text-muted mr-1"></i> 35 675 65430</a></li>
                                    <li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 1 hours ago</a></li>
                                </ul>
                                <div class="item-card2-tetx">
                                    <a href="business.html" class="text-dark"><h4 class="font-weight-semibold">GilkonStar Hotel</h4></a>
                                </div>
                                <p class="">Ut enim ad minima veniam, quis exercitationem ullam corporis suscipit laboriosam</p>
                                <div class="item-card2-rating mb-0">
                                    <div class="rating-stars d-inline-flex" >
                                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
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
                                        </div> (145)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="item-card2-footer">
                            <div class="item-card2-footer-u">
                                <div class="icons text-dark"><i class="si si-user text-muted mr-1"></i>Lauren North <a href="#" class="ml-1" data-toggle="tooltip" data-placement="top" title="Verified"><i class="si si-check text-success fs-12"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                    <div class="item-card2-img">
                        <a href="business.html"></a>
                        <img src="../assets/images/products/products/b2.jpg" alt="img" class="cover-image">
                    </div>
                    <div class="item-card2-icons">
                        <a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-paint-brush"></i></a>
                        <a href="#" class="item-card2-icons-r bg-pink"> <i class="fa fa fa-heart-o"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="item-card2">
                            <div class="item-card2-desc">
                                <ul class="d-flex">
                                    <li class=""><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i> Canada</a></li>
                                    <li class=""><a href="#" class="icons"><i class="si si-phone text-muted mr-1"></i> 78 675 65430</a></li>
                                    <li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 1 min ago</a></li>
                                </ul>
                                <div class="item-card2-text">
                                    <a href="business.html" class="text-dark"><h4 class="font-weight-semibold">Kerope Beauty</h4></a>
                                </div>
                                <p class="">Ut enim ad minima veniam, quis exercitationem ullam corporis suscipit laboriosam</p>
                                <div class="item-card2-rating mb-0">
                                    <div class="rating-stars d-inline-flex" >
                                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
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
                                        </div> (46)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="item-card2-footer">
                            <div class="item-card2-footer-u">
                                <div class="icons text-dark"><i class="si si-user text-muted mr-1"></i> Liam Mathis <a href="#" class="ml-1" data-toggle="tooltip" data-placement="top" title="Verified"><i class="si si-check text-success fs-12"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                    <div class="item-card2-img">
                        <a href="business.html"></a>
                        <img src="../assets/images/products/products/f1.jpg" alt="img" class="cover-image">
                    </div>
                    <div class="item-card2-icons">
                        <a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-cutlery"></i></a>
                        <a href="#" class="item-card2-icons-r bg-pink"><i class="fa fa fa-heart-o"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="item-card2">
                            <div class="item-card2-desc">
                                <ul class="d-flex">
                                    <li class=""><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i> USA</a></li>
                                    <li class=""><a href="#" class="icons"><i class="si si-phone text-muted mr-1"></i> 78 675 65430</a></li>
                                    <li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5 hours ago</a></li>
                                </ul>
                                <div class="item-card2-text">
                                    <a href="business.html" class="text-dark"><h4 class="fs-20">Somik Restaurant</h4></a>
                                </div>
                                <p class="">Ut enim ad minima veniam, quis exercitationem ullam corporis suscipit laboriosam</p>
                                <div class="item-card2-rating mb-0">
                                    <div class="rating-stars d-inline-flex" >
                                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
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
                                        </div> (76)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="item-card2-footer">
                            <div class="item-card2-footer-u">
                                <div class="icons text-dark"><i class="si si-user  text-muted mr-1"></i> Anna Dickens <a href="#" class="ml-1" ><i class="si si-check text-success fs-12" data-toggle="tooltip" data-placement="top" title="Verified"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="item-card2-img">
                        <a href="business.html"></a>
                        <img src="../assets/images/products/products/h4.jpg" alt="img" class="cover-image">
                    </div>
                    <div class="item-card2-icons">
                        <a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
                        <a href="#" class="item-card2-icons-r bg-pink"> <i class="fa fa fa-heart-o"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="item-card2">
                            <div class="item-card2-desc">
                                <ul class="d-flex">
                                    <li class=""><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i> Uk</a></li>
                                    <li class=""><a href="#" class="icons"><i class="si si-phone text-muted mr-1"></i> 78 675 65430</a></li>
                                    <li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5 hours ago</a></li>
                                </ul>
                                <div class="item-card2-text">
                                    <a href="business.html" class="text-dark"><h4 class="fs-20">GilkonStar Hotel</h4></a>
                                </div>
                                <p class="">Ut enim ad minima veniam, quis exercitationem ullam corporis suscipit laboriosam</p>
                                <div class="item-card2-rating mb-0">
                                    <div class="rating-stars d-inline-flex" >
                                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
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
                                        </div> (145)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="item-card2-footer">
                            <div class="item-card2-footer-u">
                                <div class="icons text-dark"><i class="si si-user text-muted mr-1"></i>Sally Peake <a href="#" class="ml-1" data-toggle="tooltip" data-placement="top" title="Verified"><i class="si si-check text-success fs-12"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Latest Ads-->

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
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
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
                    <div class="item text-center">
                        <div class="row">
                            <div class="col-xl-8 col-md-12 d-block mx-auto">
                                <div class="testimonia">
                                    <div class="testimonia-img mx-auto mb-3">
                                        <img src="../assets/images/faces/male/42.jpg" class="img-thumbnail rounded-circle alt=" alt="">
                                    </div>
                                    <p><i class="fa fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore. </p>
                                    <div class="testimonia-data">
                                        <h4 class="fs-20 mb-1">David Blake</h4>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
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
                    <div class="item text-center">
                        <div class="row">
                            <div class="col-xl-8 col-md-12 d-block mx-auto">
                                <div class="testimonia">
                                    <div class="testimonia-img mx-auto mb-3">
                                        <img src="../assets/images/faces/female/20.jpg" class="img-thumbnail rounded-circle alt=" alt="">
                                    </div>
                                    <p><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                    <div class="testimonia-data">
                                        <h4 class="fs-20 mb-1">Sophie Carr</h4>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
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
            <div class="item">
                <div class="card mb-0">
                    <div class="item7-card-img">
                        <a href="#"></a>
                        <img src="../assets/images/products/products/f1.jpg" alt="img" class="cover-image">
                    </div>
                    <div class="card-body p-4">
                        <div class="item7-card-desc d-flex mb-2">
                            <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-03-2018</a>
                            <div class="ml-auto">
                                <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
                            </div>
                        </div>
                        <a href="blog-details.html" class="text-dark"><h4 class="fs-20">Excepteur occaecat cupidatat</h4></a>
                        <p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
                        <div class="d-flex align-items-center pt-2 mt-auto">
                            <img src="../assets/images/faces/male/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                            <div>
                                <a href="profile.html" class="text-default">Joanne Nash</a>
                                <small class="d-block text-muted">1 day ago</small>
                            </div>
                            <div class="ml-auto text-muted">
                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="item">
                <div class="card mb-0">
                    <div class="item7-card-img">
                        <a href="#"></a>
                        <img src="../assets/images/products/products/b2.jpg" alt="img" class="cover-image">
                    </div>
                    <div class="card-body p-4">
                        <div class="item7-card-desc d-flex mb-2">
                            <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-19-2018</a>
                            <div class="ml-auto">
                                <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a>
                            </div>
                        </div>
                        <a href="blog-details.html" class="text-dark"><h4 class="fs-20">At vero eos et accusamus et iusto</h4></a>
                        <p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
                        <div class="d-flex align-items-center pt-2 mt-auto">
                            <img src="../assets/images/faces/female/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                            <div>
                                <a href="profile.html" class="text-default">Aracely Bashore</a>
                                <small class="d-block text-muted">5 days ago</small>
                            </div>
                            <div class="ml-auto text-muted">
                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="item7-card-img">
                        <a href="#"></a>
                        <img src="../assets/images/products/products/f2.jpg" alt="img" class="cover-image">
                    </div>
                    <div class="card-body p-4">
                        <div class="item7-card-desc d-flex mb-2">
                            <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-03-2018</a>
                            <div class="ml-auto">
                                <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
                            </div>
                        </div>
                        <a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Excepteur occaecat cupidatat</h4></a>
                        <p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
                        <div class="d-flex align-items-center pt-2 mt-auto">
                            <img src="../assets/images/faces/male/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                            <div>
                                <a href="profile.html" class="text-default">Royal Hamblin</a>
                                <small class="d-block text-muted">10 days ago</small>
                            </div>
                            <div class="ml-auto text-muted">
                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="item7-card-img">
                        <a href="#"></a>
                        <img src="../assets/images/products/products/j3.jpg" alt="img" class="cover-image">
                    </div>
                    <div class="card-body p-4">
                        <div class="item7-card-desc d-flex mb-2">
                            <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2018</a>
                            <div class="ml-auto">
                                <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
                            </div>
                        </div>
                        <a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Sed ut perspiciatis unde omnis iste</h4></a>
                        <p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
                        <div class="d-flex align-items-center pt-2 mt-auto">
                            <img src="../assets/images/faces/female/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                            <div>
                                <a href="profile.html" class="text-default">Rosita Chatmon</a>
                                <small class="d-block text-muted">10 days ago</small>
                            </div>
                            <div class="ml-auto text-muted">
                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card mb-0">
                    <div class="item7-card-img">
                        <a href="#"></a>
                        <img src="../assets/images/products/products/b3.jpg" alt="img" class="cover-image">
                    </div>
                    <div class="card-body p-4">
                        <div class="item7-card-desc d-flex mb-2">
                            <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-19-2018</a>
                            <div class="ml-auto">
                                <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a>
                            </div>
                        </div>
                        <a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">At vero eos et accusamus et iusto</h4></a>
                        <p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
                        <div class="d-flex align-items-center pt-2 mt-auto">
                            <img src="../assets/images/faces/male/6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                            <div>
                                <a href="profile.html" class="text-default">Loyd Nolf</a>
                                <small class="d-block text-muted">15 days ago</small>
                            </div>
                            <div class="ml-auto text-muted">
                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
