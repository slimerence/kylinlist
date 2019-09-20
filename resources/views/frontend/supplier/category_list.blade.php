@extends(_get_frontend_layout_path('temp'))

@section('content')
    @include('frontend.supplier.elements.search')
    <!--Categories-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1>Categories</h1>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="row">
                @foreach($roots as $key=>$root)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card">
                            <div class="item-card">
                                <div class="item-card-desc">
                                    <a href="{{ url($root->url) }}"></a>
                                    @php
                                        $image = $root->getImage();
                                        if($image){
                                            $path = $image->url;
                                        }else{
                                            $path = 'images/categories/categories0'.($key%9+1).'.jpg';
                                        }
                                    @endphp
                                    <div class="item-card-img">
                                        <img src="{{ asset($path) }}" alt="img" class="br-tr-7 br-tl-7">
                                    </div>
                                    <div class="item-card-text">
                                        <h4 class="mb-0">{{ $root->name }}<span>({{ count($root->countSupplier())}})</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @include('frontend.supplier.elements.recent_posts')
            </div>
        </div>
    </section>
    <!--/Categories-->
    @if(false)
        @include('frontend.supplier.elements.full_category_list')
    @endif
    @include('frontend.sections.news_letter')
@endsection
