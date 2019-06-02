<!--Blogs-->
<section class="sptb">
    <div class="container">
        <div class="section-title center-block text-center">
            <h1>News</h1>
            <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">
            @for($i=0;$i<5;$i++)
                <div class="item">
                    <div class="card mb-0">
                        <div class="item7-card-img">
                            <a href="#"></a>
                            <img src="../assets/images/products/products/j2.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="card-body p-4">
                            <div class="item7-card-desc d-flex mb-2">
                                <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2018</a>
                                <div class="ml-auto">
                                    <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
                                </div>
                            </div>
                            <a href="blog-details.html" class="text-dark"><h4 class="fs-20">Sed ut perspiciatis unde iste</h4></a>
                            <p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
                            <div class="d-flex align-items-center pt-2 mt-auto">
                                <img src="../assets/images/faces/male/7.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
                                <div>
                                    <a href="profile.html" class="text-default">Tanner Mallari</a>
                                    <small class="d-block text-muted">2 days ago</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
<!--/Blogs-->
