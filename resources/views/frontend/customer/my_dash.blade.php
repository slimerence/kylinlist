@extends('frontend.layouts.temp')

@section('content')
    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="/assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">My Dashboard</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">My Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcrumb-->

    <!--User Dashboard-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">My Dashboard</h3>
                        </div>
                        <div class="card-body text-center item-user">
                            <div class="profile-pic">
                                <div class="profile-pic-img">
                                    <span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="" data-original-title="online"></span>
                                    <img src="../assets/images/faces/male/25.jpg" class="brround" alt="user">
                                </div>
                                <a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">Robert McLean</h4></a>
                            </div>
                        </div>
                        <aside class="app-sidebar doc-sidebar my-dash">
                            <div class="app-sidebar__user clearfix">
                                <ul class="side-menu">
                                    <li class="slide">
                                        <a class="side-menu__item active" data-toggle="slide" href="#"><i class="side-menu__icon si si-user"></i><span class="side-menu__label">Edit Profile</span><i class="angle fa fa-angle-right"></i></a>
                                        <ul class="slide-menu">
                                            <li><a class="slide-item" href="mydash.html">Edit Profile-1</a></li>
                                            <li><a class="slide-item " href="mydash.html">Edit Profile-2</a></li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-diamond"></i><span class="side-menu__label"> My Ads</span><i class="angle fa fa-angle-right"></i></a>
                                        <ul class="slide-menu">
                                            <li><a class="slide-item" href="myads.html"> My Ads-1</a></li>
                                            <li><a class="slide-item" href="myads.html"> My Ads-2</a></li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-heart"></i><span class="side-menu__label"> My Favorite</span><i class="angle fa fa-angle-right"></i></a>
                                        <ul class="slide-menu">
                                            <li><a class="slide-item" href="myfavorite.html"> My Favorite-1</a></li>
                                            <li><a class="slide-item" href="myfavorite.html"> My Favorite-2</a></li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-folder-alt"></i><span class="side-menu__label">Managed Ads</span><i class="angle fa fa-angle-right"></i></a>
                                        <ul class="slide-menu">
                                            <li><a class="slide-item" href="manged.html">Managed Ads-1</a></li>
                                            <li class="sub-slide">
                                                <a class="side-menu__item border-top-0 slide-item" href="#" data-toggle="sub-slide"><span class="side-menu__label">Managed Ads-2</span> <i class="sub-angle fa fa-angle-right"></i></a>
                                                <ul class="child-sub-menu ">
                                                    <li><a class="slide-item" href="manged.html">Managed Ads-3</a></li>
                                                    <li><a class="slide-item" href="manged.html">Managed Ads-4</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="payments.html"><i class="side-menu__icon si si-credit-card"></i><span class="side-menu__label">Payments</span></a>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-basket"></i><span class="side-menu__label">Orders</span><i class="angle fa fa-angle-right"></i></a>
                                        <ul class="slide-menu">
                                            <li><a class="slide-item" href="orders.html">Orders-1</a></li>
                                            <li><a class="slide-item" href="orders.html">Orders-2</a></li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-game-controller"></i><span class="side-menu__label"> Safety Tips</span><i class="angle fa fa-angle-right"></i></a>
                                        <ul class="slide-menu">
                                            <li><a class="slide-item" href="tips.html">Safety Tips-1</a></li>
                                            <li><a class="slide-item" href="tips.html">Safety Tips-2</a></li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon si si-settings"></i><span class="side-menu__label"> Settings </span><i class="angle fa fa-angle-right"></i></a>
                                        <ul class="slide-menu">
                                            <li><a class="slide-item" href="settings.html">Settings-1</a></li>
                                            <li><a class="slide-item" href="settings.html">Settings-2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="side-menu__item" href="#"><i class="side-menu__icon si si-power"></i><span class="side-menu__label">Logout</span></a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="card my-select">
                        <div class="card-header">
                            <h3 class="card-title">Search Ads</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="text" placeholder="What are you looking for?">
                            </div>
                            <div class="form-group">
                                <select name="country" id="select-countries" class="form-control custom-select select2-show-search">
                                    <option value="1" selected="">All Categories</option>
                                    <option value="2">RealEstate</option>
                                    <option value="3">Restaurant</option>
                                    <option value="4">Beauty</option>
                                    <option value="5">Jobs</option>
                                    <option value="6">Services</option>
                                    <option value="7">Vehicle</option>
                                    <option value="8">Education</option>
                                    <option value="9">Electronics</option>
                                    <option value="10">Pets &amp; Animals</option>
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
                    <div class="card mb-xl-0">
                        <div class="card-header">
                            <h3 class="card-title">Safety Tips For Buyers</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled widget-spec  mb-0">
                                <li class="">
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Meet Seller at public Place
                                </li>
                                <li class="">
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Check item before you buy
                                </li>
                                <li class="">
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Pay only after collecting item
                                </li>
                                <li class="ml-5 mb-0">
                                    <a href="tips.html"> View more..</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12 col-md-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="number" class="form-control" placeholder="Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Home Address">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Postal Code</label>
                                        <input type="number" class="form-control" placeholder="ZIP Code">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="form-label">Country</label>
                                        <select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" data-placeholder="Select">
                                            <optgroup label="Categories">
                                                <option>--Select--</option>
                                                <option value="1">Germany</option>
                                                <option value="2">Real Estate</option>
                                                <option value="3">Canada</option>
                                                <option value="4">Usa</option>
                                                <option value="5">Afghanistan</option>
                                                <option value="6">Albania</option>
                                                <option value="7">China</option>
                                                <option value="8">Denmark</option>
                                                <option value="9">Finland</option>
                                                <option value="10">India</option>
                                                <option value="11">Kiribati</option>
                                                <option value="12">Kuwait</option>
                                                <option value="13">Mexico</option>
                                                <option value="14">Pakistan</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Facebook</label>
                                        <input type="text" class="form-control" placeholder="https://www.facebook.com/">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Google</label>
                                        <input type="text" class="form-control" placeholder="https://www.google.com/">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Twitter</label>
                                        <input type="text" class="form-control" placeholder="https://twitter.com/">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Pinterest</label>
                                        <input type="text" class="form-control" placeholder="https://in.pinterest.com/">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">About Me</label>
                                        <textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Upload Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="example-file-input-custom">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Updated Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/User Dashboard-->
@endsection
