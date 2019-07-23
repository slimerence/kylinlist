@extends('supplier.layouts.temp')

@section('content')
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h1 class="page-title">Edit Product</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manage</li>
                </ol>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div>
                            <div class="user-tabs mb-4">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li class=""><a href="#tab1" class="active" data-toggle="tab">General</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Images</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body p-0">
                            <div class="tab-content">
                                <div class="tab-pane active " id="tab1">
                                    <form class="form-horizontal p-5" method="post" action="{{ url('supplier/product/update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="p[supplier_id]" value="{{ $user->supplier->id }}">
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label mt-2" id="examplenameInputname2">Name <i>(required)</i></label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="examplenameInputname3" name="p[name]" placeholder="Name" value="{{ $product->name }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label mt-2" > Sku (required)</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control"  name="p[sku]" placeholder="sku" value="{{ $product->sku }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label mt-2">Unit</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="p[unit]" placeholder="Unit text" value="{{ $product->unit }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label mt-2">Min Order</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" name="p[min_order]" placeholder="Minimum order number" value="{{ $product->min_order }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label mt-2">Position</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" name="p[position]" placeholder="Position Data, Number only" value="{{ $product->position }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group justify-content-end">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label mt-2">Display</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <label class="custom-control custom-checkbox mb-0">
                                                        <input type="checkbox" class="custom-control-input" name="p[is_display]" {{ $product->is_display ==1? 'checked':'' }}>
                                                        <span class="custom-control-label text-dark">Published/Unpublished</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group justify-content-end">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label mt-2">Promotion</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <label class="custom-control custom-checkbox mb-0">
                                                        <input type="checkbox" class="custom-control-input" name="p[is_promote]" {{ $product->is_promote ==1? 'checked':'' }}>
                                                        <span class="custom-control-label text-dark">Is promote product?</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label">Category</label>
                                                </div>
                                                <div class="col-md-9">
                                                    @foreach($cats as $cat)
                                                        <label class="custom-control custom-checkbox mb-0">
                                                            <input type="checkbox" class="custom-control-input" name="cat[]" value="{{$cat->id}}" />
                                                            <span class="custom-control-label text-dark">{{ $cat->name }}</span><br />
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label mt-2">Feather Image</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="p[image_path]">
                                                            <label class="custom-file-label">Upload Images</label>
                                                        </div>
                                                    </div>
                                                    @if(!is_null($product->image_path))
                                                    <div class="p-2 border mb-4">
                                                        <div class="upload-images d-flex">
                                                            <div>
                                                                <img src="{{ $product->image_path }}" alt="img" class="w73 h73 border p-0">
                                                            </div>
                                                            <div class="float-right ml-auto">
                                                                <a href="{{ url('supplier/product/remove_image/'.$product->id) }}" class="float-right btn btn-icon btn-danger btn-sm mt-5"><i class="fa fa-trash-o"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label mt-2">Short Description</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea type="number" class="form-control" name="p[short_description]">{!! $product->short_description !!}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="form-label mt-2">Description</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea type="number" class="form-control" name="p[description]">{!! $product->description !!}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-0 row justify-content-end">
                                            <div class="col-md-3">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save Product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane " id="tab2">
                                    <form class="form-horizontal p-5" id="product_upload">
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="form-label mb-0">
                                                        <el-upload
                                                            action="https://jsonplaceholder.typicode.com/posts/"
                                                            list-type="picture-card"
                                                            :on-preview="handlePictureCardPreview"
                                                            :on-remove="handleRemove">
                                                            <i class="el-icon-plus"></i>
                                                        </el-upload>
                                                        <el-dialog :visible.sync="dialogVisible">
                                                            <img width="100%" :src="dialogImageUrl" alt="">
                                                        </el-dialog>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="p-5 border-top">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
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

@section('js')
    <script>
    new Vue({
        el: '#product_upload',
        data() {
            return {
                dialogImageUrl: '',
                dialogVisible: false
            };
        },
        methods: {
            handleRemove(file, fileList) {
                console.log(file, fileList);
            },
            handlePictureCardPreview(file) {
                this.dialogImageUrl = file.url;
                this.dialogVisible = true;
            }
        }
    })
    </script>
@endsection
