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
            <label for="seo_title" class="col-form-label">Page Title</label>
            <input id="seo_title" type="text" class="form-control" name="seo[title]" placeholder="Title"  value="{{ $seo->title }}">
        </div>
        <div class="form-group">
            <label for="seo_keywords" class="col-form-label">Keywords</label>
            <input id="seo_keywords" type="text" class="form-control" name="seo[keywords]" placeholder="Meta Keywords"  value="{{ $seo->keywords }}">
        </div>
        <div class="form-group">
            <label for="seo_description" class="col-form-label">Description</label>
            <input id="seo_description" type="text" class="form-control" name="seo[description]" placeholder="Meta Description"  value="{{ $seo->description }}">
        </div>
        <div class="form-group">
            <label class="col-form-label">Page Title CN</label>
            <input id="seo_title_cn" type="text" class="form-control" name="seo[title_cn]" placeholder="Title CN"  value="{{ $seo->title_cn }}">
        </div>
        <div class="form-group">
            <label for="seo_keywords_cn" class="col-form-label">Keywords CN</label>
            <input id="seo_keywords_cn" type="text" class="form-control" name="seo[keywords_cn]" placeholder="Keywords CN"  value="{{ $seo->keywords_cn }}">
        </div>
        <div class="form-group">
            <label for="seo_description_cn" class="col-form-label">Description CN</label>
            <input id="seo_description_cn" type="text" class="form-control" name="seo[description_cn]" placeholder="Description CN"  value="{{ $seo->description_cn }}">
        </div>
    </div>
</div>
@endif
