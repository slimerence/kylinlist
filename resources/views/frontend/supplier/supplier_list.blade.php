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
                @include('frontend.supplier._sp_left')
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <!--Add Lists-->
                    <div class="card">
                        <div class="card-body">
                            <div class="item2-gl ">
                                <div class="item2-gl-nav d-flex">
                                    <h6 class="mb-0 mt-2">Showing 1 to 9 of 30 entries</h6>
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
                                            @if(_getVerifyStatus(\App\Model\Suppliers\SupplierManagement::$TYPE_SUPPLIER,$supplier->id))
                                            <div class="card supplier-card overflow-hidden">
                                                <div class="ribbon ribbon-top-left text-danger"><span class="{{ $key%4==0?'bg-danger':'bg-primary' }}">featured</span></div>
                                                <div class="d-md-flex">
                                                    <div class="item-card9-img">
                                                        <div class="item-card9-imgs">
                                                            <a href="{{ url($supplier->category->url.'/supplier/'.$supplier->url) }}"></a>
                                                            @if(is_null($supplier->avatar_path))
                                                            <img src="{{ asset('images/categories/categories0'.($key+1).'.jpg') }}" alt="img" class="cover-image">
                                                                @else
                                                            <img src="{{ asset($supplier->getProfileImage()->url) }}" alt="img" class="cover-image">
                                                            @endif
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="#" class="item-card9-icons1 wishlist {{ $key%4 == 0? 'active':'' }}"> <i class="fa fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-0 border-0">
                                                        <div class="card-body ">
                                                            <div class="item-card9">
                                                                <a href="{{ url($supplier->category->url.'/supplier/'.$supplier->url) }}" class="text-dark"><h4 class="font-weight-semibold mt-1">{{ $supplier->name }}</h4></a>
                                                                <ul>
                                                                    <li>Business Type: <span class="black">{{ $supplier->business_type }}</span></li>
                                                                    <li>Main Products: <span class="black">{{ $supplier->main_product }}</span></li>
                                                                    <li>City/Province: &nbsp;<span class="black">{{ $supplier->city.'/'.$supplier->state }}</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer pt-3 pb-3">
                                                            <div class="item-card9-footer d-flex">
                                                                <div class="item-card9-cost">
                                                                    <a class="btn btn-danger" href="{{ url($supplier->category->url.'/supplier/'.$supplier->url) }}">VISIT <i class="fe fe-arrow-right-circle"></i></a>
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
                                                                        </div>({{ ($key+1)*3 }} Enquiries)
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                        {{ $suppliers->links() }}
                                    </div>
                                    <div class="tab-pane" id="tab-12">
                                        <div class="row">
                                            @foreach($suppliers as $key=>$supplier)
                                                @if(_getVerifyStatus(\App\Model\Suppliers\SupplierManagement::$TYPE_SUPPLIER,$supplier->id))
                                                <div class="col-lg-6 col-md-12 col-xl-4">
                                                    <div class="card overflow-hidden">
                                                        <div class="item-card9-img">
                                                            <div class="arrow-ribbon bg-primary">Tag</div>
                                                            <div class="item-card9-imgs">
                                                                <a href="{{ url($supplier->category->url.'/supplier/'.$supplier->url) }}" style="max-height: "></a>
                                                                @if(is_null($supplier->avatar_path))
                                                                    <img src="{{ asset('images/categories/categories0'.($key+1).'.jpg') }}" alt="img" class="cover-image">
                                                                @else
                                                                    <img src="{{ asset($supplier->getProfileImage()->url) }}" alt="img" class="cover-image">
                                                                @endif
                                                            </div>
                                                            <div class="item-card9-icons">
                                                                <a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="item-card9">
                                                                <a href="{{ url($supplier->category->url.'/supplier/'.$supplier->url) }}" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">{{ $supplier->name }}</h4></a>
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
                                                                <p>Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
                                                                <div class="item-card9-desc">
                                                                    <a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> {{ $supplier->state }}</span></a>
                                                                    <a href="#" class=""><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> {{ $supplier->created_at->format('d-M-Y') }}</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(isset($category))
                    <!--/Add Lists-->
                    <div class="card mb-0">
                        <div class="card-body">
                            <h1 class="h4"><b>{{ $category->name }}</b></h1>
                            <p>{!! $category->description !!}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--/Add Listings-->


@endsection
