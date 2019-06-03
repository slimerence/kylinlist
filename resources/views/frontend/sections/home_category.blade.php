<!--Categories-->
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title center-block text-center">
            <h3>Categories</h3>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="row">
            @for($i=0;$i<8;$i++)
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="{{ url('/suppliers') }}"></a>
                                <div class="item-card-img">
                                    <img src={{ asset('images/categories/categories0'.($i%9+1).'.jpg') }} alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">{{ \App\Model\Category::$array_category[$i] }}<span>({{ $i*6 }})</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
<!--/Categories-->
