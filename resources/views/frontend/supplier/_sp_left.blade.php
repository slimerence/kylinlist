<!--Left Side Content-->
<div class="col-xl-3 col-lg-4 col-md-12">
    <div class="card">
        @include('frontend.supplier.elements.category_filter')
        <div class="card-header border-top">
            <h3 class="card-title">Price Range</h3>
        </div>
        <div class="card-body">
            <h6>
                <label for="price">Price Range:</label>
                <input type="text" id="price">
            </h6>
            <div id="mySlider"></div>
        </div>
        <div class="card-header border-top">
            <h3 class="card-title">Condition</h3>
        </div>
        <div class="card-body">
            <div class="filter-product-checkboxs">
                <label class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                    <span class="custom-control-label">
											New
										</span>
                </label>
                <label class="custom-control custom-checkbox mb-0">
                    <input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
                    <span class="custom-control-label">
											Used
										</span>
                </label>
            </div>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-pink btn-block">Apply Filter</a>
        </div>
    </div>
    @include('frontend.supplier.elements.social_share')
</div>
<!--/Left Side Content-->
