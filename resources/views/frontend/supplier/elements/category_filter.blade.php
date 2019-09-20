<div class="card-header">
    <h3 class="card-title">Categories</h3>
</div>
<div class="card-body">
    <div class="" id="container">
        <div class="filter-product-checkboxs">
            @foreach($roots as $key=>$root)
                <label class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
                    <span class="custom-control-label">
                        @if(false)
                        <a href="{{ url($root->url) }}" class="text-dark">{{ $root->name }}<span class="label label-secondary float-right">{{ count($root->supplier) }}</span></a>
                        @endif
                        <a href="{{ url($root->url) }}" class="text-dark">{{ $root->name }}</a>
                    </span>
                </label>
            @endforeach
        </div>
    </div>
</div>
