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
            <div class="row" id="app">
                <div class="col-xl-3 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">My Dashboard</h3>
                        </div>
                        <div class="card-body text-center item-user">
                            <div class="profile-pic">
                                <div class="profile-pic-img">
                                    <a href="#" data-toggle="modal" data-target="#avatar">
                                    <span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="" data-original-title="online"></span>
                                    <img v-if="imageUrl" :src="imageUrl" class="brround" alt="user">
                                    </a>
                                </div>
                                <a href="{{ url('/user/dashboard') }}" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">Robert McLean</h4></a>
                            </div>
                        </div>
                        @include('frontend.customer.elements.side_menu')
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
                                    <option value="0" selected>All Categories</option>
                                    @foreach($roots as $root)
                                        <option value="{{ $root->id }}">{{ $root->name }}</option>
                                    @endforeach
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
                        <form action="{{ url('user/profile/update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                                <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    @include('frontend.customer.plugin.avatar_modal')
                                    <div class="form-group">
                                        <label class="form-label">Contact Person</label>
                                        <input type="text" class="form-control" placeholder="Contact Name" name="p[contact_person]" value="{{ $profile->contact_person }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Contact Email</label>
                                        <input type="text" class="form-control" placeholder="Contact Email" name="p[contact_email]" value="{{ $profile->contact_email }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Contact Number</label>
                                        <input type="number" class="form-control" placeholder="Contact Number" name="p[contact_number]" value="{{ $profile->contact_number }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Display Image</label>
                                        @if($profile->avatar_path !== null)
                                            <input type="file" name="avatar" class="dropify" data-default-file="{{ asset($profile->avatar_path)}}" />
                                        @else
                                            <input type="file" name="avatar" class="dropify" />
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Company Name</label>
                                        <input type="text" class="form-control" placeholder="Company Name" name="p[company_name]" value="{{ $profile->company_name }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Street 1</label>
                                        <input type="text" class="form-control" placeholder="Address 1" name="p[street]" value="{{ $profile->street }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Street 2</label>
                                        <input type="text" class="form-control" placeholder="Address 2" name="p[street2]" value="{{ $profile->street2 }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control" placeholder="City" name="p[city]" value="{{ $profile->city }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Postal Code</label>
                                        <input type="number" class="form-control" placeholder="ZIP Code" name="p[post]" value="{{ $profile->post }}">
                                    </div>
                                </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control" placeholder="State" name="p[state]" value="{{ $profile->state }}">
                                        </div>
                                    </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Country</label>
                                        <select name="p[country]" class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" data-placeholder="Select">
                                            <optgroup label="Country">
                                                <option disabled>--Select--</option>
                                                <option {{ $profile->country =='Australia'?'selected':'' }} value="Australia">Australia</option>
                                                <option {{ $profile->country =='China'?'selected':'' }} value="China">China</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">About Me</label>
                                        <textarea rows="5" class="form-control " name="p[description]" placeholder="Enter About your description">{!! $profile->description !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Updated Profile</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/User Dashboard-->
@endsection
@section('js')
    @include('vuejs.user_profile')
@endsection
