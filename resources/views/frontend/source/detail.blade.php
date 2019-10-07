@extends(_get_frontend_layout_path('temp'))

@section('content')
    @include('frontend.supplier.elements.search')

    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                             <div id="profile-log-switch">
                        <div class="media-heading">
                            <h3><strong>{{ $source->name }}</strong></h3>
                        </div>
                        <div class="table-responsive ">
                            <table class="table row table-borderless">
                                <tbody class="col-lg-12 col-xl-6 p-0">
                                <tr>
                                    <td><strong>Purchase Quantity: </strong> {{ $source->quantity.' '.$source->unit }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Category :</strong> {{ $source->category->name }}</td>
                                </tr>
                                </tbody>
                                <tbody class="col-lg-12 col-xl-6 p-0">
                                <tr>
                                    <td><strong>Post Date :</strong>{{ $source->created_at->format('Y-m-d') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Valid Date :</strong> {{ $source->valid_date }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                        </div>
                    </div>
                    <div class="panel panel-primary bg-white">
                        <div class=" tab-menu-heading">
                            <div class="tabs-menu1 ">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li class=""><a href="#description" class="active" data-toggle="tab">Product Description</a></li>
                                    <li><a href="#info" data-toggle="tab" class="">Buyer Information</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body tabs-menu-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="description">
                                    <div class="row profie-img">
                                        <div class="col-md-12 text-justify">
                                            {!! $source->description !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="info">
                                    <p> default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>
                                </div>
                            </div>
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
