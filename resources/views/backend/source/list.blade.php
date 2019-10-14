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
                                        <th>Purchase Quantity</th>
                                        <th>Main Category</th>
                                        <th>Last Update</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sources as $key=>$source)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $source->name }}</td>
                                            <td>
                                                {{ $source->quantity.' '.$source->unit }}
                                            </td>
                                            <td>{{ $source->category->name }}</td>
                                            <td>{{ $source->updated_at->format('Y-m-d H:i') }}</td>
                                            <td>
                                                @if(_getVerifyStatus(\App\Model\Suppliers\SupplierManagement::$TYPE_SOURCE,$source->id))
                                                    <a class="tag tag-success" href="{{ url('admin/source/toggle/'.$source->id) }}">Active</a>
                                                @else
                                                    <a class="tag tag-red" href="{{ url('admin/source/toggle/'.$source->id) }}">Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-list">
                                                    <a href="{{ url('admin/source/delete/'.$source->id) }}" class="btn btn-primary"><i class="fe fe-trash mr-2"></i>Delete</a>
                                                    <a href="{{ url('admin/source/edit/'.$source->id) }}" class="btn btn-danger"><i class="fe fe-play mr-2"></i>Check</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
