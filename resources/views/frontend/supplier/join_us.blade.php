@extends(_get_frontend_layout_path('temp'))

@section('content')

    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="/assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">Become a Supplier</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->


    <!--Add posts-section-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="card mb-xl-0">
                        <div class="card-header">
                            <h3 class="card-title">Register Now</h3>
                        </div>
                        <div class="card-body">
                            <form id="commentForm" method="post" class="form-horizontal mb-0" action="{{ url('supplier/register') }}">
                                @csrf
                                <div id="rootwizard" class="border pt-0">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="nav-item"><a href="#first" data-toggle="tab" class="nav-link font-bold">Account Details</a></li>
                                        <li class="nav-item"><a href="#second" data-toggle="tab" class="nav-link font-bold">Business Details</a></li>
                                    </ul>
                                    <div class="tab-content card-body mt-3 mb-0 b-0">
                                        <div class="tab-pane fade" id="first">
                                            <div class="control-group form-group">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control required" name="user[name]" placeholder="Name">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control required" name="user[email]" placeholder="Email Address">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control required" id="password" name="user[password]" placeholder="Password">
                                            </div>
                                           {{-- <div class="control-group form-group mb-0">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control required" id="password_confirm" placeholder="Password" oninput="check(this)">
                                            </div>--}}
                                            <ul class="list-inline wizard mb-0 mt-4">
                                                <li class="next list-inline-item ml-auto">
                                                    <a id="next_btn" href="javascript:void(0)" class="btn btn-primary  mb-0 mr-2 waves-effect waves-light">Continue</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="second">
                                            <div class="control-group form-group">
                                                <label class="form-label">Business Name</label>
                                                <input type="text" class="form-control required" name="name" placeholder="Business Name">
                                            </div>
                                            <div class="control-group form-group">
                                                <div class="control-group form-group">
                                                    <div class="form-group">
                                                        <label class="form-label text-dark">Category</label>
                                                        <select class="form-control custom-select required category" name="category">
                                                            @foreach($roots as $key=>$value)
                                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline wizard mb-0 mt-4">
                                                <li class="previous list-inline-item"><a href="#" class="btn btn-pink mb-0 waves-effect waves-light">Previous</a>
                                                </li>
                                                <li class="next list-inline-item float-right">
                                                    <button type="submit" class="btn btn-primary  mb-0 mr-2 waves-effect waves-light">Submit</button>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Terms And Conditions</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled widget-spec vertical-scroll mb-0">
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </section>
    <!--/Add posts-section-->
    @include('frontend.sections.pricing_table')

    @include('frontend.sections.news_letter')
@endsection

@section('js')

@endsection
