<div class="tab-pane userprof-tab" id="tab-7">
    <div class="table-responsive border-top">
        <table class="table table-bordered table-hover mb-0 text-nowrap">
            <thead>
            <tr>
                <th></th>
                <th>Item</th>
                <th>Category</th>
                <th>Price</th>
                <th>Ad Status</th>
                <th >Action</th>
            </tr>
            </thead>
            <tbody>
            @for($i=0;$i<10;$i++)
                <tr>
                    <td>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                            <span class="custom-control-label"></span>
                        </label>
                    </td>
                    <td>
                        <div class="media mt-0 mb-0">
                            <div class="card-aside-img">
                                <a href="{{ url('product') }}"></a>
                                <img src="{{ asset('images/products/TP0'.($i%4+1).'.jpg') }}" alt="img">
                            </div>
                            <div class="media-body">
                                <div class="card-item-desc ml-4 p-0 mt-2">
                                    <a href="{{ url('product') }}" class="text-dark"><h4 class="font-weight-semibold">Camera 2d33</h4></a>
                                    <a href="#"><i class="fa fa-clock-o mr-1"></i> Feb-21-2018 , 16:54</a><br>
                                    <a href="#"><i class="fa fa-tag mr-1"></i>sale</a>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>Electronics</td>
                    <td class="font-weight-semibold fs-16">$54</td>
                    <td>
                        <a href="#" class="badge badge-warning">Published</a>
                    </td>
                    <td>
                        <a class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                        <a class="btn btn-info btn-sm text-white" data-toggle="tooltip" data-original-title="Save to Wishlist"><i class="fa fa-heart-o"></i></a>
                        <a class="btn btn-primary btn-sm text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>
