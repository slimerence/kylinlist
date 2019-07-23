@extends(_get_frontend_layout_path('temp'))

@section('content')
    @include('frontend.supplier.elements.search')
    <!--Breadcrumb-->
    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">Classifieds list Right</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/category-list') }}">Suppliers</a></li>
                    @if(isset($category))
                    <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                    @endif
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
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="card">
                        @include('frontend.supplier.elements.category_filter')
                        <div class="card-header border-top">
                            <h3 class="card-title">Price Range</h3>
                        </div>
                        <div class="card-body">
                            <h6>
                                <label for="price">Price Range:</label>
                                <input type="text" id="price">
                            </h6>
                            <div id="mySlider"></div>
                        </div>
                        <div class="card-header border-top">
                            <h3 class="card-title">Condition</h3>
                        </div>
                        <div class="card-body">
                            <div class="filter-product-checkboxs">
                                <label class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                                    <span class="custom-control-label">
											New
										</span>
                                </label>
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                    <span class="custom-control-label">
											Used
										</span>
                                </label>
                            </div>
                        </div>
                        <div class="card-header border-top">
                            <h3 class="card-title">Posted By</h3>
                        </div>
                        <div class="card-body">
                            <div class="filter-product-checkboxs">
                                <label class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                                    <span class="custom-control-label">
											Dealer
										</span>
                                </label>
                                <label class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                    <span class="custom-control-label">
											Individual
										</span>
                                </label>
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                                    <span class="custom-control-label">
											Reseller
										</span>
                                </label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-pink btn-block">Apply Filter</a>
                        </div>
                    </div>
                   @include('frontend.supplier.elements.social_share')
                </div>
                <!--/Left Side Content-->

                <div class="col-xl-9 col-lg-8 col-md-12">
                    <!--Add Lists-->
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="item2-gl ">
                                <div class="item2-gl-nav d-flex">
                                    <h6 class="mb-0 mt-2">Showing 1 to 10 of 30 entries</h6>
                                    <ul class="nav item2-gl-menu ml-auto">
                                        <li class=""><a href="#tab-11" class="active show" data-toggle="tab"><i class="fa fa-list"></i></a></li>
                                        <li><a href="#tab-12" data-toggle="tab" class=""><i class="fa fa-th"></i></a></li>
                                    </ul>
                                    <div class="d-flex">
                                        <label class="mr-2 mt-1 mb-sm-1">Sort By:</label>
                                        <select name="item" class="form-control select-sm w-70">
                                            <option value="1">Latest</option>
                                            <option value="2">Oldest</option>
                                            <option value="3">Price:Low-to-High</option>
                                            <option value="5">Price:Hight-to-Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-11">
                                        @foreach($suppliers as $key=>$supplier)
                                            <div class="card overflow-hidden">
                                                <div class="ribbon ribbon-top-left text-danger"><span class="{{ $key%4==0?'bg-danger':'bg-primary' }}">featured</span></div>
                                                <div class="d-md-flex">
                                                    <div class="item-card9-img">
                                                        <div class="item-card9-imgs">
                                                            <a href="{{ url($supplier->category->url.'/supplier/'.$supplier->name) }}"></a>
                                                            @if(is_null($supplier->avatar_path))
                                                            <img src="{{ asset('images/categories/categories0'.($key+1).'.jpg') }}" alt="img" class="cover-image">
                                                                @else
                                                            <img src="{{ asset($supplier->avatar_path) }}" alt="img" class="cover-image">
                                                            @endif
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="#" class="item-card9-icons1 wishlist {{ $key%4 == 0? 'active':'' }}"> <i class="fa fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-0 border-0">
                                                        <div class="card-body ">
                                                            <div class="item-card9">
                                                                <a href="{{ url($supplier->category->url) }}">{{ $supplier->category->name }}</a>
                                                                <a href="{{ url($supplier->category->url.'/supplier/'.$supplier->name) }}" class="text-dark"><h4 class="font-weight-semibold mt-1">{{ $supplier->name }}</h4></a>
                                                                <p class="mb-0 leading-tight">{{ $supplier->about }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer pt-4 pb-4">
                                                            <div class="item-card9-footer d-flex">
                                                                <div class="item-card9-cost">
                                                                    <h4 class="text-dark font-weight-semibold mb-0 mt-0">$149.00</h4>
                                                                </div>
                                                                <div class="ml-auto">
                                                                    <div class="rating-stars block">
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
                                                                        </div>({{ ($key+1)*3 }} reviews)
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="tab-pane" id="tab-12">
                                        <div class="row">
                                            @for($key=0;$key<9;$key++)
                                                <div class="col-lg-6 col-md-12 col-xl-4">
                                                    <div class="card overflow-hidden">
                                                        <div class="item-card9-img">
                                                            <div class="arrow-ribbon bg-primary">Rent</div>
                                                            <div class="item-card9-imgs">
                                                                <a href="{{ url('supplier') }}"></a>
                                                                <img src="{{ asset('images/categories/categories0'.($key+1).'.jpg') }}" alt="img" class="cover-image">
                                                            </div>
                                                            <div class="item-card9-icons">
                                                                <a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="item-card9">
                                                                <a href="classified.html">RealEstate</a>
                                                                <a href="classified.html" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">2BK flat </h4></a>
                                                                <p>Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
                                                                <div class="item-card9-desc">
                                                                    <a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a>
                                                                    <a href="#" class=""><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> Nov-15-2018</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="item-card9-footer d-flex">
                                                                <div class="item-card9-cost">
                                                                    <h4 class="text-dark font-weight-semibold mb-0 mt-0">$263.99</h4>
                                                                </div>
                                                                <div class="ml-auto">
                                                                    <div class="rating-stars block">
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
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="center-block text-center">
                                <ul class="pagination mb-0">
                                    <li class="page-item page-prev disabled">
                                        <a class="page-link" href="#" tabindex="-1">Prev</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item page-next">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/Add Lists-->
                </div>
            </div>
        </div>
    </section>
    <!--/Add Listings-->


@endsection
