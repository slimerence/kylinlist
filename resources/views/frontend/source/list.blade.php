@extends(_get_frontend_layout_path('temp'))

@section('content')
    @include('frontend.supplier.elements.search')

    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1>Best ICO Offers</h1>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="table-responsive p-5">
                            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table ico-listing table-striped table-bordered text-nowrap dataTable no-footer" id="example" role="grid" aria-describedby="example_info">
                                <thead>
                                <tr class="border-bottom" role="row"><th class="font-weight-bold sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 98px;">Name</th><th class="font-weight-bold sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Icon: activate to sort column ascending" style="width: 62px;">Icon</th><th class="font-weight-bold sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Rating : activate to sort column ascending" style="width: 93px;">Rating </th><th class="font-weight-bold sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start Price: activate to sort column ascending" style="width: 136px;">Start Price</th><th class="font-weight-bold sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Funding Target: activate to sort column ascending" style="width: 179px;">Funding Target</th><th class="font-weight-bold sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="ICO Date: activate to sort column ascending" style="width: 124px;">ICO Date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 132px;"></th></tr>
                                </thead>
                                <tbody class="border-top">
















                                <tr class="border-bottom odd" role="row">
                                    <td class="sorting_1">Bitcoin</td>
                                    <td><img src="../assets/images/crypto-currencies/bitcoin.svg" alt="Bitcoin" class="w-7 h-7"></td>
                                    <td>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="2">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-red">$19</td>
                                    <td class="">$64,52,351</td>
                                    <td>29Th Jan 2019</td>
                                    <td class=""><a href="ico.html" class="btn btn-primary">View Details</a></td>
                                </tr><tr class="border-bottom even" role="row">
                                    <td class="sorting_1">Bitcoin Cash</td>
                                    <td><img src="../assets/images/crypto-currencies/bitcoincash.svg" alt="Bitcoin" class="w-7 h-7"></td>
                                    <td>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="5">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-red">$28</td>
                                    <td class="">$3,54,652</td>
                                    <td>29Th Jan 2019</td>
                                    <td class=""><a href="ico.html" class="btn btn-primary">View Details</a></td>
                                </tr><tr class="border-bottom odd" role="row">
                                    <td class="sorting_1">Bitcoin Gold</td>
                                    <td><img src="../assets/images/crypto-currencies/bitcoinglod.svg" alt="" class="w-7 h-7"></td>
                                    <td>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="1">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-red">$16</td>
                                    <td class="">$56,2432</td>
                                    <td>16Th Apr 2019</td>
                                    <td class=""><a href="ico.html" class="btn btn-primary">View Details</a></td>
                                </tr><tr class="border-bottom even" role="row">
                                    <td class="sorting_1">Cardano</td>
                                    <td><img src="../assets/images/crypto-currencies/cardano.svg" alt="Cardano" class="w-7 h-7"></td>
                                    <td>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-red">$17</td>
                                    <td class="">$94,521</td>
                                    <td>04Th Feb 2019</td>
                                    <td class=""><a href="ico.html" class="btn btn-primary">View Details</a></td>
                                </tr><tr class="border-bottom odd" role="row">
                                    <td class="sorting_1">Dash</td>
                                    <td><img src="../assets/images/crypto-currencies/dash.svg" alt="Dash" class="w-7 h-7"></td>
                                    <td>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-red">$15</td>
                                    <td class="">$5,881,413</td>
                                    <td>17Th Jan 2019</td>
                                    <td class=""><a href="ico.html" class="btn btn-primary">View Details</a></td>
                                </tr><tr class="border-bottom even" role="row">
                                    <td class="sorting_1">EOS</td>
                                    <td><img src="../assets/images/crypto-currencies/eos.svg" alt="EOS" class="w-7 h-7"></td>
                                    <td>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-red">$21</td>
                                    <td class="">$65,457</td>
                                    <td>17Th Jan 2019</td>
                                    <td class=""><a href="ico.html" class="btn btn-primary">View Details</a></td>
                                </tr><tr class="border-bottom odd" role="row">
                                    <td class="sorting_1">Ethereum</td>
                                    <td><img src="../assets/images/crypto-currencies/ethereum.svg" alt="Ethereum" class="w-7 h-7"></td>
                                    <td>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="1">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-red">$19</td>
                                    <td class="">$6,54,142</td>
                                    <td>14Th Jan 2019</td>
                                    <td class=""><a href="ico.html" class="btn btn-primary">View Details</a></td>
                                </tr><tr class="border-bottom even" role="row">
                                    <td class="sorting_1">IOTA</td>
                                    <td><img src="../assets/images/crypto-currencies/iota.svg" alt="Bitcoin" class="w-7 h-7"></td>
                                    <td>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-red">$17</td>
                                    <td class="">$881,413</td>
                                    <td>13Th Feb 2019</td>
                                    <td class=""><a href="ico.html" class="btn btn-primary">View Details</a></td>
                                </tr><tr class="border-bottom odd" role="row">
                                    <td class="sorting_1">Litecoin</td>
                                    <td><img src="../assets/images/crypto-currencies/litecoin.svg" alt="Litecoin" class="w-7 h-7"></td>
                                    <td>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-red">$15</td>
                                    <td class="">$1,451,413</td>
                                    <td>26Th Jan 2019</td>
                                    <td class=""><a href="ico.html" class="btn btn-primary">View Details</a></td>
                                </tr><tr class="border-bottom even" role="row">
                                    <td class="sorting_1">Monero</td>
                                    <td><img src="../assets/images/crypto-currencies/monero.svg" alt="" class="w-7 h-7"></td>
                                    <td>
                                        <div class="rating-stars">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="1">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-red">$25</td>
                                    <td class="">$65,524</td>
                                    <td>06Th Jan 2019</td>
                                    <td class=""><a href="ico.html" class="btn btn-primary">View Details</a></td>
                                </tr></tbody>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Add Listings-->
    @include('frontend.source.elements.latest_ads')
    @include('frontend.sections.news_letter')
@endsection
