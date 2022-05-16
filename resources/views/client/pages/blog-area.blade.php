<section class="blogs-main section">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp">
                <div class="section-title">
                    <span class="title-bg">News</span>
                    <h1>Latest Blogs</h1>
                    <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum
                        aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin
                    <p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row blog-slider">
                    @foreach ($news as $new)
                        <div class="col-lg-4 col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src={{$new->image}} alt="#">
                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-inner">
                                        <h4><a href="blog-single.html"> {{$new->title}} </a></h4>
                                        <p> {{$new->detail}} </p>
                                        <div class="meta">
                                            <span><i class="fa fa-bolt"></i><a href="#"> {{$new->type_of_job}} </a></span>
                                            <span><i class="fa fa-calendar"></i>{{$new->date}}</span>
                                            <span><i class="fa fa-eye"></i><a href="#">{{$new->view}}</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
