@extends(_get_frontend_layout_path('temp'))

@section('content')

    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">Blog-List</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Blog-List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--Add listing-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <!--Add lists-->
                    <div class="row">
                        @for($i=0;$i<9;$i++)
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card overflow-hidden">
                                    <div class="ribbon ribbon-top-left text-warning"><span class="bg-warning">featured</span></div>
                                    <div class="row no-gutters">
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="item7-card-img">
                                                <a href="{{ url('/industry/detail') }}"></a>
                                                <img src="../assets/images/products/f1.png" alt="img" class="cover-image">
                                                <div class="item7-card-text">
                                                    <span class="badge badge-success">Restaurant</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-12 col-md-12">
                                            <div class="card-body">
                                                <div class="item7-card-desc d-flex mb-1">
                                                    <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-03-2018</a>
                                                    <a href="#"><i class="fa fa-user text-muted mr-2"></i>Nissy Sten</a>
                                                    <div class="ml-auto">
                                                        <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
                                                    </div>
                                                </div>
                                                <a href="#" class="text-dark"><h4 class="font-weight-semibold mb-3">Excepteur sint occaecat cupidatat proident</h4></a>
                                                <p class="mb-1">Ut enim ad minima veniam, quis nostrum exercitationem,Ut enim minima veniam, quis nostrum exercitationem
                                                </p>
                                                <a href="{{ url('/industry/detail') }}" class="btn btn-primary btn-sm mt-4">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="center-block text-center">
                        <ul class="pagination mb-5 mb-lg-0">
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
                    <!--/Add lists-->
                </div>

                <!--Right Side Content-->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control br-tl-7 br-bl-7" placeholder="Search">
                                <div class="input-group-append ">
                                    <button type="button" class="btn btn-primary br-tr-7 br-br-7">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Categories</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-catergory">
                                <div class="item-list">
                                    <ul class="list-group mb-0">
                                        <li class="list-group-item">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-building bg-primary text-primary"></i> Real Estate
                                                <span class="badgetext badge badge-pill badge-secondary mb-0">14</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-bed bg-success text-success"></i> Hostel & Travels
                                                <span class="badgetext badge badge-pill badge-secondary mb-0">63</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-heartbeat bg-info text-info"></i> Health & Fitness
                                                <span class="badgetext badge badge-pill badge-secondary mb-0">25</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-cutlery bg-warning text-warning"></i> Restaurant
                                                <span class="badgetext badge badge-pill badge-secondary mb-0">74</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-laptop bg-danger text-danger"></i> Computer
                                                <span class="badgetext badge badge-pill badge-secondary mb-0">18</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-mobile bg-blue text-blue"></i> Mobile
                                                <span class="badgetext badge badge-pill badge-secondary mb-0">32</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item border-bottom-0">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-pencil-square  bg-pink text-pink"></i> Education
                                                <span class="badgetext badge badge-pill badge-secondary mb-0">08</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Popular Tags</h3>
                        </div>
                        <div class="card-body">
                            <div class="product-tags clearfix">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#">RealEstate</a></li>
                                    <li><a href="#">Vehicles</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Health& Beauty</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Automobiles</a></li>
                                    <li><a href="#">Computer</a></li>
                                    <li><a href="#" class="mb-0">Electronics</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Blog Authors</h3>
                        </div>
                        <div class="card-body p-0">
                            <ul class="vertical-scroll">
                                <li class="item2">
                                    <div class="footerimg d-flex mt-0 mb-0">
                                        <div class="d-flex footerimg-l mb-0">
                                            <img src="../assets/images/faces/female/18.jpg" alt="image" class="avatar brround  mr-2">
                                            <a href="#" class="time-title p-0 leading-normal mt-2">Boris	Nash <i class="si si-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                        </div>
                                        <div class="mt-2 footerimg-r ml-auto">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 16</span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 36</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="item2">
                                    <div class="footerimg d-flex mt-0 mb-0">
                                        <div class="d-flex footerimg-l mb-0">
                                            <img src="../assets/images/faces/female/10.jpg" alt="image" class="avatar brround  mr-2">
                                            <a href="#" class="time-title p-0 leading-normal mt-2">Lorean Mccants <i class="si si-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                        </div>
                                        <div class="mt-2 footerimg-r ml-auto">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 43</span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 23</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="item2">
                                    <div class="footerimg d-flex mt-0 mb-0">
                                        <div class="d-flex footerimg-l mb-0">
                                            <img src="../assets/images/faces/male/18.jpg" alt="image" class="avatar brround  mr-2">
                                            <a href="#" class="time-title p-0 leading-normal mt-2">Dewitt Hennessey <i class="si si-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                        </div>
                                        <div class="mt-2 footerimg-r ml-auto">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 34</span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 12</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="item2">
                                    <div class="footerimg d-flex mt-0 mb-0">
                                        <div class="d-flex footerimg-l mb-0">
                                            <img src="../assets/images/faces/male/8.jpg" alt="image" class="avatar brround  mr-2">
                                            <a href="#" class="time-title p-0 leading-normal mt-2">Archie Overturf <i class="si si-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                        </div>
                                        <div class="mt-2 footerimg-r ml-auto">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 12</span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="item2">
                                    <div class="footerimg d-flex mt-0 mb-0">
                                        <div class="d-flex footerimg-l mb-0">
                                            <img src="../assets/images/faces/female/21.jpg" alt="image" class="avatar brround  mr-2">
                                            <a href="#" class="time-title p-0 leading-normal mt-2">Barbra Flegle <i class="si si-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"></i></a>
                                        </div>
                                        <div class="mt-2 footerimg-r ml-auto">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Articles"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 21</span></a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/Right Side Content-->
            </div>
        </div>
    </section>
    <!--All Listing-->

    @include('frontend.sections.news_letter')
@endsection
