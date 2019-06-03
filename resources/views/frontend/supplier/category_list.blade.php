@extends(_get_frontend_layout_path('temp'))

@section('content')
    @include('frontend.supplier.elements.search')
    <!--Categories-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1>Categories</h1>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="row">
                @for($i=0;$i<9;$i++)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="item-card">
                                <div class="item-card-desc">
                                    <a href="#"></a>
                                    <div class="item-card-img">
                                        <img src={{ asset('images/categories/categories0'.($i%9+1).'.jpg') }} alt="img" class="br-tr-7 br-tl-7">
                                    </div>
                                    <div class="item-card-text">
                                        <h4 class="mb-0">Home &amp; Furniture<span>(45)</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <!--/Categories-->

    <!--Categories-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Categories</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-body border mb-5">
                                        <div class="cat-title">
                                            <a href="#" class="text-dark"><h3 class="card-title mb-3"><i class="fa fa-building mr-1"></i> Real Estate</h3></a>
                                        </div>
                                        <ul class="list-unstyled widget-spec  p-1">
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Rentals</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Lands</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Villas</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Apartments</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Accommodation And Hotels</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right  text-primary"></i> RealEstate Services</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Multi-family house</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Terraced house</a>
                                            </li>
                                            <li class="mb-0">
                                                <a href="#" class="text-primary"> View more..</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-body border mb-5">
                                        <div class="cat-title">
                                            <a href="#" class="text-dark"><h3 class="card-title mb-3"><i class="fa fa-desktop mr-1"></i>  Electronics</h3></a>
                                        </div>
                                        <ul class="list-unstyled widget-spec p-1">
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Computers-Laptops</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Games-Entertainment</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Washing machines</a>
                                            </li><li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Air Conditions</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right  text-primary"></i> Computer Accessories</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Kichen-Other Applicans</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Harddisk-Printers-Monitors</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Tvs-Video-Audio</a>
                                            </li>
                                            <li class="mb-0">
                                                <a href="#" class="text-primary"> View more..</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-body border mb-5">
                                        <div class="cat-title">
                                            <a href="#" class="text-dark"><h3 class="card-title mb-3"><i class="fa fa-handshake-o mr-1"></i>  Jobs</h3></a>
                                        </div>
                                        <ul class="list-unstyled widget-spec p-1">
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Data Entry-Bank Office</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Operater-Technician</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Cook</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Tell Caller-BPO</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right  text-primary"></i> Sales-Marketing</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Accountant</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Designer</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Deliver-Collection</a>
                                            </li>
                                            <li class="mb-0">
                                                <a href="#" class="text-primary"> View more..</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-body border mb-5">
                                        <div class="cat-title">
                                            <a href="#" class="text-dark"><h3 class="card-title mb-3"><i class="fa fa-car mr-1"></i>  Vehicles</h3></a>
                                        </div>
                                        <ul class="list-unstyled widget-spec p-1">
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Cars</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Motorcycles</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Bicycle</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Spare parts</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Driver</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Driver</a>
                                            </li>
                                            <li class="mb-0">
                                                <a href="#" class="text-primary"> View more..</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-body border mb-5">
                                        <div class="cat-title">
                                            <a href="#" class="text-dark"><h3 class="card-title mb-3"><i class="fa fa-mobile mr-1"></i>  Mobiles</h3></a>
                                        </div>
                                        <ul class="list-unstyled widget-spec p-1">
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Tablets</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Accessories</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Smart Phones</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Electronics - Computer</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Education - Classes</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Organization Services</a>
                                            </li>
                                            <li class="mb-0">
                                                <a href="#" class="text-primary"> View more..</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-body border mb-5">
                                        <div class="cat-title">
                                            <a href="#" class="text-dark"><h3 class="card-title mb-3"><i class="fa fa-cogs mr-1"></i>  Services</h3></a>
                                        </div>
                                        <ul class="list-unstyled widget-spec p-1">
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Health-Beauty</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Computing Services</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Electronics - Computer</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Education - Classes</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Organization Services</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Other Services</a>
                                            </li>
                                            <li class="mb-0">
                                                <a href="#" class="text-primary"> View more..</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-body border mb-5 mb-lg-0">
                                        <div class="cat-title">
                                            <a href="#" class="text-dark"><h3 class="card-title mb-3"><i class="fa fa-male mr-1"></i>  Fashions</h3></a>
                                        </div>
                                        <ul class="list-unstyled widget-spec p-1 mb-0">
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Clothings</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Toys</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Shooes</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Appliances</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Jewellery</a>
                                            </li>
                                            <li class="mb-0">
                                                <a href="#" class="text-primary"> View more..</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-body border mb-5 mb-lg-0">
                                        <div class="cat-title">
                                            <a href="#" class="text-dark"><h3 class="card-title mb-3"><i class="fa fa-graduation-cap mr-1"></i>  Education</h3></a>
                                        </div>
                                        <ul class="list-unstyled widget-spec p-1 mb-0">
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Classes</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Seminars</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Tuitions</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Teaching</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Projects</a>
                                            </li>
                                            <li class="mb-0">
                                                <a href="#" class="text-primary"> View more..</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-body border mb-0 mb-lg-0">
                                        <div class="cat-title">
                                            <a href="#" class="text-dark"><h3 class="card-title mb-3"><i class="fa fa-bed mr-1"></i>  Furniture</h3></a>
                                        </div>
                                        <ul class="list-unstyled widget-spec p-1 mb-0">
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Sofa - Dining</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Beds</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Home Decor -  Garden</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Kids Furniture</a>
                                            </li>
                                            <li class="">
                                                <a href="#" class="text-dark"><i class="fa fa-caret-right text-primary"></i> Other Househlod items</a>
                                            </li>
                                            <li class="mb-0">
                                                <a href="#" class="text-primary"> View more..</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-body items-gallery">
                            <div class="items-blog-tab text-center">
                                <h1 class="">Latest News</h1>
                                <div class="items-blog-tab-heading row">
                                    <div class="col-12">
                                        <ul class="nav items-blog-tab-menu">
                                            <li class=""><a href="#tab-1" class="active show" data-toggle="tab">All</a></li>
                                            <li><a href="#tab-2" data-toggle="tab" class="">Business</a></li>
                                            <li><a href="#tab-3" data-toggle="tab" class="">Beauty</a></li>
                                            <li><a href="#tab-4" data-toggle="tab" class="">Real Estate</a></li>
                                            <li><a href="#tab-5" data-toggle="tab" class="">Restaurant</a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="tab-content">
                                    @for($i=1;$i<5;$i++)
                                        <div class="tab-pane {{ $i==1?'active show':'' }}" id="{{ 'tab-'.$i }}">
                                            <div class="row">
                                                @for($j=0;$j<4;$j++)
                                                    <div class="col-xl-3 col-lg-6 col-md-12">
                                                        <div class="card mb-xl-0">
                                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                                <img src={{ asset('images/categories/news0'.($j%4+1).'.jpg') }} class="cover-image">
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="item-card8-desc">
                                                                    <p class="text-muted">16 November 2018.</p>
                                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Categories-->

    @include('frontend.sections.news_letter')
@endsection
