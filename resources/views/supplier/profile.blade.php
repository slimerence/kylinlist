@extends('supplier.layouts.temp')

@section('content')
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">Edit Profile</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                </ol>

            </div>
            <div class="row ">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contact Person</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ url('supplier/profile') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-auto">
                                        @if($user->supplier->avatar_path !==null)
                                        <img class="avatar brround avatar-xl" src="{{ asset($user->supplier->avatar_path) }}" alt="Avatar-img">
                                        @endif
                                    </div>

                                    <div class="col">
                                        <h3 class="mb-1 ">{{ $user->supplier->name }}</h3>
                                        <p class="mb-4 ">{{ $user->name }}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="supplier[avatar_path]">
                                        <label class="custom-file-label">Upload New Avatar</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact Name</label>
                                    <input class="form-control" type="text" name="supplier[contact_person]" value="{{ $user->supplier->contact_person }}" required placeholder="your name"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact Email</label>
                                    <input class="form-control" type="email" name="supplier[contact_email]" value="{{ $user->supplier->contact_email }}" required placeholder="your-email@domain.com"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <input class="form-control" type="number" name="supplier[contact_number]" value="{{ $user->supplier->contact_number }}" required placeholder="01 2456 0512"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contact Info</label>
                                    <textarea class="form-control" rows="5" name="supplier[contact_info]">{!!$user->supplier->contact_info!!}</textarea>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="card" method="post" action="{{ url('supplier/profile') }}" id="app">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Company</label>
                                        <input type="text" name="supplier[name]" class="form-control"  placeholder="Company" value="{{ $user->supplier->name }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Business Type</label>
                                        <input type="text" name="supplier[business_type]" class="form-control"  placeholder="Type" value="{{ $user->supplier->business_type }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Main Product</label>
                                        <input type="text" name="supplier[main_product]" class="form-control"  placeholder="Type" value="{{ $user->supplier->main_product }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Main Category</label>
                                        <select class="form-control custom-select" name="supplier[category_id]">
                                            @foreach($cats as $cat)
                                            <option value="{{ $cat->id }}" {{ $user->supplier->category_id == $cat->id? 'selected':'' }}>{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Website(Optional)</label>
                                        <input type="text" name="supplier[link]" class="form-control" placeholder="Company" value="{{ $user->supplier->link }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Address Line 1</label>
                                        <input type="text" name="supplier[street]" class="form-control" placeholder="Home Address" value="{{ $user->supplier->street }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Address Line 2</label>
                                        <input type="text" name="supplier[street2]" class="form-control" placeholder="Home Address" value="{{ $user->supplier->street2 }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <input type="text" name="supplier[city]" class="form-control" placeholder="City" value="{{ $user->supplier->city }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">State</label>
                                        <input type="text" name="supplier[state]" class="form-control" placeholder="State" value="{{ $user->supplier->state }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Postal Code</label>
                                        <input type="number" name="supplier[post]" class="form-control" placeholder="Post" value="{{ $user->supplier->post }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-label">Country</label>
                                        <select class="form-control custom-select" name="supplier[country]">
                                            <option value="Australia" selected>Australia</option>
                                            <option value="China">China</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Upload Profile Image</label>
                                        <el-upload
                                            class="avatar-uploader"
                                            action="{{ url('api/supplier/profile/image/'.$user->supplier->id) }}"
                                            :show-file-list="false"
                                            :on-success="handleAvatarSuccess"
                                            :before-upload="beforeAvatarUpload">
                                            <img v-if="imageUrl" :src="imageUrl" class="el-avatar">
                                            <i v-else class="el-icon-plus avatar-uploader-icon"></i>
                                        </el-upload>

                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group mb-0">
                                        <label class="form-label">About Me</label>
                                        <textarea rows="7" class="form-control" placeholder="Enter About your description" name="supplier[description]">{!! $user->supplier->description !!} </textarea>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    <style scoped>
        .avatar-uploader .el-upload {
            border: 1px dashed #d9d9d9;
            border-radius: 6px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            width: 100%;
        }
        .avatar-uploader .el-upload:hover {
            border-color: #409EFF;
        }
        .avatar-uploader-icon {
            font-size: 28px;
            color: #8c939d;
            width: 100%;
            height: 178px;
            line-height: 178px;
            text-align: center;
        }
        .el-avatar {
            width: 100%;
            height: 178px;
            display: block;
        }
    </style>
    <script>
        new Vue({
            el: '#app',
            data() {
                return {
                    imageUrl: '{{ $user->supplier->getProfileImage()->url }}'
                };
            },

            methods: {
                handleAvatarSuccess(res, file) {
                    this.imageUrl = URL.createObjectURL(file.raw);
                },
                beforeAvatarUpload(file) {
                    const isJPG = file.type === 'image/jpeg';
                    const isLt2M = file.size / 1024 / 1024 < 2;

                    if (!isJPG) {
                        this.$message.error('上传头像图片只能是 JPG 格式!');
                    }
                    if (!isLt2M) {
                        this.$message.error('上传头像图片大小不能超过 2MB!');
                    }
                    return isJPG && isLt2M;
                }
            }
        })
    </script>

@endsection
