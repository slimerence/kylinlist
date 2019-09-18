<div class="table-responsive">
    <table class="table card-table table-bordered table-hover table-vcenter text-nowrap data-table">
        <thead>
        <tr>
            <th class="w-1"></th>
            <th class="w-1">Position</th>
            <th class="w-1">Name</th>
            <th class="w-1">Sku</th>
            <th>Category</th>
            <th>Verify</th>
            <th>Status</th>
            <th>Promotion</th>
            <th>Feature Image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key=>$product)
            <tr>
                <th>
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                        <span class="custom-control-label"></span>
                    </label>
                </th>
                <td>{{ $product->position }}</td>
                <td><a href="{{ url('admin/suppliers/product/view/'.$product->id) }}" class="btn-link">{{ $product->name }}</a>
                </td>
                <td><span>{{ $product->sku }}</span></td>
                <td>@php
                        $categories = $product->getCategory();
                    @endphp
                    @foreach($categories as $category)
                        {{ $category->name.' ' }}
                    @endforeach
                </td>
                <td>
                    @if(_getVerifyStatus(\App\Model\Suppliers\SupplierManagement::$TYPE_PRODUCT,$product->id))
                        <a class="tag tag-success" href="{{ url('admin/supplier/product/toggle/'.$product->id) }}">Verified</a>
                    @else
                        <a class="tag tag-warning" href="{{ url('admin/supplier/product/toggle/'.$product->id) }}">Unverified</a>
                    @endif
                </td>
                <td>@if($product->is_display)
                        <span class="tag tag-blue">Published</span>
                    @else
                        <span class="tag tag-red">Unpublished</span>
                    @endif
                </td>
                <td>@if($product->is_promote)
                        <span class="tag tag-blue">Promoted</span>
                    @else
                        <span class="tag tag-red">None</span>
                    @endif
                </td>
                <td>
                    @if(!is_null($product->image_path))
                        <img src="{{ asset($product->image_path) }}" class="w-7 h-7" alt="image">
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
