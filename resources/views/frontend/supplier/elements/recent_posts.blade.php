<div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-body items-gallery">
            <div class="items-blog-tab text-center">
                <h1 class="">Latest News</h1>
                <div class="items-blog-tab-heading row">
                    <div class="col-12">
                        <ul class="nav items-blog-tab-menu">
                            <li class=""><a href="#tab-1" class="active show" data-toggle="tab">All</a></li>
                            <li><a href="#tab-2" data-toggle="tab" class="">Business</a></li>
                            <li><a href="#tab-3" data-toggle="tab" class="">Beauty</a></li>
                            <li><a href="#tab-4" data-toggle="tab" class="">Real Estate</a></li>
                            <li><a href="#tab-5" data-toggle="tab" class="">Restaurant</a></li>
                        </ul>
                    </div>
                </div>


                <div class="tab-content">
                    @for($i=1;$i<5;$i++)
                        <div class="tab-pane {{ $i==1?'active show':'' }}" id="{{ 'tab-'.$i }}">
                            <div class="row">
                                @for($j=0;$j<4;$j++)
                                    <div class="col-xl-3 col-lg-6 col-md-12">
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img  br-tr-7 br-tl-7">
                                                <img src={{ asset('images/categories/news0'.($j%4+1).'.jpg') }} class="cover-image">
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
