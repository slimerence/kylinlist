@extends('backend.layouts.temp')

@section('content')
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">Edit Blog</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card m-b-20">
                        <div class="card-header">
                            <h3 class="card-title">Blog</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ url('admin/blog/save') }}" enctype="multipart/form-data">
                                @csrf
                                @if($blog->id != null)
                                    <input type="hidden" name="id" value="{{ $blog->id }}">
                                @endif
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Blog Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="title" required value="{{ $blog->title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="url" class="col-form-label">Url</label>
                                            <input id="url" type="text" class="form-control" name="url" placeholder="url" required value="{{ $blog->url }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Feature Image</label>
                                            @if(false)
                                                <input type="file" name="image" class="dropify" data-default-file="{{ asset($category->getImage()->url)}}" data-height="180"/>
                                            @else
                                                <input type="file" name="image" class="dropify" data-height="120"/>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label">Status</label>
                                        <select class="form-control" name="status" required>
                                            <option value="0">Unpublished</option>
                                            <option value="1">Published</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="category" class="col-form-label">Category</label>
                                        <select class="form-control" name="category" id="category">
                                            @foreach($categories as $key=>$value)
                                                <option value="{{ $value->id }}">
                                                    {{ $value->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                     <div class="form-group col-md-12">
                                        <label for="content" class="col-form-label">Content</label>
                                        <textarea class="form-control" id="content" name="content" rows="5" placeholder="content"></textarea>
                                     </div>
                                </div>


                                @include('backend.seo.seo_form')
                                <button type="submit" class="btn btn-primary ">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
