@extends('supplier.layouts.temp')

@section('content')
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">Products</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div>
                            <div class="user-tabs mb-4">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li class=""><a href="#tab1" class="active" data-toggle="tab">All</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Filter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active " id="tab1">
                                    <div class="mail-option">
                                        <div class="chk-all">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                                    Bulk Actions
                                                    <i class="fa fa-angle-down "></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Bulk Action</a></li>
                                                    <li><a href="#">Edit</a></li>
                                                    <li><a href="#">Move to Trash</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chk-all">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                                    All dates
                                                    <i class="fa fa-angle-down "></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">January, 2019</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="btn-group hidden-phone">
                                            <a  href="#" class="btn" aria-expanded="false">
                                                Apply
                                            </a>
                                        </div>
                                        <div class="btn-group hidden-phone">
                                            <a  href="#" class="btn" aria-expanded="false">
                                                Filter
                                            </a>
                                        </div>
                                        <ul class="unstyled inbox-pagination">
                                            <li><span>1-10 of 10 items</span></li>
                                            <li>
                                                <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table card-table table-bordered table-hover table-vcenter text-nowrap data-table">
                                            <thead>
                                            <tr>
                                                <th class="w-1"></th>
                                                <th class="w-1">Position</th>
                                                <th class="w-1">Name</th>
                                                <th class="w-1">Sku</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Promotion</th>
                                                <th>Feature Image</th>
                                            </tr>
                                           </thead>
                                            <tbody>
                                            @foreach($products as $key=>$product)
                                            <tr>
                                                <th>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </th>
                                                <td>{{ $product->position }}</td>
                                                <td><a href="{{ url('supplier/product/view/'.$product->id) }}" class="btn-link">{{ $product->name }}</a>
                                                </td>
                                                <td><span>{{ $product->sku }}</span></td>
                                                <td>@php
                                                        $categories = $product->getCategory();
                                                    @endphp
                                                    @foreach($categories as $category)
                                                        {{ $category->name.' ' }}
                                                    @endforeach
                                                </td>
                                                <td>@if($product->is_display)
                                                    <span class="tag tag-blue">Published</span>
                                                        @else
                                                    <span class="tag tag-red">Unpublished</span>
                                                    @endif
                                                </td>
                                                <td>@if($product->is_promote)
                                                        <span class="tag tag-blue">Promoted</span>
                                                    @else
                                                        <span class="tag tag-red">None</span>
                                                    @endif
                                                </td>
                                                <td>{{ $product->is_promote }}</td>
                                                <td>
                                                    @if(!is_null($product->image_path))
                                                    <img src="{{ asset($product->image_path) }}" class="w-7 h-7" alt="image">
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mail-option mb-0 mt-4">
                                        <div class="chk-all">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                                    Bulk Actions
                                                    <i class="fa fa-angle-down "></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Bulk Action</a></li>
                                                    <li><a href="#">Edit</a></li>
                                                    <li><a href="#">Move to Trash</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="btn-group hidden-phone">
                                            <a  href="#" class="btn" aria-expanded="false">
                                                Check For Spam
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="tab2">
                                    <div class="mail-option">
                                        <div class="chk-all">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                                    Bulk Actions
                                                    <i class="fa fa-angle-down "></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Bulk Action</a></li>
                                                    <li><a href="#">Edit</a></li>
                                                    <li><a href="#">Move to Trash</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="chk-all">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                                    All dates
                                                    <i class="fa fa-angle-down "></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">January, 2019</a></li>
                                                    <li><a href="#">December, 2018</a></li>
                                                    <li><a href="#">November, 2018</a></li>
                                                    <li><a href="#">October, 2018</a></li>
                                                    <li><a href="#">September, 2018</a></li>
                                                    <li><a href="#">August, 2018</a></li>
                                                    <li><a href="#">July, 2018</a></li>
                                                    <li><a href="#">June, 2018</a></li>
                                                    <li><a href="#">May, 2018</a></li>
                                                    <li><a href="#">April, 2018</a></li>
                                                    <li><a href="#">March, 2018</a></li>
                                                    <li><a href="#">February, 2018</a></li>
                                                    <li><a href="#">January, 2018</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="btn-group hidden-phone">
                                            <a  href="#" class="btn" aria-expanded="false">
                                                Apply
                                            </a>
                                        </div>
                                        <div class="btn-group hidden-phone">
                                            <a  href="#" class="btn" aria-expanded="false">
                                                Filter
                                            </a>
                                        </div>
                                        <ul class="unstyled inbox-pagination">
                                            <li><span>1-10 of 452 items</span></li>
                                            <li>
                                                <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
