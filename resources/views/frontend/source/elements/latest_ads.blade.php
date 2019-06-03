<!--Latest Ads-->
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title center-block text-center">
            <h3>Latest Ads</h3>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
            @for($i=0;$i<9;$i++)
                <div class="item">
                    <div class="card mb-0">
                        <div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
                        <div class="item-card2-img">
                            <a href="{{ url('supplier') }}"></a>
                            <img src="{{ asset('images/categories/news0'.($i%4+1).'.jpg') }}" alt="img" class="cover-image">
                        </div>
                        <div class="item-card2-icons">
                            <a href="{{ url('supplier') }}" class="item-card2-icons-l bg-primary"> <i class="fa fa-cutlery"></i></a>
                            <a href="#" class="item-card2-icons-r bg-pink"><i class="fa fa fa-heart-o"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="item-card2">
                                <div class="item-card2-desc">
                                    <ul class="d-flex">
                                        <li class=""><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i> USA</a></li>
                                        <li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5 hours ago</a></li>
                                    </ul>
                                    <div class="item-card2-text">
                                        <a href="{{ url('supplier') }}" class="text-dark"><h4 class="">Somik Restaurant</h4></a>
                                    </div>
                                    <p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
                                    <div class="item-card2-rating mb-0">
                                        <div class="rating-stars d-inline-flex">
                                            <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
                                            <div class="rating-stars-container">
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
                                                <div class="rating-star sm">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div> (78)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="item-card2-footer">
                                <div class="item-card2-footer-u">
                                    <div class="icons text-dark"><i class="si si-user text-muted mr-1"></i> Anna <a href="#" class="ml-1" data-toggle="tooltip" data-placement="bottom" title="Verified"><i class="si si-check text-success fs-12"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
<!--Latest Ads-->
