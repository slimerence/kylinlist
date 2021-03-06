@extends('backend.layouts.temp')

@section('content')
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">Blog Management</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Blog Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>

            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Blog List
                            </div>
                            <a href="{{ url('admin/blog/create') }}" class="btn btn-primary ml-auto"><i class="fe fe-plus mr-2"></i>Create New</a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="data-table hover table-bordered border-top-0 border-bottom-0" >
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Preview</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blogs as $key=>$blog)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->category->name }}</td>
                                        <td> @if($blog->status)
                                                <span class="tag tag-primary">Active</span>
                                            @else
                                                <span class="tag tag-red">Inactive</span>
                                            @endif
                                        </td>
                                        <td>@if($blog->feature_image != null)
                                            <img style="width: 200px;" src="{{ $blog->feature_image}}" alt="{{ $blog->title }}">
                                                @else
                                                <a href="{{ url($blog->url) }}" target="_blank" class="btn btn-primary">View</a>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-list">
                                                <a href="{{ url('admin/blog/delete/'.$blog->id) }}" class="btn btn-primary"><i class="fe fe-trash mr-2"></i>Delete</a>
                                                <a href="{{ url('admin/blog/edit/'.$blog->id) }}" class="btn btn-danger"><i class="fe fe-play mr-2"></i>Edit</a>
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
