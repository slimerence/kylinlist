@extends(_get_frontend_layout_path('temp'))

@section('content')

    @include('frontend.sections.search')
    @include('frontend.sections.sliders')
    @include('frontend.sections.postrequest')
    @include('frontend.sections.trendingproducts')
    @include('frontend.sections.partner')
    @include('frontend.sections.ourservices')

<!--Testimonials-->
<section class="sptb">
    <div class="container">
        <div class="section-title center-block text-center">
            <h1>Testimonials</h1>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                    @for($i=0;$i<3;$i++)
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia">
                                        <div class="testimonia-img mx-auto mb-3">
                                            <img src={{ asset('images/others/portrait0'.($i%2+5).'.jpg') }} class="img-thumbnail rounded-circle alt=" alt="">
                                        </div>
                                        <p>
                                            <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam.
                                        </p>
                                        <div class="testimonia-data">
                                            <h4 class="fs-20 mb-1">Heather Bell</h4>
                                            <div class="rating-stars">
                                                <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="{{ 5-$i }}">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Testimonials-->
@if(false)
    @include('frontend.unused.app_store')
@endif
@include('frontend.sections.news_letter')
@endsection
