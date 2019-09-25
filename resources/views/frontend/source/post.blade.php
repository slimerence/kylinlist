@extends(_get_frontend_layout_path('temp'))

@section('content')
    @include('frontend.supplier.elements.search')

    <!--Add posts-section-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-md-12">
                    <div class="card mb-lg-0">
                        <div class="card-header ">
                            <h3 class="card-title">Tell us what you want to buy</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label text-dark">Product Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="form-label text-dark">Category</label>
                                <select class="form-control custom-select">
                                    <option value="0">Select Option</option>
                                    <option value="1">RealEstate</option>
                                    <option value="2">Restaurant</option>
                                    <option value="3">Health & Fitness</option>
                                    <option value="4">Travel</option>
                                    <option value="5">Computer</option>
                                    <option value="6">Electronics</option>
                                    <option value="7">Jobs</option>
                                    <option value="8">Beauty & Spa</option>
                                    <option value="9">Clothing</option>
                                    <option value="10">Home & Furinture</option>
                                    <option value="11">Vechicles</option>
                                    <option value="12">Education</option>
                                    <option value="13">Services</option>
                                    <option value="14">Events</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label text-dark">Product Description</label>
                                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="text here.."></textarea>
                            </div>

                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="example-file-input-custom">
                                    <label class="custom-file-label">Upload Images</label>
                                </div>
                            </div>
                            <div class="p-2 border mb-4">
                                <div class="upload-images d-flex">
                                    <div>
                                        <img src="../assets/images/products/h1.jpg" alt="img" class="w73 h73 border p-0">
                                    </div>
                                    <div class="ml-3 mt-2">
                                        <h6 class="mb-0 mt-3 font-weight-bold">h1.jpg</h6>
                                        <small>4.5kb</small>
                                    </div>
                                    <div class="float-right ml-auto">
                                        <a href="#" class="float-right btn btn-icon btn-danger btn-sm mt-5" ><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 border mb-4">
                                <div class="upload-images d-flex">
                                    <div>
                                        <img src="../assets/images/products/h5.jpg" alt="img" class="w73 h73 border p-0">
                                    </div>
                                    <div class="ml-3 mt-2">
                                        <h6 class="mb-0 mt-3 font-weight-bold">h5.jpg</h6>
                                        <small>4.5kb</small>
                                    </div>
                                    <div class="float-right ml-auto">
                                        <a href="#" class="float-right btn btn-icon btn-danger btn-sm mt-5" ><i class="fa fa-trash-o "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Phone Number</label>
                                        <input type="number" class="form-control" placeholder="Number">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <a href="#" class="btn btn-success">Submit Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Terms And Conditions</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled widget-spec  mb-0">
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
                                </li>
                                <li class="ml-5 mb-0">
                                    <a href="tips.html"> View more..</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Benefits Of Premium Ad</h3>
                        </div>
                        <div class="card-body pb-2">
                            <ul class="list-unstyled widget-spec vertical-scroll mb-0">
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Safety Tips For Buyers</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled widget-spec  mb-0">
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Meet Seller at public Place
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Check item before you buy
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Pay only after collecting item
                                </li>
                                <li class="ml-5 mb-0">
                                    <a href="tips.html"> View more..</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </section>
    <!--/Add posts-section-->

    @include('frontend.sections.news_letter')
@endsection
