@extends('backend.layouts.temp')

@section('content')
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">Dashboard 03</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard 03</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card ">
                        <div class="card-body text-center">
                            <div class="counter-status dash3-counter">
                                <div class="counter-icon bg-primary text-primary">
                                    <i class="si si-people text-white"></i>
                                </div>
                                <h5>Clients</h5>
                                <h2 class="counter">1554</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card ">
                        <div class="card-body text-center">
                            <div class="counter-status dash3-counter">
                                <div class="counter-icon bg-info text-info">
                                    <i class="si si-rocket text-white"></i>
                                </div>
                                <h5>Total Sales</h5>
                                <h2 class="counter">1068</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card ">
                        <div class="card-body text-center">
                            <div class="counter-status dash3-counter">
                                <div class="counter-icon bg-success text-success">
                                    <i class="si si-docs text-white"></i>
                                </div>
                                <h5>Total Projects</h5>
                                <h2 class="counter">512</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <div class="card ">
                        <div class="card-body text-center">
                            <div class="counter-status dash3-counter">
                                <div class="counter-icon bg-danger text-danger">
                                    <i class="si si-emotsmile text-white"></i>
                                </div>
                                <h5>Happy Customers</h5>
                                <h2 class="counter">4388</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-xl-4 col-lg-12">
                    <div class="card ">
                        <div class="card-header">
                            <div class="card-title">Dailywise Feedback</div>
                        </div>
                        <div class="card-body">
                            <div id="echart5" class="chartsh"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Daily Analytics</div>
                        </div>
                        <div class="card-body">
                            <div id="placeholder4" class="chartsh"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Current Visitors</div>
                        </div>
                        <div class="card-body">
                            <div id="world-map-markers" class="worldh h-220"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg12">
                    <div class="card">
                        <div class="product-item1">
                            <div class="item-overlay text-center">
                                <img src="../assets/images/products/fork.jpg" alt="img">
                                <div class="btn-overlay">
                                    <a class="btn-sm btn btn-purple" href="#"><i class="fa fa-search"></i></a>
                                    <a class="btn-sm btn btn-pink" href="#"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h5 class="text-dark">Kids Frocks</h5>
                            <div class="product-item-wrap d-flex">
                                <div class="product-item-price">
                                    <span class="newprice text-dark">$183</span>
                                    <del class="oldprice text-muted">$235</del>
                                </div>
                                <a href="#" class="btn btn-success btn-sm ml-auto">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg12">
                    <div class="card card-blog-overlay6 minh-210">
                        <div class="card-body  text-center">
                            <div class="card-product">
                                <h3 class="text-white font-weight-semibold mt-3 fs-30">$15</h3>
                                <h5 class="text-white font-weight-semibold text-uppercase">Sport shoes</h5>
                                <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores </p>
                                <a href="#" class="btn btn-primary mt-3">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Orders List</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive border-top mb-0">
                                <table class="table table-bordered table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>#89345</td>
                                        <td>Resturant</td>
                                        <td>07-12-2018</td>
                                        <td class="font-weight-semibold fs-16">$893</td>
                                        <td>
                                            <a href="#" class="badge badge-danger">Pending</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#39281</td>
                                        <td>Electorincs</td>
                                        <td>12-11-2018</td>
                                        <td class="font-weight-semibold fs-16">$254</td>
                                        <td>
                                            <a href="#" class="badge badge-primary">Completed</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#35825</td>
                                        <td>Clothing</td>
                                        <td>15-11-2018</td>
                                        <td class="font-weight-semibold fs-16">$352</td>
                                        <td>
                                            <a href="#" class="badge badge-success">Activated</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#62391</td>
                                        <td>Jobs</td>
                                        <td>10-11-2018</td>
                                        <td class="font-weight-semibold fs-16">$643</td>
                                        <td>
                                            <a href="#" class="badge badge-danger">Pending</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#92481</td>
                                        <td>Education</td>
                                        <td>07-11-2018</td>
                                        <td class="font-weight-semibold fs-16">$392</td>
                                        <td>
                                            <a href="#" class="badge badge-primary">Activated</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#29381</td>
                                        <td>Services</td>
                                        <td>31-10-2018</td>
                                        <td class="font-weight-semibold fs-16">$295</td>
                                        <td>
                                            <a href="#" class="badge badge-danger">Pending</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
