@extends(_get_frontend_layout_path('temp'))

@section('content')

    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h1 class="">Industry Channel</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/industry') }}">Industry</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">All</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--Add listing-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <!--Add lists-->
                    <div class="row">
                        @foreach($blogs as $key=>$blog)
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="card overflow-hidden">
                                    <div class="ribbon ribbon-top-left text-warning"><span class="bg-warning">featured</span></div>
                                    <div class="row no-gutters">
                                        <div class="col-xl-4 col-lg-12 col-md-12">
                                            <div class="item7-card-img" style="height: 100%;">
                                                <a href="{{ url('/industry/detail') }}"></a>
                                                @if($blog->feature_image !== null)
                                                <img src="{{ asset($blog->feature_image) }}" style="height: 100%;" alt="img" class="cover-image">
                                                @else
                                                <img src="{{ asset($blog->feature_image) }}" style="height: 100%;" alt="img" class="cover-image">
                                                @endif
                                                <div class="item7-card-text">
                                                    <span class="badge badge-success">{{ $blog->category->title }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-12 col-md-12">
                                            <div class="card-body">
                                                <div class="item7-card-desc d-flex mb-1">
                                                    <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>{{ $blog->created_at->format('M-d-Y') }}</a>
                                                    @if(false)
                                                    <div class="ml-auto">
                                                        <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
                                                    </div>
                                                    @endif
                                                </div>
                                                <a href="#" class="text-dark"><h4 class="font-weight-semibold mb-3">{{ $blog->title }}</h4></a>
                                                <p class="mb-1" style="height: 2em;overflow: hidden;">{!! $blog->content !!}
                                                </p>
                                                <a href="{{ $blog->getUrl() }}" class="btn btn-primary btn-sm mt-4">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $blogs->links() }}
                    @if(false)
                    <div class="center-block text-center">
                        <ul class="pagination mb-5 mb-lg-0">
                            <li class="page-item page-prev disabled">
                                <a class="page-link" href="#" tabindex="-1">Prev</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item page-next">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                    @endif
                    <!--/Add lists-->
                </div>

                <!--Right Side Content-->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control br-tl-7 br-bl-7" placeholder="Search">
                                <div class="input-group-append ">
                                    <button type="button" class="btn btn-primary br-tr-7 br-br-7">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Categories</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-catergory">
                                <div class="item-list">
                                    <ul class="list-group mb-0">
                                        @foreach($categories as $category)
                                        <li class="list-group-item">
                                            <a href="{{ url('industry').'/'.$category->url }}" class="text-dark">
                                                <i class="fa fa-building bg-primary text-primary"></i> {{ $category->name }}
                                                <span class="badgetext badge badge-pill badge-secondary mb-0">{{ count($category->blogs) }}</span>
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--@include('frontend.sections.blog_tag')--}}
                    {{--@include('frontend.sections.blog_author')--}}
                </div>
                <!--/Right Side Content-->
            </div>
        </div>
    </section>
    <!--All Listing-->

    @include('frontend.sections.news_letter')
@endsection
