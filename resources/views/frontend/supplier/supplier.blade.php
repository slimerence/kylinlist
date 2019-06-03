@extends(_get_frontend_layout_path('temp'))

@section('content')
    @include('frontend.supplier.elements.search')

    <!--Breadcrumb-->
    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">Business</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Business</li>
                </ol>
            </div>
        </div>
    </div>
    <!--/Breadcrumb-->

    <!--Add listing-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <!--Left Side Content-->
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Posted By</h3>
                        </div>
                        <div class="card-body  item-user">
                            <div class="profile-pic mb-0">
                                <img src="{{ asset('images/others/portrait02.jpg') }}" class="brround avatar-xxl" alt="user">
                                <div class="">
                                    <a href="{{ url('profile') }}" class="text-dark"><h4 class="mt-3 mb-1 font-weight-semibold">Robert McLean</h4></a>
                                    <span class="text-gray">Business Director</span><br>
                                    <span class="text-muted">Member Since November 2008</span>
                                    <h6 class="mt-2 mb-0"><a href="#" class="btn btn-primary btn-sm">See All Ads</a></h6>
                                </div>

                            </div>
                        </div>
                        <div class="card-body item-user">
                            <h4 class="mb-4">Contact Info</h4>
                            <div>
                                <h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-2 mb-2"></i></span><a href="#" class="text-body"> robert123@gmail.com</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-phone mr-2  mb-2"></i></span><a href="#" class="text-primary"> 0-235-657-24587</a></h6>
                                <h6><span class="font-weight-semibold"><i class="fa fa-link mr-2 "></i></span><a href="#" class="text-primary">http://spruko.com/</a></h6>
                            </div>
                            <div class=" item-user-icons mt-4">
                                <a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-left">
                                <a href="#" class="btn  btn-info"><i class="fa fa-envelope"></i> Chat</a>
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Keywords</h3>
                        </div>
                        <div class="card-body product-filter-desc">
                            <div class="product-tags clearfix">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">lifetime Business</a></li>
                                    <li><a href="#">Products</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Shares</h3>
                        </div>
                        <div class="card-body product-filter-desc">
                            <div class="product-filter-icons text-center">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                                <a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Map location</h3>
                        </div>
                        <div class="card-body">
                            <div class="map-header">
                                <div class="map-header-layer" id="map2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Search Ads</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="search-text" placeholder="What are you looking for?">
                            </div>
                            <div class="form-group">
                                <select name="country" id="select-countries" class="form-control custom-select select2-show-search">
                                    <option value="1" selected>All Categories</option>
                                    <option value="2">RealEstate</option>
                                    <option value="3">Restaurant</option>
                                    <option value="4">Beauty</option>
                                    <option value="5">Jobs</option>
                                    <option value="6">Services</option>
                                    <option value="7">Vehicle</option>
                                    <option value="8">Education</option>
                                    <option value="9">Electronics</option>
                                    <option value="10">Pets & Animals</option>
                                    <option value="11">Computer</option>
                                    <option value="12">Mobile</option>
                                    <option value="13">Events</option>
                                    <option value="14">Travel</option>
                                    <option value="15">Clothing</option>
                                </select>
                            </div>
                            <div class="">
                                <a href="#" class="btn  btn-primary">Search</a>
                            </div>
                        </div>
                    </div>
                    @include('frontend.supplier.elements.latest_ads')
                </div>
                <!--/Left Side Content-->

                <div class="col-lg-8 col-md-12">
                    <!--Business Description-->
                    <div class="card overflow-hidden">
                        <div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">featured</span></div>
                        <div class="card-body">
                            <div class="item-det mb-4">
                                <a href="#" class="text-dark"><h3 class="">Globex</h3></a>
                                <div class="d-flex">
                                    <ul class="d-flex">
                                        <li class="mr-5"><a href="#" class="icons"><i class="si si-briefcase text-muted mr-1"></i> Restaurant</a></li>
                                        <li class="mr-5"><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i> USA</a></li>
                                        <li class="mr-5"><a href="#" class="icons"><i class="si si-calendar text-muted mr-1"></i> 5 hours ago</a></li>
                                        <li class="mr-5"><a href="#" class="icons"><i class="si si-eye text-muted mr-1"></i> 765</a></li>
                                    </ul>
                                    <div class="rating-stars d-flex mr-5">
                                        <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" id="rating-stars-value" value="4">
                                        <div class="rating-stars-container mr-2">
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
                                        </div> 4.0
                                    </div>
                                    <div class="rating-stars d-flex">
                                        <div class="rating-stars-container mr-2">
                                            <div class="rating-star sm">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                        </div> 135
                                    </div>
                                </div>
                            </div>
                            <div class="product-slider">
                                <div id="carousel" class="carousel slide" data-ride="carousel">
                                    <div class="arrow-ribbon bg-primary">Open</div>
                                    <div class="carousel-inner">
                                        @for($i=0;$i<6;$i++)
                                            <div class="carousel-item {{ $i==0?'active':'' }}"> <img src="{{ asset('images/products/TP0'.($i%4+1).'.jpg') }}" alt="img"> </div>
                                        @endfor
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                                @if(false)
                                <div class="clearfix">
                                    <div id="thumbcarousel" class="carousel slide" data-interval="false">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="../assets/images/products/f4.png" alt="img"></div>
                                                <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="../assets/images/products/f2.png" alt="img"></div>
                                                <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="../assets/images/products/f3.png" alt="img"></div>
                                                <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="../assets/images/products/f4.png" alt="img"></div>
                                                <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="../assets/images/products/f1.png" alt="img"></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="../assets/images/products/f4.png" alt="img"></div>
                                                <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="../assets/images/products/f2.png" alt="img"></div>
                                                <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="../assets/images/products/f3.png" alt="img"></div>
                                                <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="../assets/images/products/f4.png" alt="img"></div>
                                                <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="../assets/images/products/f1.png" alt="img"></div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </a>
                                        <a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Description</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-0">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                <p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                            </div>
                        </div>
                        <div class="pt-4 pb-4 pl-5 pr-5 border-top">
                            <div class="list-id">
                                <div class="row">
                                    <div class="col">
                                        <a class="mb-0">Business ID : #8562354</a>
                                    </div>
                                    <div class="col col-auto">
                                        Posted By <a class="mb-0 font-weight-bold">Individual</a> / 19th Nov 2018
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="icons">
                                <a href="#" class="btn btn-info icons"><i class="si si-share mr-1"></i> Share Ad</a>
                                <a href="#" class="btn btn-primary icons"><i class="si si-heart  mr-1"></i> 678</a>
                            </div>
                        </div>
                    </div>
                    <!--/Business Description-->

                    <h3 class="mb-5 mt-4">Recommended Products</h3>

                    <!--Related Posts-->
                    <div id="myCarousel5" class="owl-carousel owl-carousel-icons3">
                        <!-- Wrapper for carousel items -->
                        @for($i=0;$i<5;$i++)
                            <div class="item">
                                <div class="card">
                                    <div class="item-card7-imgs">
                                        <span class="bdir label label-primary mb-0">Restaurant</span>
                                        <a href="{{ url('product') }}"></a>
                                        <img src="{{ asset('images/categories/products0'.($i+1).'.jpg') }}" alt="img" class="cover-image">
                                    </div>
                                    <div class="card-body">
                                        <div class="item-card7-desc">
                                            <a href="{{ url('product') }}" class="text-dark"><h4 class="font-weight-semibold">Globex</h4></a>
                                        </div>
                                        <div class="item-card7-text">
                                            <ul class="icon-card mb-0">
                                                <li class=""><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i>  Los Angles</a></li>
                                                <li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5 hours ago</a></li>
                                                <li class="mb-0"><a href="#" class="icons"><i class="si si-user text-muted mr-1"></i> Sally Peake</a></li>
                                                <li class="mb-0"><a href="#" class="icons"><i class="si si-phone text-muted mr-1"></i> 5-67987608</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <!--/Related Posts-->

                    <!--Comments-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Rating And Reviews</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="badge badge-default mb-2">5 <i class="fa fa-star"></i></div>
                                    <div class="progress progress-md mb-4">
                                        <div class="progress-bar bg-success w-100">6,532</div>
                                    </div>
                                    <div class="badge badge-default mb-2">4 <i class="fa fa-star"></i></div>
                                    <div class="progress progress-md mb-4">
                                        <div class="progress-bar bg-primary w-80">7,532</div>
                                    </div>
                                    <div class="badge badge-default mb-2">3 <i class="fa fa-star"></i></div>
                                    <div class="progress progress-md mb-4">
                                        <div class="progress-bar bg-info w-60">3,526</div>
                                    </div>
                                    <div class="badge badge-default mb-2">2 <i class="fa fa-star"></i></div>
                                    <div class="progress progress-md mb-4">
                                        <div class="progress-bar bg-warning w-60">485</div>
                                    </div>
                                    <div class="badge badge-default mb-2">1 <i class="fa fa-star"></i></div>
                                    <div class="progress progress-md mb-0">
                                        <div class="progress-bar bg-danger w-20">126</div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-center align-items-center">

                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="media mt-0 p-5">
                                <div class="d-flex mr-3">
                                    <a href="#"><img class="media-object brround" alt="64x64" src="../assets/images/faces/male/1.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
                                        <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
                                        <span class="fs-14 ml-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
                                    </h5>
                                    <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 13.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>
                                    <p class="font-13  mb-2 mt-2">
                                        Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
                                    </p>
                                    <a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>
                                    <a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span class="">Comment</span></a>
                                    <a href="" class="mr-2" data-toggle="modal" data-target="#report"><span class="">Report</span></a>
                                    <div class="media mt-5">
                                        <div class="d-flex mr-3">
                                            <a href="#"> <img class="media-object brround" alt="64x64" src="../assets/images/faces/female/2.jpg"> </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h5>
                                            <small class="text-muted"><i class="fa fa-calendar"></i> Dec 22st  <i class=" ml-3 fa fa-clock-o"></i> 6.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>
                                            <p class="font-13  mb-2 mt-2">
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris   commodo Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur consequat.
                                            </p>
                                            <a href="" data-toggle="modal" data-target="#Comment"><span class="badge badge-default">Comment</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media p-5 border-top mt-0">
                                <div class="d-flex mr-3">
                                    <a href="#"> <img class="media-object brround" alt="64x64" src="../assets/images/faces/male/3.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1 font-weight-semibold">Edward
                                        <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
                                        <span class="fs-14 ml-2"> 4 <i class="fa fa-star text-yellow"></i></span>
                                    </h5>
                                    <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 16.35  <i class=" ml-3 fa fa-map-marker"></i> UK</small>
                                    <p class="font-13  mb-2 mt-2">
                                        Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
                                    </p>
                                    <a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>
                                    <a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span class="">Comment</span></a>
                                    <a href="" class="mr-2" data-toggle="modal" data-target="#report"><span class="">Report</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Comments-->

                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Leave a reply</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name1" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Comment"></textarea>
                                </div>
                                <a href="#" class="btn btn-primary">Send Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
