@extends('index')
@section('content')
<body class="light-version">
<!-- Preloader -->
<div id="preloader">
    <div class="preload-content">
        <div id="loader-load"></div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="#"><span><img src="img/core-img/logo.png" alt="logo"></span> Conydor</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Home</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index-demo-1.html">Home style 1</a>
                        <a class="dropdown-item" href="index-demo-2.html">Home style 2</a>
                        <a class="dropdown-item" href="index-demo-3.html">Home style 3</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.html">FAQ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index-blog.html">Blog Posts</a>
                        <a class="dropdown-item" href="index-blog-with-sidebar.html">Sidebar Blog </a>
                        <a class="dropdown-item" href="index-single-blog.html">Blog Details</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us.html">Contact</a>
                </li>
                <li class="lh-55px"><a href="#" class="btn login-btn ml-50">Login!</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- ##### Header Area End ##### -->

<!-- ##### Welcome Area Start ##### -->
<div class="breadcumb-area clearfix auto-init">
    <!-- breadcumb content -->
    <div class="breadcumb-content">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                        <h2 class="w-text title fadeInUp" data-wow-delay="0.2s">Blog</h2>
                        <ol class="breadcrumb justify-content-center fadeInUp" data-wow-delay="0.4s">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Welcome Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<section class="blog-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Single Blog Post -->
            <div class="col-12 col-sm-6">
                <div class="single-blog-area fadeInUp" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="blog_thumbnail">
                        <img src="img/blog-img/1.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="blog-content">

                        <div class="post-meta">
                            <p>By <a href="#" class="post-author">Admin</a> <a href="#">Apr 10, 2020</a> <a href="#" class="post-comments">7 comments</a></p>
                        </div>
                        <a href="index-single-blog.html" class="post-title">
                            <h4>How to become a successful businessman.</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugiat at vitae, ratione sapiente repellat.</p>
                        <a href="index-single-blog.html" class="btn more-btn mt-15">Read Details</a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-sm-6">
                <div class="single-blog-area fadeInUp" data-wow-delay="0.3s">
                    <!-- Post Thumbnail -->
                    <div class="blog_thumbnail">
                        <img src="img/blog-img/2.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="blog-content">

                        <div class="post-meta">
                            <p>By <a href="#" class="post-author">Admin</a> <a href="#">Apr 10, 2020</a> <a href="#" class="post-comments">7 comments</a></p>
                        </div>
                        <a href="index-single-blog.html" class="post-title">
                            <h4>How to become a successful businessman.</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugiat at vitae, ratione sapiente repellat.</p>
                        <a href="index-single-blog.html" class="btn more-btn mt-15">Read Details</a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-sm-6">
                <div class="single-blog-area fadeInUp" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="blog_thumbnail">
                        <img src="img/blog-img/3.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="blog-content">

                        <div class="post-meta">
                            <p>By <a href="#" class="post-author">Admin</a> <a href="#">Apr 10, 2020</a> <a href="#" class="post-comments">7 comments</a></p>
                        </div>
                        <a href="index-single-blog.html" class="post-title">
                            <h4>How to become a successful businessman.</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugiat at vitae, ratione sapiente repellat.</p>
                        <a href="index-single-blog.html" class="btn more-btn mt-15">Read Details</a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-sm-6">
                <div class="single-blog-area fadeInUp" data-wow-delay="0.3s">
                    <!-- Post Thumbnail -->
                    <div class="blog_thumbnail">
                        <img src="img/blog-img/1.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="blog-content">

                        <div class="post-meta">
                            <p>By <a href="#" class="post-author">Admin</a> <a href="#">Apr 10, 2020</a> <a href="#" class="post-comments">7 comments</a></p>
                        </div>
                        <a href="index-single-blog.html" class="post-title">
                            <h4>How to become a successful businessman.</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugiat at vitae, ratione sapiente repellat.</p>
                        <a href="index-single-blog.html" class="btn more-btn mt-15">Read Details</a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-sm-6">
                <div class="single-blog-area fadeInUp" data-wow-delay="0.2s">
                    <!-- Post Thumbnail -->
                    <div class="blog_thumbnail">
                        <img src="img/blog-img/2.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="blog-content">

                        <div class="post-meta">
                            <p>By <a href="#" class="post-author">Admin</a> <a href="#">Apr 10, 2020</a> <a href="#" class="post-comments">7 comments</a></p>
                        </div>
                        <a href="index-single-blog.html" class="post-title">
                            <h4>How to become a successful businessman.</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugiat at vitae, ratione sapiente repellat.</p>
                        <a href="index-single-blog.html" class="btn more-btn mt-15">Read Details</a>
                    </div>
                </div>
            </div>

            <!-- Single Blog Post -->
            <div class="col-12 col-sm-6">
                <div class="single-blog-area fadeInUp" data-wow-delay="0.3s">
                    <!-- Post Thumbnail -->
                    <div class="blog_thumbnail">
                        <img src="img/blog-img/3.jpg" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="blog-content">

                        <div class="post-meta">
                            <p>By <a href="#" class="post-author">Admin</a> <a href="#">Apr 10, 2020</a> <a href="#" class="post-comments">7 comments</a></p>
                        </div>
                        <a href="index-single-blog.html" class="post-title">
                            <h4>How to become a successful businessman.</h4>
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus fugiat at vitae, ratione sapiente repellat.</p>
                        <a href="index-single-blog.html" class="btn more-btn mt-15">Read Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 section-padding-0-100">
                <div class="info-pagination fadeInUp" data-wow-delay="0.2s">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Blog Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area bg-img">
    <div class="footer-content-area mt-0">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="footer-copywrite-info">
                        <!-- Copywrite -->
                        <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                            <div class="footer-logo">
                                <a href="#"><img src="img/core-img/logo.png" alt="logo"> Conydor </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus neque illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.</p>
                        </div>
                        <!-- Social Icon -->
                        <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-6">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
                        <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                            <h5>PRIVACY & TOS</h5>
                            <a href="#"><p>Advertiser Agreement</p></a>
                            <a href="#"><p>Acceptable Use Policy</p></a>
                            <a href="#"><p>Privacy Policy</p></a>
                            <a href="#"><p>Technology Privacy</p></a>
                            <a href="#"><p>Developer Agreement</p></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-2 col-md-6 ">
                    <!-- Content Info -->
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                            <h5>NAVIGATE</h5>
                            <a href="#"><p>Advertisers</p></a>
                            <a href="#"><p>Developers</p></a>
                            <a href="#"><p>Resources</p></a>
                            <a href="#"><p>Company</p></a>
                            <a href="#"><p>Connect</p></a>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-lg-3 col-md-6 ">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
                        <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                            <h5>CONTACT US</h5>
                            <p>Mailing Address:xx00 E. Union Ave</p>
                            <p>Suite 1100. Denver, CO 80237</p>
                            <p>+999 90932 627</p>
                            <p>support@yourdomain.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ########## All JS ########## -->
<!-- jQuery js -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('js/plugins.js')}} "></script>
<!-- Active js -->
<script src="{{asset('js/script.js')}}"></script>

</body>
@endsection
