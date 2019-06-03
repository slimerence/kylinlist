<div class="card mb-lg-0">
    <div class="card-header">
        <h3 class="card-title">Latest Business Ads</h3>
    </div>
    <div class="card-body">
        <div id="myCarousel4" class="owl-carousel testimonial-owl-carousel2">
            <!-- Wrapper for carousel items -->
            @for($i=0;$i<5;$i++)
            <div class="item">
                <div class="card mb-0">
                    <div class="item-card7-imgs">
                        <span class="bdir label label-primary mb-0">{{ \App\Model\Category::$array_category[$i] }}</span>
                        <a href="{{ url('supplier') }}"></a>
                        <img src="{{ asset('images/products/TP0'.($i%4+1).'.jpg') }}" alt="img" class="cover-image">
                    </div>
                    <div class="card-body">
                        <div class="item-card7-desc">
                            <a href="business.html" class="text-dark"><h4 class="font-weight-semibold">Globex</h4></a>
                        </div>
                        <div class="item-card7-text">
                            <ul class="icon-card mb-0">
                                <li class=""><a href="#" class="icons"><i class="si si-location-pin text-muted mr-1"></i>  Los Angles</a></li>
                                <li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5 hours ago</a></li>
                                <li class="mb-0"><a href="#" class="icons"><i class="si si-user text-muted mr-1"></i> Sally Peake</a></li>
                                <li class="mb-0"><a href="#" class="icons"><i class="si si-phone text-muted mr-1"></i> 5-67987608</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           @endfor
        </div>

    </div>
</div>
