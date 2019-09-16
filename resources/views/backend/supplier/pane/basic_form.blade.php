<form class="card" method="post" action="{{ url('admin/suppliers/profile') }}" id="app">
    @csrf
    <div class="card-header">
        <h3 class="card-title">Edit Profile</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Company</label>
                    <input type="text" name="supplier[name]" class="form-control"  placeholder="Company" value="{{ $supplier->name }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Business Type</label>
                    <input type="text" name="supplier[business_type]" class="form-control"  placeholder="Type" value="{{ $supplier->business_type }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Main Product</label>
                    <input type="text" name="supplier[main_product]" class="form-control"  placeholder="Type" value="{{ $supplier->main_product }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Main Category</label>
                    <select class="form-control custom-select" name="supplier[category_id]">
                        @foreach($cats as $cat)
                            <option value="{{ $cat->id }}" {{ $supplier->category_id == $cat->id? 'selected':'' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">Website(Optional)</label>
                    <input type="text" name="supplier[link]" class="form-control" placeholder="Company" value="{{ $supplier->link }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Address Line 1</label>
                    <input type="text" name="supplier[street]" class="form-control" placeholder="Home Address" value="{{ $supplier->street }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Address Line 2</label>
                    <input type="text" name="supplier[street2]" class="form-control" placeholder="Home Address" value="{{ $supplier->street2 }}">
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group">
                    <label class="form-label">City</label>
                    <input type="text" name="supplier[city]" class="form-control" placeholder="City" value="{{ $supplier->city }}">
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group">
                    <label class="form-label">State</label>
                    <input type="text" name="supplier[state]" class="form-control" placeholder="State" value="{{ $supplier->state }}">
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group">
                    <label class="form-label">Postal Code</label>
                    <input type="number" name="supplier[post]" class="form-control" placeholder="Post" value="{{ $supplier->post }}">
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
                        action="{{ url('api/supplier/profile/image/'.$supplier->id) }}"
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
                    <textarea rows="7" class="form-control" placeholder="Enter About your description" name="supplier[description]">{!! $supplier->description !!} </textarea>
                </div>
            </div>


        </div>
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </div>
</form>
