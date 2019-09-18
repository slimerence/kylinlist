@extends('backend.layouts.temp')

@section('content')
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h1 class="page-title">Supplier Check</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/suppliers') }}">Suppliers</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div>
                            <div class="user-tabs mb-4">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li class=""><a href="#tab1" class="active" data-toggle="tab">Profile</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Products</a></li>
                                    <li style="margin-left: auto;border-left: none;"><a href="{{ url('/admin/suppliers/toggle/'.$supplier->id) }}" class="btn {{ _getVerifyStatus(\App\Model\Suppliers\SupplierManagement::$TYPE_SUPPLIER,$supplier->id)==0?'btn-danger':'btn-primary' }}">Verify</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body p-0">
                            <div class="tab-content p-5">
                                <div class="tab-pane active " id="tab1">
                                    <div class="row ">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Contact Person</h3>
                                                </div>
                                                <div class="card-body">
                                                    @include('backend.supplier.pane.profile_form')
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            @include('backend.supplier.pane.basic_form')
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2">

                                    @include('backend.supplier.pane.product_list')
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    @include('vuejs.supplier_management')
@endsection
