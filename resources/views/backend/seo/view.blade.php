@extends('backend.layouts.temp')

@section('content')
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">Edit Category</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card m-b-20">
                        <div class="card-header">
                            <h3 class="card-title">Category</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ url('admin/category/save') }}">
                                @csrf
                                @if($category->id != null)
                                    <input type="hidden" name="id" value="{{ $category->id }}">
                                @endif
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="name1">Name</label>
                                            <input type="text" class="form-control" id="name1" name="name" placeholder="Name" required value="{{ $category->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="name2">中文名称</label>
                                            <input type="text" class="form-control" id="name2" name="name_cn" placeholder="Name in Chinese" value="{{ $category->name_cn }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Url</label>
                                    <input type="text" class="form-control" name="url" placeholder="url" required value="{{ $category->url }}">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Position</label>
                                    <input type="number" class="form-control" name="position" placeholder="100" value="{{ $category->position }}">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputLevel" class="col-form-label">Level</label>
                                        <select id="inputLevel" class="form-control" name="level">
                                            <option value="1" {{ $category->level == 1? 'selected':'' }}>Main Category</option>
                                            <option value="2" {{ $category->level == 2? 'selected':'' }}>Sub Category</option>
{{--
                                            <option value="3">Second Category</option>
--}}
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4" id="main">
                                        <label for="mainmenu" class="col-form-label">Main Category</label>
                                        <select id="mainmenu" class="form-control" name="main">
                                            <option value="0">Default</option>
                                            @foreach($roots as $key=>$root)
                                                <option value="{{ $root->id }}" {{ ($category->level != 1 && $category->parent_id == $root->id)?'selected':'' }}>{{ $root->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>{{--
                                    <div class="form-group col-md-4" id="sub">
                                        <label for="inputSec" class="col-form-label">Sub Category</label>
                                        <select id="inputSec" class="form-control" name="sub">
                                            <option value="0">Wait For JS</option>
                                        </select>
                                    </div>--}}
                                </div>
                                <div class="form-group">
                                    <div class="form-label">Status</div>
                                    <label class="custom-switch">
                                        <input type="checkbox" name="status" class="custom-switch-input" {{ $category->status ==1?'checked':'' }}>
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Active/Inactive</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary ">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
