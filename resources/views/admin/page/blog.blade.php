@extends('layouts.pages_main')

@section('page_content')

 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Blog</h2>
            
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container">

        <div class="row">

            <div class="col-lg-7 entries">

                <article class="entry entry-single" data-aos="fade-up">

                    <div class="entry-img">
                        <img src="
                        {{ asset('frontend/assets/img/blog-1.jpg')}}" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="blog-single.html">Testing LARAVEL ROUTES
                            </a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                    href="blog-single.html">Duke</a></li>
                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                    href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a>
                            </li>
                            <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a
                                    href="blog-single.html">12 Comments</a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                       

                       

                        <blockquote>
                            <i class="icofont-quote-left quote-left"></i>
                            <p>
                                This is Testing this is testting this is testing this is testing this is testing
                                This is Testing this is testting this is testing this is testing this is testing
                            </p>
                            <i class="las la-quote-right quote-right"></i>
                            <i class="icofont-quote-right quote-right"></i>
                        </blockquote>

                       
                       
                       
                    </div>

                    <div class="entry-footer clearfix">
                        <div class="float-left">
                            <i class="icofont-folder"></i>
                            <ul class="cats">
                                <li><a href="#">Business</a></li>
                            </ul>

                            <i class="icofont-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>

                        <div class="float-right share">
                            <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                            <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                            <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                        </div>

                    </div>

                </article><!-- End blog entry -->

                <div class="blog-author clearfix" data-aos="fade-up">
                    <img src="    {{ asset('frontend/assets/img/blog-author.jpg')}}" class="rounded-circle float-left" alt="">
                    <h4>Jane Smith</h4>
                    <div class="social-links">
                        <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
                        <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
                        <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
                    </div>
                    <p>
                        This is Testing this is testting this is testing this is testing this is testing
                        This is Testing this is testting this is testing this is testing this is testing
                    </p>
                </div><!-- End blog author bio -->

                <div class="blog-comments" data-aos="fade-up">

                    <h4 class="comments-count">2 Comments</h4>

                    <div id="comment-1" class="comment clearfix">
                        <img src="    {{ asset('frontend/assets/img/comments-1.jpg')}}" class="comment-img  float-left" alt="">
                        <h5><a href="">Vee Gal</a> <a href="#" class="reply"><i
                                    class="icofont-reply"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan, 2020</time>
                        <p>
                            This is Testing this is testting this is testing this is testing this is testing
                            This is Testing this is testting this is testing this is testing this is testing
                        </p>

                    </div><!-- End comment #1 -->

                    <div id="comment-2" class="comment clearfix">
                        <img src="    {{ asset('frontend/assets/img/comments-2.jpg')}}" class="comment-img  float-left" alt="">
                        <h5><a href="">Officer Duke</a> <a href="#" class="reply"><i class="icofont-reply"></i>
                                Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan, 2020</time>
                        <p>
                            This is Testing this is testting this is testing this is testing this is testing
                            This is Testing this is testting this is testing this is testing this is testing
                        </p>

                    </div><!-- End comment #2-->

                   
                  

                </div><!-- End blog comments -->

            </div><!-- End blog entries list -->

            <div class="col-md-5">

                <div class="sidebar" data-aos="fade-left">

                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="icofont-search"></i></button>
                        </form>

                    </div><!-- End sidebar search formn-->

                    <h3 class="sidebar-title">Categories</h3>
                    <div class="sidebar-item categories">
                        <ul>
                            <li><a href="#">General <span>(25)</span></a></li>
                            <li><a href="#">Lifestyle <span>(12)</span></a></li>
                            <li><a href="#">Travel <span>(5)</span></a></li>
                            <li><a href="#">Design <span>(22)</span></a></li>
                            <li><a href="#">Creative <span>(8)</span></a></li>
                            <li><a href="#">Educaion <span>(14)</span></a></li>
                        </ul>

                    </div><!-- End sidebar categories-->

                    <h3 class="sidebar-title">Recent Posts</h3>
                    <div class="sidebar-item recent-posts">
                        <div class="post-item clearfix">
                        <img src="{{ asset('frontend/assets/img/blog-recent-posts-1.jpg')}}" alt="">
                            <h4><a href="blog-single.html">Post Notifications Testing</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('frontend/assets/img/blog-recent-posts-2.jpg')}}" alt="">
                            <h4><a href="blog-single.html">Post Notifications Testing</a></h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                        <div class="post-item clearfix">
                            <img src="{{ asset('frontend/assets/img/blog-recent-posts-3.jpg')}}" alt="">
                            <h4><a href="blog-single.html">Post Notifications Testing</a>
                            </h4>
                            <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>

                       

                        

                    </div><!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Tags</h3>
                    <div class="sidebar-item tags">
                        <ul>
                            <li><a href="#">App</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Mac</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Studio</a></li>
                            <li><a href="#">Smart</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>

                    </div><!-- End sidebar tags-->

                </div><!-- End sidebar -->
                <div class="col-lg-12">
                    <div class="reply-form">
                        <h4>Leave a Reply</h4>
                        <p>Your email address will not be published. Required fields are marked * </p>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input name="name" type="text" class="form-control"
                                        placeholder="Your Name*">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <input name="email" type="text" class="form-control"
                                        placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <input name="website" type="text" class="form-control"
                                        placeholder="Your Website">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <textarea name="comment" class="form-control"
                                        placeholder="Your Comment*"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Post Comment</button>

                        </form>

                    </div>

                </div>
              
                

            </div><!-- End blog sidebar -->

        </div>

    </div>
</section><!-- End Blog Section -->
    
@endsection