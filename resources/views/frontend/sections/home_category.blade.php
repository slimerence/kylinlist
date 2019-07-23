<!--Categories-->
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title center-block text-center">
            <h3>Categories</h3>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="row">
            @foreach($roots as $key=>$root)
                @if($key<8)
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="item-card">
                            <div class="item-card-desc">
                                <a href="{{ url($root->url) }}"></a>
                                <div class="item-card-img">
                                    @php
                                        $image = $root->getImage();
                                        if($image){
                                            $path = $image->url;
                                        }else{
                                            $path = 'images/categories/categories0'.($key%9+1).'.jpg';
                                        }
                                    @endphp
                                    <img src="{{ asset($path) }}" alt="img" class="br-tr-7 br-tl-7">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">{{ $root->name }}<span>({{ count($root->countSupplier()) }})</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
<!--/Categories-->
