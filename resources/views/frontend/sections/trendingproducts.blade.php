
<!--Trending Products-->
<section class="sptb">
    <div class="container">
        <div class="section-title center-block text-center">
            <h2>Trending<span class="kylin-title"> PRODUCTS</span></h2>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div id="feature-carousel" class="owl-carousel owl-carousel-icons">
            @foreach($t_products as $i=>$product)
                <div class="item">
                    <div class="card mb-0">
                        <div class="arrow-ribbon {{ $i%2==1? 'bg-danger':'bg-info' }}">Open</div>
                        <div class="item-card7-imgs">
                            <a href="{{ url('product/'.$product->url) }}"></a>
                            <img src="{{ asset($product->image_path) }}" alt="img" style="max-height: 280px;" class="cover-image">
                        </div>
                        <div class="item-card7-overlaytext">
                            <a href="{{ url('product/'.$product->url) }}" class="text-white"> {{ $product->name }} </a>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="{{ url('product/'.$product->url) }}" class="text-dark"><h4 class="font-weight-semibold" style="height: 2em;">{{ $product->name }}</h4></a>
                                </div>
                                <ul class="d-flex">
                                    <li class=""><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i> {{ $product->supplier->city }}</a></li>
                                    <li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i>{{ $product->updated_at->format('d M') }}</a></li>
{{--
                                    <li class=""><a href="#" class="icons"><i class="si si-phone text-muted mr-1"></i> 14 675 65430</a></li>
--}}
                                </ul>
                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footerimg d-md-flex mt-0 mb-0">
                                <div class="d-flex footerimg-l mb-0">
                                    <img src="{{ asset($product->supplier->avatar_path) }}" alt="image" class="avatar brround  mr-2">
                                    <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">{{ $product->supplier->contact_person }}<i class="si si-check text-success fs-12 ml-1" data-toggle="tooltip" data-placement="top" title="verified"></i></h5>
                                </div>
                                <div class="mt-2 footerimg-r ml-auto">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Comments"><span class="text-muted mr-2"><i class="fa fa-comment-o"></i> 16</span></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Views"><span class="text-muted"><i class="fa fa-eye"></i> 22</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--/Trending Products-->
