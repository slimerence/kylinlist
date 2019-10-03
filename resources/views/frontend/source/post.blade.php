@extends(_get_frontend_layout_path('temp'))

@section('content')
    @include('frontend.supplier.elements.search')

    <!--Add posts-section-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-md-12">
                    <form id="app" method="post"  action="{{ url('post-request') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card mb-lg-0">
                            <div class="card-header ">
                                <h3 class="card-title">Tell us what you want to buy</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label text-dark">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="" name="source[name]" required value="{{ session('source.name') }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">Category</label>
                                    <select class="form-control custom-select" name="source[category_id]" required>
                                        @foreach($roots as $key=>$root)
                                            <option {{ session('source.category_id') == $root->id ? 'selected':'' }} value="{{ $root->id }}">{{ $root->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label text-dark">Product Description</label>
                                    <textarea name="source[description]" class="form-control" rows="6" placeholder="text here.." required>{{ session('source.description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <el-upload
                                        class="upload-demo"
                                        action="{{ url('api/sourcing-request/attachment') }}"
                                        :on-preview="handlePreview"
                                        :on-remove="handleRemove"
                                        :on-success="handleSuccess"
                                        :before-remove="beforeRemove"
                                        multiple
                                        :limit="3"
                                        :on-exceed="handleExceed"
                                        :file-list="fileList">
                                        <el-button size="small" type="primary">Upload Attachment Files</el-button>
                                        <div slot="tip" class="el-upload__tip">只能上传jpg/png文件，且不超过500kb</div>
                                    </el-upload>
                                </div>
                                <input type="hidden" name="attachment" v-model="attachments">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Request Quantity</label>
                                            <input type="text" class="form-control"  placeholder="quantity" name="source[quantity]" value="{{ session('source.quantity') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">&nbsp;</label>
                                            <input type="text" class="form-control" placeholder="unit:piece, pair, ton, etc." name="source[unit]" required value="{{ session('source.unit') }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <label class="form-label">Valid Date</label>
                                            <input type="date" class="form-control" name="source[valid_date]" required value="{{ session('source.valid_date') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <button type="submit" class="btn btn-primary">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Terms And Conditions</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled widget-spec  mb-0">
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
                                </li>
                                <li class="ml-5 mb-0">
                                    <a href="tips.html"> View more..</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Benefits Of Premium Ad</h3>
                        </div>
                        <div class="card-body pb-2">
                            <ul class="list-unstyled widget-spec vertical-scroll mb-0">
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium Ads Active
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Safety Tips For Buyers</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled widget-spec  mb-0">
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Meet Seller at public Place
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Check item before you buy
                                </li>
                                <li>
                                    <i class="fa fa-check text-success" aria-hidden="true"></i> Pay only after collecting item
                                </li>
                                <li class="ml-5 mb-0">
                                    <a href="" id="test" v-on:click="test"> View more..</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </section>
    <!--/Add posts-section-->

    @include('frontend.sections.news_letter')
@endsection
@section('js')
    <script>
        new Vue({
            el:'#app',
            data() {
                return {
                    fileList: [],
                    attachments:[],
                    files: [{!! session('attachment') !!}],
                };
            },
            created: function(){
                console.log(this.files);
                this._loadUserAttachments();
            },
            methods: {
                handleRemove(file, fileList) {
                    console.log(file, fileList);
                },
                handlePreview(file) {
                    console.log(file);
                },
                handleExceed(files, fileList) {
                    this.$message.warning(`当前限制选择 3 个文件，本次选择了 ${files.length} 个文件，共选择了 ${files.length + fileList.length} 个文件`);
                },
                beforeRemove(file, fileList) {
                    return this.$confirm(`确定移除 ${ file.name }？`);
                },
                handleSuccess: function(res, file, fileList){
                    //console.log(res.error_no);
                    console.log(res);
                    if(res.error_no === 100){
                        this.fileList.push(file);
                        this.attachments.push(res.data.id);
                    }
                },
                // 获取所有提交过的文档的记录, 然后分别初始化
                _loadUserAttachments: function(){
                    // 如果没登录, 那么不需要去获取
                    axios.post(
                        '/api/sourcing-request/load',
                        {lists:this.files}
                    ).then(res=>{
                        if(res.data.error_no === 100){
                            this.fileList = res.data.data;
                            let medias = [];
                            this.fileList.forEach(function (media) {
                                medias.push(media.id);
                                console.log(medias);
                            });
                            this.attachments = medias;
                        }
                    });
                },

            }
        })
    </script>
@endsection
