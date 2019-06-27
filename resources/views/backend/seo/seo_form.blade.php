@if(isset($seo) && $seo!==null)
<div class="card card-collapsed">
    <div class="card-header ">
        <h3 class="card-title">Seo Management</h3>
        <div class="card-options ">
            <a href="#" class="card-options-collapse" data-toggle="card-collapse" aria-expanded="false"><i class="fe fe-chevron-up"></i></a>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label class="col-form-label">Page Title</label>
            <input type="text" class="form-control" name="seo[title]" placeholder="Title" required value="{{ $seo->title }}">
        </div>
        <div class="form-group">
            <label class="col-form-label">Keywords</label>
            <input type="text" class="form-control" name="seo[keywords]" placeholder="Meta Keywords" required value="{{ $seo->keywords }}">
        </div>
        <div class="form-group">
            <label class="col-form-label">Description</label>
            <input type="text" class="form-control" name="seo[description]" placeholder="Meta Description" required value="{{ $seo->description }}">
        </div>
        <div class="form-group">
            <label class="col-form-label">Page Title CN</label>
            <input type="text" class="form-control" name="seo[title_cn]" placeholder="Title CN" required value="{{ $seo->title_cn }}">
        </div>
        <div class="form-group">
            <label class="col-form-label">Keywords CN</label>
            <input type="text" class="form-control" name="seo[keywords_cn]" placeholder="Keywords CN" required value="{{ $seo->keywords_cn }}">
        </div>
        <div class="form-group">
            <label class="col-form-label">Description CN</label>
            <input type="text" class="form-control" name="seo[description_cn]" placeholder="Description CN" required value="{{ $seo->description_cn }}">
        </div>
    </div>
</div>
@endif
