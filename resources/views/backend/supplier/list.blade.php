@extends('backend.layouts.temp')

@section('content')
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">Category Management</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Category Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>

            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Supplier List</div>
                            <a href="{{ url('admin/category/create') }}" class="btn btn-primary ml-auto"><i class="fe fe-plus mr-2"></i>Create New</a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="data-table hover table-bordered border-top-0 border-bottom-0" >
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Main Category</th>
                                        <th>Last Update</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($suppliers as $key=>$supplier)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $supplier->name }}</td>
                                            <td>{{ $supplier->category->name }}</td>
                                            <td>{{ $supplier->updated_at->format('Y-m-d H:i') }}</td>
                                            <td>
                                                @if(_getVerifyStatus(\App\Model\Suppliers\SupplierManagement::$TYPE_SUPPLIER,$supplier->id))
                                                    <a class="tag tag-success" href="{{ url('admin/suppliers/toggle/'.$supplier->id) }}">Active</a>
                                                @else
                                                    <a class="tag tag-red" href="{{ url('admin/suppliers/toggle/'.$supplier->id) }}">Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-list">
                                                    <a href="{{ url('admin/suppliers/delete/'.$supplier->id) }}" class="btn btn-primary"><i class="fe fe-trash mr-2"></i>Delete</a>
                                                    <a href="{{ url('admin/suppliers/edit/'.$supplier->id) }}" class="btn btn-danger"><i class="fe fe-play mr-2"></i>Check</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Level</th>
                                        <th>Url</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
