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
                    <div class="card mb-0">
                        <div class="table-responsive p-5">
                            <table class="data-table table table-bordered ico-listing text-nowrap">
                                <thead>
                                <tr class="border-bottom">
                                    <th class="font-weight-bold">Product Name</th>
                                    <th class="font-weight-bold">Purchase Quantity</th>
                                    <th class="font-weight-bold">Valid to</th>
                                    <th class="font-weight-bold">Total Inquiries</th>
                                    <th class=""></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sources as $source)
                                <tr class="border-bottom">
                                    <td>{{ $source->name }}</td>
                                    <td>
                                        {{ $source->quantity.' '.$source->unit }}
                                    </td>
                                    <td>{{ $source->valid_date }}</td>
                                    <td class="text-red">{{ $source->remark }}</td>
                                    <td class=""><a href="{{ url('source-request/detail/'.$source->id) }}" class="btn btn-primary">View Details</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
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
