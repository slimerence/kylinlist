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
                                    <h3><strong>Product Name: </strong>{{ $source->name }}</h3>
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
                            <div class="quote-btn">
                                @if(!_checkSupplierLogin())
                                    @include('frontend.source.elements.quote_modal')
                                    <a href="#" data-toggle="modal" data-target="#quick-login" class="btn btn-danger">Login to Quote</a>
                                    @else
                                    <a href="#" data-toggle="modal" data-target="#quick-quote" class="btn btn-danger">Quote Now</a>
                                @endif
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
                        @include('frontend.source.elements.login_modal')
                        <div class="panel-body tabs-menu-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="description">
                                    <div class="row profie-img">
                                        <div class="col-md-12 text-justify">
                                            {!! $source->description !!}
                                        </div>
                                        @php
                                            $attachments = $source->attachments()->get();
                                        @endphp
                                        @if($attachments && $attachments!=null)
                                        <hr>
                                        <div class="col-12">
                                            <h4><b>Attachment Files</b></h4>
                                            @if(!_checkSupplierLogin())
                                                Please <a href="#" class="text-danger" data-toggle="modal" data-target="#quick-login">sign in</a> to get the attachments if you are our supplier.
                                            @else
                                            <ul class="list-group space-between">
                                                @foreach($attachments as $key=>$file)
                                                    <li class="listunorder1">
                                                        <span>{{ $file->alt }}</span>
                                                        <a href="{{ asset($file->url) }}" target="_blank" class="text-right btn-sm btn-info">Download</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane" id="info">
                                    <div class="profile-log-switch">
                                        @if(!_checkSupplierLogin())
                                            Please <a href="#" class="text-danger" data-toggle="modal" data-target="#quick-login">sign in</a> to view buyer business information if you are our supplier.
                                        @else
                                        <div class="media-heading">
                                            <h3 class="card-title mb-3 font-weight-bold">Contact Details</h3>
                                        </div>
                                        <ul class="usertab-list mb-0">
                                            <li><a href="" class="text-dark"><span class="font-weight-semibold">Contact Person :</span> {{ $profile->contact_person }}</a></li>
                                            <li><span class="font-weight-semibold">Location :</span> {{ $profile->country }}</li>
                                            <li><a href="{{ 'mailto:'.$profile->contact_email }}" class="text-dark"><span class="font-weight-semibold">Email :</span> {{ $profile->contact_email }}</a></li>
                                            <li><span class="font-weight-semibold">Phone :</span> {{ $profile->contact_number }} </li>
                                        </ul>
                                        <div class="row profie-img">
                                            <div class="col-md-12">
                                                <div class="media-heading">
                                                    <h3 class="card-title mb-3 font-weight-bold">Biography</h3>
                                                </div>
                                                <p>{!! $profile->description !!}</p>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
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
