@extends(_get_frontend_layout_path('temp'))

@section('content')
    @include('frontend.sections.sliders')
    <!--Breadcrumb-->
    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">{{ $product->name }}</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url($supplier->buildUrl()) }}">{{ $supplier->name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!--/Breadcrumb-->

    <!--Add listing-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <!--Product Description-->
                    <div class="card">
                        <div class="single-productslide">
                            <div class="row no-gutter">
                                <div class="col-lg-6 border-right">
                                    <div class="zoom-container p-6">
                                        <div class="exzoom hidden" id="exzoom">
                                            <div class="exzoom_img_box">
                                                <ul class='exzoom_img_ul'>
                                                    @for($i=1;$i<5;$i++)
                                                        <li><img src="{{ asset($product->image_path) }}" alt="img"></li>
                                                    @endfor
                                                </ul>
                                            </div>
                                            <div class="exzoom_nav"></div>
                                            <p class="exzoom_btn"><a class="exzoom_prev_btn" href="javascript:void(0);"><i class="pe-7s-angle-left-circle"></i></a> <a class="exzoom_next_btn" href="javascript:void(0);"><i class="pe-7s-angle-right-circle"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-gallery-data mb-0">
                                        <h3 class="mb-3 font-weight-semibold">{{ $product->name }}</h3>
                                        <div class="mb-3">
                                            <span class="font-weight-bold text-danger">Min. Order <del class="text-muted h6">{{ $product->min_order }}</del></span>
                                            <span> {{ $product->unit }}</span>
                                            <span class="text-success ml-2"><i class="fa fa-info-circle"></i> 20% off</span>
                                        </div>
                                        <div><a href=""><i class="fa fa-tag text-success"></i> <span class="text-dark font-weight-bold">Special price</span> get 20% extra off</a></div>
                                        <div><a href=""><i class="fa fa-tag text-success"></i> <span class="text-dark font-weight-bold">Bank offer</span> get 15% off on any Credit Cards</a></div>
                                        <h6 class="font-weight-bold mt-4">Specification</h6>
                                        <p class="text-dark">{{ $product->short_description }}</p>
                                        <dl class="product-gallery-data1">
                                            <dt>Type</dt>
                                            <dd>Normal</dd>
                                        </dl>
                                        <dl class="product-gallery-data1">
                                            <dt>Sleeve</dt>
                                            <dd>Half Sleeve</dd>
                                        </dl>
                                        <dl class="product-gallery-data1">
                                            <dt>Fabric</dt>
                                            <dd>Cotton</dd>
                                        </dl>
                                        <dl class="product-gallery-data1">
                                            <dt>Ideal For</dt>
                                            <dd>Woman</dd>
                                        </dl>
                                        <dl class="product-gallery-data1">
                                            <dt>Size</dt>
                                            <dd>M</dd>
                                        </dl>
                                        <dl class="product-gallery-data1">
                                            <dt>Color</dt>
                                            <dd>Moss Green</dd>
                                        </dl>
                                        <div class="product-gallery-rats">
                                            <ul class="product-gallery-rating">
                                                <li>
                                                    <a href="#"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="#"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="#"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="#"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="#"><i class="fa fa-star-o text-warning"></i></a>
                                                </li>
                                            </ul>
                                            <div class="label-rating">793 reviews</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <dl class="product-gallery-quty mt-5 mb-0">
                                                    <dt>Quantity:</dt>
                                                    <dd>
                                                        <div class="form-group mb-0">
                                                            <select name="quantity" id="select-countries" class="form-control select-sm  w-8 custom-select">
                                                                <option value="1" selected="">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                            <div class="col-12">
                                                <dl class="product-gallery-size mt-1 mb-3 mb-0">
                                                    <dt>Size:</dt>
                                                    <dd>
                                                        <div class="product-gallery-checks custom-controls-stacked">
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="scheckbox" value="option1">
                                                                <span class="custom-control-label">SM</span>
                                                            </label>
                                                            <label class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" name="scheckbox" value="option1">
                                                                <span class="custom-control-label">MD</span>
                                                            </label>
                                                        </div>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <a href="#quick-contact" class="btn  btn-info"> Contact Supplier </a>
                                        <a href="{{ url($supplier->buildUrl()) }}" class="btn  btn-success">View Supplier </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Description</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                {!! $product->description !!}
                            </div>
                            <h4 class="mb-4">Specifications</h4>
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="table-responsive">
                                        <table class="table row table-borderless w-100 m-0 text-nowrap ">
                                            <tbody class="col-lg-12 col-xl-6 p-0">
                                            <tr>
                                                <td><span class="font-weight-bold">Type :</span> Normal</td>
                                            </tr>
                                            <tr>
                                                <td><span class="font-weight-bold">Sleeve :</span> Half Sleeve</td>
                                            </tr>
                                            <tr>
                                                <td><span class="font-weight-bold">Fabric :</span> Cotton</td>
                                            </tr>
                                            <tr>
                                                <td><span class="font-weight-bold">Ideal For :</span> Woman</td>
                                            </tr>
                                            </tbody>
                                            <tbody class="col-lg-12 col-xl-6 p-0">
                                            <tr>
                                                <td><span class="font-weight-bold">Size :</span> M</td>
                                            </tr>
                                            <tr>
                                                <td><span class="font-weight-bold">Color :</span> Moss Green</td>
                                            </tr>
                                            <tr>
                                                <td><span class="font-weight-bold">Pack of :</span> 1 </td>
                                            </tr>
                                            <tr>
                                                <td><span class="font-weight-bold">Fabric Care :</span> Machine Wash</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="list-id">
                                <div class="row">
                                    <div class="col">
                                        <a class="mb-0">E-Commerce ID : #8256358</a>
                                    </div>
                                    <div class="col col-auto">
                                        Posted By <a class="mb-0 font-weight-bold">Individual</a> / 21st Dec 2018
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="icons">
                                <a href="#" class="btn btn-info icons"><i class="si si-share mr-1"></i> Share Ad</a>
                                <a href="#" class="btn btn-primary icons"><i class="si si-heart  mr-1"></i> 678</a>
                                <a href="#" class="btn btn-secondary icons"><i class="si si-printer  mr-1"></i> Print</a>
                            </div>
                        </div>
                    </div>
                    <!--/Product Description-->

                    <h3 class="mb-5 mt-4">Related Products</h3>

                    <!--Realted Products-->
                    <div id="myCarousel5" class="owl-carousel owl-carousel-icons6">
                        <!-- Wrapper for carousel items -->
                        @for($i=1;$i<5;$i++)
                            <div class="item">
                                <div class="card">
                                    @switch($i)
                                        @case(1)
                                        <div class="arrow-ribbon bg-info">30% off</div>
                                        @break
                                        @case(2)
                                        <div class="arrow-ribbon bg-danger">Big Deal</div>
                                        @break
                                        @default
                                        <div class="arrow-ribbon bg-danger">Urgent</div>
                                    @endswitch
                                    <div class="product-item2">
                                        <div class="product-item2-img text-center">
                                            <img src="{{ asset('images/products/TP0'.$i.'.jpg') }}" alt="img" class="mx-auto">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="product-item2-desc">
                                            <h4 class="font-weight-semibold text-dark"><a href="#">Ladies Shoes</a></h4>
                                            <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                            <ul class="product-item2-rating">
                                                <li>
                                                    <a href="#"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="#"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="#"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="#"><i class="fa fa-star text-warning"></i></a>
                                                    <a href="#"><i class="fa fa-star-o text-warning"></i></a>
                                                </li>
                                            </ul>
                                            <div class="label-rating text-muted">523 reviews</div>
                                            <div class="label-rating text-muted float-right">4 Comments</div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="product-item-wrap d-flex">
                                            <div class="product-item-price">
                                                <span class="newprice text-dark">$99</span>
                                                <del class="oldprice text-muted">$200</del>
                                            </div>
                                            <a href="#" class="btn btn-primary  btn-sm ml-auto">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor

                    </div>
                    <!--Realted Products-->

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

                    <div class="card mb-0" id="quick-contact">
                        <div class="card-header">
                            <h3 class="card-title">Contact Supplier</h3>
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
    <!--/Add Listing-->

    @include('frontend.sections.news_letter')
@endsection
