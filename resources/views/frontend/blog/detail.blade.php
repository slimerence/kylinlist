@extends(_get_frontend_layout_path('temp'))

@section('content')

    <!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="/assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h2 class="">Industry News</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/industry') }}">Industry</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">{{ $blog->category->name }}</li>
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
                    <div class="card">
                        <div class="card-body">
                            @if($blog->feature_image !==null)
                            <div class="item7-card-img">
                                <img src="{{ asset($blog->feature_image) }}" alt="img" class="w-100">
                                <div class="item7-card-text">
                                    <span class="badge badge-info">{{ $blog->category->name }}</span>
                                </div>
                            </div>
                            @endif
                            <div class="item7-card-desc d-flex mb-2 mt-3">
                                <span><i class="fa fa-calendar-o text-muted mr-2"></i>{{ $blog->created_at->format('M-d-Y') }}</span>
                                @if(false)
                                <div class="ml-auto">
                                    <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
                                </div>
                                @endif
                            </div>
                            <h1 class="font-weight-semibold text-dark">{{ $blog->title }}</h1>
                            {!! $blog->content !!}
                        </div>
                    </div>
                    {{--@include('frontend.blog.comment')--}}
                    <div class="card mb-lg-0">
                        <div class="card-header">
                            <h3 class="card-title">Write Your Comments</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name1" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Your Comment"></textarea>
                            </div>
                            <a href="#" class="btn btn-primary">Submit</a>
                        </div>
                    </div>
                </div>

                <!--Rightside Content-->
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
                <!--/Rightside Content-->
            </div>
        </div>
    </section>
    <!--/Add listing-->
    @include('frontend.sections.news_letter')
@endsection
